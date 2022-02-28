#!/usr/bin/env php
<?php
require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Console\Application;
use TempCalc\TemperatureCalc;

$application = new Application();
$application->add(new TemperatureCalc());

$application->run(); 