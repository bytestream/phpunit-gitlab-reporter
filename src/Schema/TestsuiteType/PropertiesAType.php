<?php

namespace SupportPal\PHPUnitGitLabReporter\Schema\TestsuiteType;

/**
 * Class representing PropertiesAType
 */
class PropertiesAType
{

    /**
     * @var \SupportPal\PHPUnitGitLabReporter\Schema\TestsuiteType\PropertiesAType\PropertyAType[] $property
     */
    private $property = [
        
    ];

    /**
     * Adds as property
     *
     * @return self
     * @param \SupportPal\PHPUnitGitLabReporter\Schema\TestsuiteType\PropertiesAType\PropertyAType $property
     */
    public function addToProperty(\SupportPal\PHPUnitGitLabReporter\Schema\TestsuiteType\PropertiesAType\PropertyAType $property)
    {
        $this->property[] = $property;
        return $this;
    }

    /**
     * isset property
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProperty($index)
    {
        return isset($this->property[$index]);
    }

    /**
     * unset property
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProperty($index)
    {
        unset($this->property[$index]);
    }

    /**
     * Gets as property
     *
     * @return \SupportPal\PHPUnitGitLabReporter\Schema\TestsuiteType\PropertiesAType\PropertyAType[]
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * Sets a new property
     *
     * @param \SupportPal\PHPUnitGitLabReporter\Schema\TestsuiteType\PropertiesAType\PropertyAType[] $property
     * @return self
     */
    public function setProperty(array $property)
    {
        $this->property = $property;
        return $this;
    }


}

