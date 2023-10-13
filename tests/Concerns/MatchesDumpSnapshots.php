<?php

namespace QuantaQuirk\FlareClient\Tests\Concerns;

use QuantaQuirk\FlareClient\Tests\TestClasses\DumpDriver;
use QuantaQuirk\Snapshots\MatchesSnapshots;

trait MatchesDumpSnapshots
{
    use MatchesSnapshots;

    public function assertMatchesDumpSnapshot(array $codeSnippet)
    {
        $this->assertMatchesSnapshot($codeSnippet, new DumpDriver());
    }
}
