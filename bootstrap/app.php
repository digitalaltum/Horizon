<?php

use HorizonFramework\Core\Application;

//Iniciar Datos Aplicacion
$app = Application::start(
    dirname(__DIR__), microtime(true)
);

//Iniciar Kernel de CLI
$app->singleton(
    \HorizonFramework\Core\CLI\Kernel::class
);
