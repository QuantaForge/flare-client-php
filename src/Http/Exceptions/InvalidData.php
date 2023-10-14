<?php

namespace QuantaForge\FlareClient\Http\Exceptions;

use QuantaForge\FlareClient\Http\Response;

class InvalidData extends BadResponseCode
{
    public static function getMessageForResponse(Response $response): string
    {
        return 'Invalid data found';
    }
}
