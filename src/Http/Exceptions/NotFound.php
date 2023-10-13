<?php

namespace QuantaQuirk\FlareClient\Http\Exceptions;

use QuantaQuirk\FlareClient\Http\Response;

class NotFound extends BadResponseCode
{
    public static function getMessageForResponse(Response $response): string
    {
        return 'Not found';
    }
}
