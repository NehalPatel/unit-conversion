<?php

namespace NehalPatel\UnitConversion\Exceptions;

use Exception;
use Throwable;

class MissingConversionUnitException extends Exception
{
    public function __construct(string $message = 'Conversion unit is missing', int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
