<?php

namespace QuantaForge\FlareClient\FlareMiddleware;

namespace QuantaForge\FlareClient\FlareMiddleware;

use Closure;
use QuantaForge\FlareClient\Glows\GlowRecorder;
use QuantaForge\FlareClient\Report;

class AddGlows implements FlareMiddleware
{
    protected GlowRecorder $recorder;

    public function __construct(GlowRecorder $recorder)
    {
        $this->recorder = $recorder;
    }

    public function handle(Report $report, Closure $next)
    {
        foreach ($this->recorder->glows() as $glow) {
            $report->addGlow($glow);
        }

        return $next($report);
    }
}
