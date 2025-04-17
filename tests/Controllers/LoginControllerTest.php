<?php

use PHPUnit\Framework\TestCase;
use App\Controllers\LoginController;

class LoginControllerTest extends TestCase
{
    public function testLoginValido()
    {
        $login = new LoginController();
        $this->assertTrue($login->validarCredenciais('admin@gmail.com', 'admin'));
    }

    public function testLoginInvalido()
    {
        $login = new LoginController();
        $this->assertFalse($login->validarCredenciais('errado@gmail.com', 'senhaerrada'));
    }
    
}
