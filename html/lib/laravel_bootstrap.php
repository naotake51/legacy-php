<?php

require_once '../new/vendor/autoload.php';
$app = require_once '../new/bootstrap/app.php';

use Illuminate\Contracts\Http\Kernel as HttpKernelContract;

$kernel = $app->make(HttpKernelContract::class);
$kernel->bootstrap();
