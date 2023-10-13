<?php

use QuantaQuirk\FlareClient\Context\ConsoleContextProvider;
use QuantaQuirk\FlareClient\FlareMiddleware\AddEnvironmentInformation;
use QuantaQuirk\FlareClient\Report;

it('adds the php version to a report', function () {
    $middleware = new AddEnvironmentInformation();

    $report = (new Report())->useContext(new ConsoleContextProvider());

    $middleware->handle($report, fn (Report $report) => $report);

    expect($report->allContext())->toHaveKey('env', ['php_version' => phpversion()]);
});
