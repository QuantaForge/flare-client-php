<?php

namespace QuantaQuirk\FlareClient\Tests\Concerns;

use QuantaQuirk\FlareClient\Tests\TestClasses\ReportDriver;
use QuantaQuirk\Snapshots\MatchesSnapshots;

trait MatchesReportSnapshots
{
    use MatchesSnapshots;

    public function assertMatchesReportSnapshot(array $report)
    {
        $this->assertMatchesSnapshot($report, new ReportDriver());
    }
}
