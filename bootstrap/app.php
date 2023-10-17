<?php

/*
|--------------------------------------------------------------------------
| Iniciar una instancia de la aplicacion Horizon
|--------------------------------------------------------------------------
|
| Se inicializa el contenedor de servicios de la aplicacion Horizon.
|
*/

$app = \HorizonFramework\Core\Application::start(
    dirname(__DIR__), microtime(true)
);

/*
|--------------------------------------------------------------------------
| Iniciar Kernel para peticiones de Consola
|--------------------------------------------------------------------------
|
| Se inicializa el contenedor de servicios indexando los comandos actuales
| Creados por el desarrollador y por el Marco Horizon
| Se crea una unica instancia de la clase.
|
*/
$app->singleton(
    \HorizonFramework\Core\CLI\Kernel::class
);

/*
|--------------------------------------------------------------------------
| Retornar instancia de Clase Aplicacion
|--------------------------------------------------------------------------
|
| Se retorna la instancia de la clase aplicacion.
|
*/
return $app;