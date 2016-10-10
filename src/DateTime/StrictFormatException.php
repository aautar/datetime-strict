<?php

namespace TomasFejfar\DateTime;

class StrictFormatException extends \Exception
{
    /**
     * @var array
     */
    protected $errors;

    /**
     * @var array
     */
    protected $warnings;

    /**
     * StrictFormatException constructor.
     *
     * @param string $message
     * @param int $code
     * @param \Exception|null $previous
     * @param array $errors
     * @param array $warnings
     */
    public function __construct(
        $message = "",
        $code = 0,
        \Exception $previous = null,
        array $errors = [],
        array $warnings = []
    ) {
        $this->errors = $errors;
        $this->warnings = $warnings;
        return parent::__construct($message, $code, $previous);
    }

    /**
     * @return array
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @return array
     */
    public function getWarnings()
    {
        return $this->warnings;
    }
}