<?php

namespace QuantaForge\FlareClient\Context;

interface ContextProviderDetector
{
    public function detectCurrentContext(): ContextProvider;
}
