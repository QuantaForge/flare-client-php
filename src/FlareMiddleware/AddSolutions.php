<?php

namespace QuantaForge\FlareClient\FlareMiddleware;

use Closure;
use QuantaForge\FlareClient\Report;
use QuantaForge\Ignition\Contracts\SolutionProviderRepository;

class AddSolutions implements FlareMiddleware
{
    protected SolutionProviderRepository $solutionProviderRepository;

    public function __construct(SolutionProviderRepository $solutionProviderRepository)
    {
        $this->solutionProviderRepository = $solutionProviderRepository;
    }

    public function handle(Report $report, Closure $next)
    {
        if ($throwable = $report->getThrowable()) {
            $solutions = $this->solutionProviderRepository->getSolutionsForThrowable($throwable);

            foreach ($solutions as $solution) {
                $report->addSolution($solution);
            }
        }

        return $next($report);
    }
}
