<?php

use HorizonFramework\Core\Http\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Registrar el Cargador Automático
|--------------------------------------------------------------------------
|
| Composer proporciona un práctico cargador de clases generado automáticamente
| para nuestra aplicación. ¡Solo necesitamos utilizarlo! Lo requeriremos
| en el script aquí para que no tengamos que preocuparnos por la
| carga manual de ninguna de nuestras clases. Es genial para relajarnos.
|
*/

require_once __DIR__ . "/../vendor/autoload.php";


// Route::get("/users", function(){
    
//     $numero1 = 10;
//     $numero2 = 20;

//     return $numero1 + $numero2;
// });

Route::get("/users/index/{id}/{rol}", [UserController::class, "index"]);