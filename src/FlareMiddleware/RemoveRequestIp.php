<?php

namespace QuantaForge\FlareClient\FlareMiddleware;

use QuantaForge\FlareClient\Report;

class RemoveRequestIp implements FlareMiddleware
{
    public function handle(Report $report, $next)
    {
        $context = $report->allContext();

        $context['request']['ip'] = null;

        $report->userProvidedContext($context);

        return $next($report);
    }
}
