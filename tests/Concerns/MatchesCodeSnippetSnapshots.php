<?php

namespace QuantaForge\FlareClient\Tests\Concerns;

use QuantaForge\FlareClient\Tests\TestClasses\CodeSnippetDriver;
use QuantaForge\Snapshots\MatchesSnapshots;

trait MatchesCodeSnippetSnapshots
{
    use MatchesSnapshots;

    public function assertMatchesCodeSnippetSnapshot(array $codeSnippet)
    {
        $codeSnippet = $this->removeMicrotime($codeSnippet);
        $codeSnippet = $this->removeTime($codeSnippet);

        $this->assertMatchesSnapshot($codeSnippet, new CodeSnippetDriver());
    }

    private function removeMicrotime(array $codeSnippet): array
    {
        array_walk_recursive($codeSnippet, function (&$value, $key) {
            if ($key === 'microtime') {
                $value = '1234';
            }
        });

        return $codeSnippet;
    }

    private function removeTime(array $codeSnippet): array
    {
        array_walk_recursive($codeSnippet, function (&$value, $key) {
            if ($key === 'time') {
                $value = 1234;
            }
        });

        return $codeSnippet;
    }
}
