<?php

namespace QuantaQuirk\FlareClient\Tests\TestClasses;

use QuantaQuirk\FlareClient\Contracts\ProvidesFlareContext;

class ExceptionWithContext extends \Exception implements ProvidesFlareContext
{
    public function context(): array
    {
        return [
            'context' => [
                'another key' => 'another value',
            ],
        ];
    }
}
