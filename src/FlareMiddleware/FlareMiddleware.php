<?php

namespace QuantaQuirk\FlareClient\FlareMiddleware;

use Closure;
use QuantaQuirk\FlareClient\Report;

interface FlareMiddleware
{
    public function handle(Report $report, Closure $next);
}
