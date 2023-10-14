<?php

namespace QuantaForge\FlareClient\Tests\Concerns;

use QuantaForge\FlareClient\Tests\TestClasses\ReportDriver;
use QuantaForge\Snapshots\MatchesSnapshots;

trait MatchesReportSnapshots
{
    use MatchesSnapshots;

    public function assertMatchesReportSnapshot(array $report)
    {
        $this->assertMatchesSnapshot($report, new ReportDriver());
    }
}
