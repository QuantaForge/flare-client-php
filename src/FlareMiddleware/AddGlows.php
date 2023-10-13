<?php

namespace QuantaQuirk\FlareClient\FlareMiddleware;

namespace QuantaQuirk\FlareClient\FlareMiddleware;

use Closure;
use QuantaQuirk\FlareClient\Glows\GlowRecorder;
use QuantaQuirk\FlareClient\Report;

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
