<?php

namespace SupportPal\PHPUnitGitLabReporter\Schema\Testsuites\TestsuitesAType;

use SupportPal\PHPUnitGitLabReporter\Schema\TestsuiteType;

/**
 * Class representing TestsuiteAType
 */
class TestsuiteAType extends TestsuiteType
{

    /**
     * Derived from testsuite/name in the non-aggregated documents
     *
     * @var string $package
     */
    private $package = null;

    /**
     * Starts at '0' for the first testsuite and is incremented by 1 for each following testsuite
     *
     * @var int $id
     */
    private $id = null;

    /**
     * Gets as package
     *
     * Derived from testsuite/name in the non-aggregated documents
     *
     * @return string
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * Sets a new package
     *
     * Derived from testsuite/name in the non-aggregated documents
     *
     * @param string $package
     * @return self
     */
    public function setPackage($package)
    {
        $this->package = $package;
        return $this;
    }

    /**
     * Gets as id
     *
     * Starts at '0' for the first testsuite and is incremented by 1 for each following testsuite
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * Starts at '0' for the first testsuite and is incremented by 1 for each following testsuite
     *
     * @param int $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }


}

