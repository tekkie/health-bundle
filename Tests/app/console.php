<?php

set_time_limit(0);

require_once(__DIR__ . '/autoload.php');

//use Symfony\Component\Console\Application;
use Symfony\Bundle\FrameworkBundle\Console\Application;

$kernel = new AppKernel('dev', true);
$application = new Application($kernel);
$application->run();
