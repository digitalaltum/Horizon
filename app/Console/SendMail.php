<?php

namespace App\Console;

use HorizonFramework\Core\Bases\BaseCommands;

class SendMail extends BaseCommands
{
    public $name = "send";

    public $description = "Envia un correo";

    public function handle()
    {
        dd("Hola");
    }
}