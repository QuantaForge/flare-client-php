<?php

namespace QuantaForge\FlareClient\Tests\TestClasses;

use QuantaForge\FlareClient\Contracts\ProvidesFlareContext;

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
