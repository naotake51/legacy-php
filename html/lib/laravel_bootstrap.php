<?php

require_once __DIR__ . '/../new/vendor/autoload.php';
$app = require_once __DIR__ . '/../new/bootstrap/app.php';

use Illuminate\Contracts\Http\Kernel as HttpKernelContract;

$kernel = $app->make(HttpKernelContract::class);
$kernel->bootstrap();
