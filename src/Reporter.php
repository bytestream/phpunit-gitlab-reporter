<?php declare(strict_types=1);

namespace SupportPal\PHPUnitGitLabReporter;

use PHPUnit\Framework\AssertionFailedError;
use PHPUnit\Framework\Exception;
use PHPUnit\Framework\ExceptionWrapper;
use PHPUnit\Framework\SelfDescribing;
use PHPUnit\Framework\Test;
use PHPUnit\Framework\TestFailure;
use PHPUnit\Framework\TestListener;
use PHPUnit\Framework\TestSuite;
use PHPUnit\Framework\Warning;
use PHPUnit\Util\Filter;
use PHPUnit\Util\Printer;
use ReflectionClass;
use ReflectionException;
use SupportPal\PHPUnitGitLabReporter\Schema\Testsuites;
use SupportPal\PHPUnitGitLabReporter\Schema\Testsuites\TestsuitesAType\TestsuiteAType;
use SupportPal\PHPUnitGitLabReporter\Schema\TestsuiteType\TestcaseAType;
use SupportPal\PHPUnitGitLabReporter\Serializer\Serializer;
use Throwable;

use function count;
use function get_class;
use function trim;

class Reporter extends Printer implements TestListener
{
    /** @var Serializer */
    private $serializer;

    /** @var int */
    private $currentSuiteLevel = 0;

    /** @var Testsuites */
    private $suites;

    /** @var TestsuiteAType */
    private $suite;

    /** @var float */
    private $suiteTime;

    /** @var int */
    private $suiteErrors;

    /** @var int */
    private $suiteFailures;

    /** @var int */
    private $suiteSkipped;

    /** @var TestcaseAType */
    private $testCase;

    /**
     * Constructor.
     *
     * @param null|resource|string $out
     *
     * @throws Exception
     */
    public function __construct($out = null)
    {
        parent::__construct($out);

        $this->serializer = new Serializer;
        $this->suites = new Testsuites;
    }

    public function getXML(): string
    {
        return $this->serializer->toXml($this->suites);
    }

    /**
     * Flush buffer and close output if it's not to a PHP stream.
     */
    public function flush(): void
    {
        $this->write($this->getXML());

        parent::flush();
    }

    public function addError(Test $test, Throwable $t, float $time): void
    {
        $error = new TestcaseAType\ErrorAType($this->exceptionToString($test, $t));
        $error->setType($this->exceptionType($t));

        $this->suiteErrors++;
        $this->testCase->setError($error);
    }

    public function addWarning(Test $test, Warning $e, float $time): void
    {
        // Unsupported
    }

    public function addFailure(Test $test, AssertionFailedError $e, float $time): void
    {
        $failure = new TestcaseAType\FailureAType($this->exceptionToString($test, $e));
        $failure->setType($this->exceptionType($e));

        $this->suiteFailures++;
        $this->testCase->setFailure($failure);
    }

    public function addIncompleteTest(Test $test, Throwable $t, float $time): void
    {
        // Unsupported
    }

    public function addRiskyTest(Test $test, Throwable $t, float $time): void
    {
        // Unsupported
    }

    public function addSkippedTest(Test $test, Throwable $t, float $time): void
    {
        $this->suiteSkipped++;
    }

    public function startTestSuite(TestSuite $suite): void
    {
        $this->currentSuiteLevel++;
        if ($this->suite !== null) {
            return;
        }

        $this->suiteTime = 0.0;
        $this->suiteErrors = 0;
        $this->suiteFailures = 0;
        $this->suiteSkipped = 0;

        $this->suite = new Schema\Testsuites\TestsuitesAType\TestsuiteAType;
        $this->suite->setName($suite->getName());
    }

    public function endTestSuite(TestSuite $suite): void
    {
        $this->currentSuiteLevel--;
        if ($this->currentSuiteLevel !== 0) {
            return;
        }

        $this->suite->setTests(count($suite->tests()));
        $this->suite->setErrors($this->suiteErrors);
        $this->suite->setFailures($this->suiteFailures);
        $this->suite->setSkipped($this->suiteSkipped);
        $this->suite->setTime($this->suiteTime);

        $this->suites->addToTestsuite($this->suite);
        $this->suite = null;
    }

    public function startTest(Test $test): void
    {
        $this->testCase = new TestcaseAType;
        $this->testCase->setName($test->getName());
        $this->testCase->setClassname($this->getClassname($test)->getName());
    }

    public function endTest(Test $test, float $time): void
    {
        $this->suiteTime += $time;
        $this->testCase->setTime($time);

        $this->suite->addToTestcase($this->testCase);
    }

    private function getClassname(Test $test): ReflectionClass
    {
        try {
            return new ReflectionClass($test);
        } catch (ReflectionException $e) {
            throw new Exception(
                $e->getMessage(),
                (int) $e->getCode(),
                $e
            );
        }
    }

    private function exceptionType(Throwable $t): string
    {
        if ($t instanceof ExceptionWrapper) {
            return $t->getClassName();
        }

        return get_class($t);
    }

    private function exceptionToString(Test $test, Throwable $t): string
    {
        if ($test instanceof SelfDescribing) {
            $buffer = $test->toString() . "\n";
        } else {
            $buffer = '';
        }

        $buffer .= trim(
            TestFailure::exceptionToString($t) . "\n" .
            Filter::getFilteredStacktrace($t)
        );

        return $buffer;
    }
}
