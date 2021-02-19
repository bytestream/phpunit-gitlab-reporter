<?php

namespace SupportPal\PHPUnitGitLabReporter\Schema;

/**
 * Class representing TestsuiteType
 *
 * Contains the results of exexuting a testsuite
 * XSD Type: testsuite
 */
class TestsuiteType
{

    /**
     * Full class name of the test for non-aggregated testsuite documents. Class name without the package for aggregated testsuites documents
     *
     * @var string $name
     */
    private $name = null;

    /**
     * when the test was executed. Timezone may not be specified.
     *
     * @var \DateTime $timestamp
     */
    private $timestamp = null;

    /**
     * Host on which the tests were executed. 'localhost' should be used if the hostname cannot be determined.
     *
     * @var string $hostname
     */
    private $hostname = null;

    /**
     * The total number of tests in the suite
     *
     * @var int $tests
     */
    private $tests = null;

    /**
     * The total number of tests in the suite that failed. A failure is a test which the code has explicitly failed by using the mechanisms for that purpose. e.g., via an assertEquals
     *
     * @var int $failures
     */
    private $failures = null;

    /**
     * The total number of tests in the suite that errored. An errored test is one that had an unanticipated problem. e.g., an unchecked throwable; or a problem with the implementation of the test.
     *
     * @var int $errors
     */
    private $errors = null;

    /**
     * The total number of ignored or skipped tests in the suite.
     *
     * @var int $skipped
     */
    private $skipped = null;

    /**
     * Time taken (in seconds) to execute the tests in the suite
     *
     * @var float $time
     */
    private $time = null;

    /**
     * Properties (e.g., environment settings) set during test execution
     *
     * @var \SupportPal\PHPUnitGitLabReporter\Schema\TestsuiteType\PropertiesAType\PropertyAType[] $properties
     */
    private $properties = null;

    /**
     * @var \SupportPal\PHPUnitGitLabReporter\Schema\TestsuiteType\TestcaseAType[] $testcase
     */
    private $testcase = [
        
    ];

    /**
     * Data that was written to standard out while the test was executed
     *
     * @var string $systemOut
     */
    private $systemOut = null;

    /**
     * Data that was written to standard error while the test was executed
     *
     * @var string $systemErr
     */
    private $systemErr = null;

    /**
     * Gets as name
     *
     * Full class name of the test for non-aggregated testsuite documents. Class name without the package for aggregated testsuites documents
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
     * Full class name of the test for non-aggregated testsuite documents. Class name without the package for aggregated testsuites documents
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
     * Gets as timestamp
     *
     * when the test was executed. Timezone may not be specified.
     *
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Sets a new timestamp
     *
     * when the test was executed. Timezone may not be specified.
     *
     * @param \DateTime $timestamp
     * @return self
     */
    public function setTimestamp(\DateTime $timestamp)
    {
        $this->timestamp = $timestamp;
        return $this;
    }

    /**
     * Gets as hostname
     *
     * Host on which the tests were executed. 'localhost' should be used if the hostname cannot be determined.
     *
     * @return string
     */
    public function getHostname()
    {
        return $this->hostname;
    }

    /**
     * Sets a new hostname
     *
     * Host on which the tests were executed. 'localhost' should be used if the hostname cannot be determined.
     *
     * @param string $hostname
     * @return self
     */
    public function setHostname($hostname)
    {
        $this->hostname = $hostname;
        return $this;
    }

    /**
     * Gets as tests
     *
     * The total number of tests in the suite
     *
     * @return int
     */
    public function getTests()
    {
        return $this->tests;
    }

    /**
     * Sets a new tests
     *
     * The total number of tests in the suite
     *
     * @param int $tests
     * @return self
     */
    public function setTests($tests)
    {
        $this->tests = $tests;
        return $this;
    }

    /**
     * Gets as failures
     *
     * The total number of tests in the suite that failed. A failure is a test which the code has explicitly failed by using the mechanisms for that purpose. e.g., via an assertEquals
     *
     * @return int
     */
    public function getFailures()
    {
        return $this->failures;
    }

    /**
     * Sets a new failures
     *
     * The total number of tests in the suite that failed. A failure is a test which the code has explicitly failed by using the mechanisms for that purpose. e.g., via an assertEquals
     *
     * @param int $failures
     * @return self
     */
    public function setFailures($failures)
    {
        $this->failures = $failures;
        return $this;
    }

    /**
     * Gets as errors
     *
     * The total number of tests in the suite that errored. An errored test is one that had an unanticipated problem. e.g., an unchecked throwable; or a problem with the implementation of the test.
     *
     * @return int
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Sets a new errors
     *
     * The total number of tests in the suite that errored. An errored test is one that had an unanticipated problem. e.g., an unchecked throwable; or a problem with the implementation of the test.
     *
     * @param int $errors
     * @return self
     */
    public function setErrors($errors)
    {
        $this->errors = $errors;
        return $this;
    }

    /**
     * Gets as skipped
     *
     * The total number of ignored or skipped tests in the suite.
     *
     * @return int
     */
    public function getSkipped()
    {
        return $this->skipped;
    }

    /**
     * Sets a new skipped
     *
     * The total number of ignored or skipped tests in the suite.
     *
     * @param int $skipped
     * @return self
     */
    public function setSkipped($skipped)
    {
        $this->skipped = $skipped;
        return $this;
    }

    /**
     * Gets as time
     *
     * Time taken (in seconds) to execute the tests in the suite
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
     * Time taken (in seconds) to execute the tests in the suite
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
     * Adds as property
     *
     * Properties (e.g., environment settings) set during test execution
     *
     * @return self
     * @param \SupportPal\PHPUnitGitLabReporter\Schema\TestsuiteType\PropertiesAType\PropertyAType $property
     */
    public function addToProperties(\SupportPal\PHPUnitGitLabReporter\Schema\TestsuiteType\PropertiesAType\PropertyAType $property)
    {
        $this->properties[] = $property;
        return $this;
    }

    /**
     * isset properties
     *
     * Properties (e.g., environment settings) set during test execution
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProperties($index)
    {
        return isset($this->properties[$index]);
    }

    /**
     * unset properties
     *
     * Properties (e.g., environment settings) set during test execution
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProperties($index)
    {
        unset($this->properties[$index]);
    }

    /**
     * Gets as properties
     *
     * Properties (e.g., environment settings) set during test execution
     *
     * @return \SupportPal\PHPUnitGitLabReporter\Schema\TestsuiteType\PropertiesAType\PropertyAType[]
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * Sets a new properties
     *
     * Properties (e.g., environment settings) set during test execution
     *
     * @param \SupportPal\PHPUnitGitLabReporter\Schema\TestsuiteType\PropertiesAType\PropertyAType[] $properties
     * @return self
     */
    public function setProperties(array $properties)
    {
        $this->properties = $properties;
        return $this;
    }

    /**
     * Adds as testcase
     *
     * @return self
     * @param \SupportPal\PHPUnitGitLabReporter\Schema\TestsuiteType\TestcaseAType $testcase
     */
    public function addToTestcase(\SupportPal\PHPUnitGitLabReporter\Schema\TestsuiteType\TestcaseAType $testcase)
    {
        $this->testcase[] = $testcase;
        return $this;
    }

    /**
     * isset testcase
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTestcase($index)
    {
        return isset($this->testcase[$index]);
    }

    /**
     * unset testcase
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTestcase($index)
    {
        unset($this->testcase[$index]);
    }

    /**
     * Gets as testcase
     *
     * @return \SupportPal\PHPUnitGitLabReporter\Schema\TestsuiteType\TestcaseAType[]
     */
    public function getTestcase()
    {
        return $this->testcase;
    }

    /**
     * Sets a new testcase
     *
     * @param \SupportPal\PHPUnitGitLabReporter\Schema\TestsuiteType\TestcaseAType[] $testcase
     * @return self
     */
    public function setTestcase(array $testcase)
    {
        $this->testcase = $testcase;
        return $this;
    }

    /**
     * Gets as systemOut
     *
     * Data that was written to standard out while the test was executed
     *
     * @return string
     */
    public function getSystemOut()
    {
        return $this->systemOut;
    }

    /**
     * Sets a new systemOut
     *
     * Data that was written to standard out while the test was executed
     *
     * @param string $systemOut
     * @return self
     */
    public function setSystemOut($systemOut)
    {
        $this->systemOut = $systemOut;
        return $this;
    }

    /**
     * Gets as systemErr
     *
     * Data that was written to standard error while the test was executed
     *
     * @return string
     */
    public function getSystemErr()
    {
        return $this->systemErr;
    }

    /**
     * Sets a new systemErr
     *
     * Data that was written to standard error while the test was executed
     *
     * @param string $systemErr
     * @return self
     */
    public function setSystemErr($systemErr)
    {
        $this->systemErr = $systemErr;
        return $this;
    }


}

