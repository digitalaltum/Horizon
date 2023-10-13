<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Nombre de la aplicación
    |--------------------------------------------------------------------------
    |
    | Nombre de la aplicaicon de acuerdo a los valores de entorno, este nombre se
    | empleará en diversas funcionalidades propias del maco.
    |
    */

    'name' => env("APP_NAME", "HORIZON FRAMEWORK"),

    /*
    |--------------------------------------------------------------------------
    | Entorno donde se ejecuta la aplicacion
    |--------------------------------------------------------------------------
    |
    | Permite saber si se encuentra en un entorno
    | LOCAL => Desarrollandose
    | QA - STAGING => Pruebas con o sin usuarios finales
    | PROD => Ambiente productivo.
    |
    */

    'env' => env("APP_ENV", "LOCAL"),

    /*
    |--------------------------------------------------------------------------
    | Degugger
    |--------------------------------------------------------------------------
    |
    | Solo de estar activo, se imprimirán los mensajes de error correspondientes.
    |
    */

    'debug' => env("APP_DEBUG", false),

    /*
    |--------------------------------------------------------------------------
    | URL
    |--------------------------------------------------------------------------
    |
    | URL de la aplicacion, se empleará para redirecciones , rutas y otros.
    |
    */

    'url' => env("APP_URL", "http://localhost"),

    /*
    |--------------------------------------------------------------------------
    | Version
    |--------------------------------------------------------------------------
    |
    | Permite llevar un versionamiento ordenado y correcto de tu aplicacion Horizon.
    |
    */

    'version' =>  env("APP_VERSION", "1.0"),
];