<?php

namespace QuantaQuirk\FlareClient\Contracts;

interface ProvidesFlareContext
{
    /**
     * @return array<int|string, mixed>
     */
    public function context(): array;
}
