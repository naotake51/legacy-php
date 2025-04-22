<?php

use Illuminate\Database\Capsule\Manager as Capsule;

function initEloquent()
{
    $capsule = new Capsule;

    $capsule->addConnection([
        'driver'    => 'mysql',
        'host'      => 'db',
        'database'  => 'myapp',
        'username'  => 'user',
        'password'  => 'password',
        'charset'   => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix'    => '',
    ]);

    $capsule->setAsGlobal();
    $capsule->bootEloquent();
}

initEloquent();
