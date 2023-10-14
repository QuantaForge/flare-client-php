<?php

namespace QuantaForge\FlareClient\FlareMiddleware;

use Closure;
use QuantaForge\FlareClient\Report;

interface FlareMiddleware
{
    public function handle(Report $report, Closure $next);
}
