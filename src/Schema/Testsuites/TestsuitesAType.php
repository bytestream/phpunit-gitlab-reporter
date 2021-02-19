<?php

namespace SupportPal\PHPUnitGitLabReporter\Schema\Testsuites;

/**
 * Class representing TestsuitesAType
 */
class TestsuitesAType
{

    /**
     * @var \SupportPal\PHPUnitGitLabReporter\Schema\Testsuites\TestsuitesAType\TestsuiteAType[] $testsuite
     */
    private $testsuite = [
        
    ];

    /**
     * Adds as testsuite
     *
     * @return self
     * @param \SupportPal\PHPUnitGitLabReporter\Schema\Testsuites\TestsuitesAType\TestsuiteAType $testsuite
     */
    public function addToTestsuite(\SupportPal\PHPUnitGitLabReporter\Schema\Testsuites\TestsuitesAType\TestsuiteAType $testsuite)
    {
        $this->testsuite[] = $testsuite;
        return $this;
    }

    /**
     * isset testsuite
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTestsuite($index)
    {
        return isset($this->testsuite[$index]);
    }

    /**
     * unset testsuite
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTestsuite($index)
    {
        unset($this->testsuite[$index]);
    }

    /**
     * Gets as testsuite
     *
     * @return \SupportPal\PHPUnitGitLabReporter\Schema\Testsuites\TestsuitesAType\TestsuiteAType[]
     */
    public function getTestsuite()
    {
        return $this->testsuite;
    }

    /**
     * Sets a new testsuite
     *
     * @param \SupportPal\PHPUnitGitLabReporter\Schema\Testsuites\TestsuitesAType\TestsuiteAType[] $testsuite
     * @return self
     */
    public function setTestsuite(array $testsuite)
    {
        $this->testsuite = $testsuite;
        return $this;
    }


}

