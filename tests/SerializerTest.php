<?php declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use SupportPal\PHPUnitGitLabReporter\Schema\Testsuites;
use SupportPal\PHPUnitGitLabReporter\Schema\Testsuites\TestsuitesAType\TestsuiteAType;
use SupportPal\PHPUnitGitLabReporter\Schema\TestsuiteType\TestcaseAType;
use SupportPal\PHPUnitGitLabReporter\Serializer\Serializer;

use function file_get_contents;

class SerializerTest extends TestCase
{
    public function testSerialize(): void
    {
        $suites = new Testsuites;
        $suites->addToTestsuite($this->createTestSuite());
        $suites->addToTestsuite($this->createTestSuite());
        $suites->addToTestsuite($this->createTestSuite());

        $this->assertSame(
            file_get_contents(__DIR__.'/snapshots/serializer-test-serialize_1.txt'),
            (new Serializer)->toXml($suites)
        );
    }

    private function createTestSuite()
    {
        $suite = new TestsuiteAType;
        $suite->setId('123');
        $suite->setName('foo');
        $suite->setTests(1);
        $suite->setTime(96.378);
        $suite->setTestcase([$this->createTestCase()]);

        return $suite;
    }

    private function createTestCase(): TestcaseAType
    {
        $case = new TestcaseAType;
        $case->setName('testGlobalCreateInstanceOf');
        $case->setClassname('Tests\Database\Core\Mailer\ConfigSmtpServiceTest');
        $case->setTime(0.13412);

        return $case;
    }
}
