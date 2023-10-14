<?php

namespace QuantaForge\FlareClient\FlareMiddleware;

use Closure;
use QuantaForge\FlareClient\Report;

class AddEnvironmentInformation implements FlareMiddleware
{
    public function handle(Report $report, Closure $next)
    {
        $report->group('env', [
            'php_version' => phpversion(),
        ]);

        return $next($report);
    }
}
