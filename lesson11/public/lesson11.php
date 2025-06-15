<?php

use lesson11\App\AppVersion;

require __DIR__ . '/../../vendor/autoload.php';

$version = new AppVersion();
print_r(AppVersion::getVersion() . "\n");
AppVersion::updateVersion('1.1.0');
print_r(AppVersion::getVersion());