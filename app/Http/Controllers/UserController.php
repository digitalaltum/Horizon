<?php

namespace App\Http\Controllers;

class UserController
{
    public function index($id, $rol)
    {
        dd("Llego este id: {$id}, y este rol: {$rol}");
    }
    
}


