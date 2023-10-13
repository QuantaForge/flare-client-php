<?php

namespace QuantaQuirk\FlareClient\FlareMiddleware;

use QuantaQuirk\FlareClient\Report;

class CensorRequestHeaders implements FlareMiddleware
{
    protected array $headers = [];

    public function __construct(array $headers)
    {
        $this->headers = $headers;
    }

    public function handle(Report $report, $next)
    {
        $context = $report->allContext();

        foreach ($this->headers as $header) {
            $header = strtolower($header);

            if (isset($context['headers'][$header])) {
                $context['headers'][$header] = '<CENSORED>';
            }
        }

        $report->userProvidedContext($context);

        return $next($report);
    }
}
