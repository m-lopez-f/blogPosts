<?php

namespace App\Exceptions;

use Exception;

final class HttpClientException extends Exception
{
    public static function create(string $message, Exception $previous): self
    {
        info($previous->getMessage());

        return new self($message);
    }
}
