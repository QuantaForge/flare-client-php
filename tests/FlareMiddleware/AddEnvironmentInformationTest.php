<?php

use QuantaForge\FlareClient\Context\ConsoleContextProvider;
use QuantaForge\FlareClient\FlareMiddleware\AddEnvironmentInformation;
use QuantaForge\FlareClient\Report;

it('adds the php version to a report', function () {
    $middleware = new AddEnvironmentInformation();

    $report = (new Report())->useContext(new ConsoleContextProvider());

    $middleware->handle($report, fn (Report $report) => $report);

    expect($report->allContext())->toHaveKey('env', ['php_version' => phpversion()]);
});
