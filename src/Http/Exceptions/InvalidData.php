<?php

namespace QuantaQuirk\FlareClient\Http\Exceptions;

use QuantaQuirk\FlareClient\Http\Response;

class InvalidData extends BadResponseCode
{
    public static function getMessageForResponse(Response $response): string
    {
        return 'Invalid data found';
    }
}
