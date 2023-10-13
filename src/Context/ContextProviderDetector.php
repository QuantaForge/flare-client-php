<?php

namespace QuantaQuirk\FlareClient\Context;

interface ContextProviderDetector
{
    public function detectCurrentContext(): ContextProvider;
}
