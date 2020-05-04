<?php

namespace App\Exceptions;

use Exception;

class InvalidCountryName extends Exception implements ExceptionInterface
{
    /**
     * @return InvalidCountryName
     */
    public static function invalidCountryName(): self
    {
        return new self(sprintf('That country is not a valid country'));
    }
}