<?php

namespace QuantaForge\FlareClient\Http\Exceptions;

use QuantaForge\FlareClient\Http\Response;

class NotFound extends BadResponseCode
{
    public static function getMessageForResponse(Response $response): string
    {
        return 'Not found';
    }
}
