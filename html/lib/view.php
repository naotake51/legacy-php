<?php

use Illuminate\View\Factory as ViewFactory;
use Illuminate\Filesystem\Filesystem;
use Illuminate\View\Compilers\BladeCompiler;
use Illuminate\View\Engines\CompilerEngine;
use Illuminate\View\Engines\EngineResolver;
use Illuminate\View\FileViewFinder;
use Illuminate\Events\Dispatcher;

$filesystem = new Filesystem;
$bladeCompiler = new BladeCompiler($filesystem, __DIR__ . '/../resources/views/cache');
$engineResolver = new EngineResolver;
$engineResolver->register('blade', function () use ($bladeCompiler) {
    return new CompilerEngine($bladeCompiler);
});

$viewFinder = new FileViewFinder($filesystem, [__DIR__ . '/../resources/views']);

$dispatcher = new Dispatcher();
$viewFactory = new ViewFactory($engineResolver, $viewFinder, $dispatcher);
