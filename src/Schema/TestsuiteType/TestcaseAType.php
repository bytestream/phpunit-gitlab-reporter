<?php

namespace SupportPal\PHPUnitGitLabReporter\Schema\TestsuiteType;

/**
 * Class representing TestcaseAType
 */
class TestcaseAType
{

    /**
     * Name of the test method
     *
     * @var string $name
     */
    private $name = null;

    /**
     * Full class name for the class the test method is in.
     *
     * @var string $classname
     */
    private $classname = null;

    /**
     * Time taken (in seconds) to execute the test
     *
     * @var float $time
     */
    private $time = null;

    /**
     * @var mixed $skipped
     */
    private $skipped = null;

    /**
     * Indicates that the test errored. An errored test is one that had an unanticipated problem. e.g., an unchecked throwable; or a problem with the implementation of the test. Contains as a text node relevant data for the error, e.g., a stack trace
     *
     * @var \SupportPal\PHPUnitGitLabReporter\Schema\TestsuiteType\TestcaseAType\ErrorAType $error
     */
    private $error = null;

    /**
     * Indicates that the test failed. A failure is a test which the code has explicitly failed by using the mechanisms for that purpose. e.g., via an assertEquals. Contains as a text node relevant data for the failure, e.g., a stack trace
     *
     * @var \SupportPal\PHPUnitGitLabReporter\Schema\TestsuiteType\TestcaseAType\FailureAType $failure
     */
    private $failure = null;

    /**
     * Gets as name
     *
     * Name of the test method
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Name of the test method
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as classname
     *
     * Full class name for the class the test method is in.
     *
     * @return string
     */
    public function getClassname()
    {
        return $this->classname;
    }

    /**
     * Sets a new classname
     *
     * Full class name for the class the test method is in.
     *
     * @param string $classname
     * @return self
     */
    public function setClassname($classname)
    {
        $this->classname = $classname;
        return $this;
    }

    /**
     * Gets as time
     *
     * Time taken (in seconds) to execute the test
     *
     * @return float
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Sets a new time
     *
     * Time taken (in seconds) to execute the test
     *
     * @param float $time
     * @return self
     */
    public function setTime($time)
    {
        $this->time = $time;
        return $this;
    }

    /**
     * Gets as skipped
     *
     * @return mixed
     */
    public function getSkipped()
    {
        return $this->skipped;
    }

    /**
     * Sets a new skipped
     *
     * @param mixed $skipped
     * @return self
     */
    public function setSkipped($skipped)
    {
        $this->skipped = $skipped;
        return $this;
    }

    /**
     * Gets as error
     *
     * Indicates that the test errored. An errored test is one that had an unanticipated problem. e.g., an unchecked throwable; or a problem with the implementation of the test. Contains as a text node relevant data for the error, e.g., a stack trace
     *
     * @return \SupportPal\PHPUnitGitLabReporter\Schema\TestsuiteType\TestcaseAType\ErrorAType
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Sets a new error
     *
     * Indicates that the test errored. An errored test is one that had an unanticipated problem. e.g., an unchecked throwable; or a problem with the implementation of the test. Contains as a text node relevant data for the error, e.g., a stack trace
     *
     * @param \SupportPal\PHPUnitGitLabReporter\Schema\TestsuiteType\TestcaseAType\ErrorAType $error
     * @return self
     */
    public function setError(\SupportPal\PHPUnitGitLabReporter\Schema\TestsuiteType\TestcaseAType\ErrorAType $error)
    {
        $this->error = $error;
        return $this;
    }

    /**
     * Gets as failure
     *
     * Indicates that the test failed. A failure is a test which the code has explicitly failed by using the mechanisms for that purpose. e.g., via an assertEquals. Contains as a text node relevant data for the failure, e.g., a stack trace
     *
     * @return \SupportPal\PHPUnitGitLabReporter\Schema\TestsuiteType\TestcaseAType\FailureAType
     */
    public function getFailure()
    {
        return $this->failure;
    }

    /**
     * Sets a new failure
     *
     * Indicates that the test failed. A failure is a test which the code has explicitly failed by using the mechanisms for that purpose. e.g., via an assertEquals. Contains as a text node relevant data for the failure, e.g., a stack trace
     *
     * @param \SupportPal\PHPUnitGitLabReporter\Schema\TestsuiteType\TestcaseAType\FailureAType $failure
     * @return self
     */
    public function setFailure(\SupportPal\PHPUnitGitLabReporter\Schema\TestsuiteType\TestcaseAType\FailureAType $failure)
    {
        $this->failure = $failure;
        return $this;
    }


}

