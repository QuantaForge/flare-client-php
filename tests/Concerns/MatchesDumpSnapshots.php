<?php

namespace QuantaForge\FlareClient\Tests\Concerns;

use QuantaForge\FlareClient\Tests\TestClasses\DumpDriver;
use QuantaForge\Snapshots\MatchesSnapshots;

trait MatchesDumpSnapshots
{
    use MatchesSnapshots;

    public function assertMatchesDumpSnapshot(array $codeSnippet)
    {
        $this->assertMatchesSnapshot($codeSnippet, new DumpDriver());
    }
}
