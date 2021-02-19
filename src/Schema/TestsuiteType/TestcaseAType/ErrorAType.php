<?php

namespace SupportPal\PHPUnitGitLabReporter\Schema\TestsuiteType\TestcaseAType;

/**
 * Class representing ErrorAType
 */
class ErrorAType
{

    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * The error message. e.g., if a java exception is thrown, the return value of getMessage()
     *
     * @var string $message
     */
    private $message = null;

    /**
     * The type of error that occured. e.g., if a java execption is thrown the full class name of the exception.
     *
     * @var string $type
     */
    private $type = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as message
     *
     * The error message. e.g., if a java exception is thrown, the return value of getMessage()
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Sets a new message
     *
     * The error message. e.g., if a java exception is thrown, the return value of getMessage()
     *
     * @param string $message
     * @return self
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * Gets as type
     *
     * The type of error that occured. e.g., if a java execption is thrown the full class name of the exception.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of error that occured. e.g., if a java execption is thrown the full class name of the exception.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }


}

