<?php

namespace QuantaForge\FlareClient\Http\Exceptions;

use Exception;
use QuantaForge\FlareClient\Http\Response;

class BadResponse extends Exception
{
    public Response $response;

    public static function createForResponse(Response $response): self
    {
        $exception = new self("Could not perform request because: {$response->getError()}");

        $exception->response = $response;

        return $exception;
    }
}
