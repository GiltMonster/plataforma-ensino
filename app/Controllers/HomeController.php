<?php

namespace App\Controllers;

use App\Middleware\AuthMiddleware;

class HomeController
{
    public function index()
    {
        AuthMiddleware::verificar();
?>
        <!DOCTYPE html>
        <html lang="pt-BR">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Jubilut - Dashboard</title>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
            <style>
                :root {
                    --primary: #4a6fa5;
                    --primary-dark: #3a5a8c;
                    --secondary: #6c757d;
                    --success: #28a745;
                    --danger: #dc3545;
                    --light: #f8f9fa;
                    --dark: #343a40;
                    --white: #ffffff;
                    --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                }

                * {
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                }

                body {
                    background-color: #f5f7fa;
                    color: #333;
                    line-height: 1.6;
                }

                .container {
                    width: 90%;
                    max-width: 1200px;
                    margin: 0 auto;
                    padding: 20px;
                }

                header {
                    background: var(--primary);
                    color: white;
                    padding: 15px 0;
                    box-shadow: var(--shadow);
                }

                .header-content {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                }

                .logo h1 {
                    font-size: 1.6rem;
                    font-weight: 600;
                }

                .logo span {
                    font-weight: 300;
                    font-size: 1rem;
                }

                .logout-btn {
                    background: rgba(255, 255, 255, 0.2);
                    color: white;
                    border: none;
                    padding: 8px 15px;
                    border-radius: 4px;
                    text-decoration: none;
                    display: inline-flex;
                    align-items: center;
                    transition: all 0.3s ease;
                }

                .logout-btn:hover {
                    background: rgba(255, 255, 255, 0.3);
                }

                .logout-btn i {
                    margin-right: 5px;
                }

                main {
                    padding: 30px 0;
                }

                .welcome-section {
                    text-align: center;
                    margin-bottom: 40px;
                }

                .welcome-section h1 {
                    color: var(--dark);
                    font-size: 2rem;
                    margin-bottom: 10px;
                }

                .welcome-section h2 {
                    color: var(--secondary);
                    font-size: 1.2rem;
                    font-weight: 400;
                }

                .menu-cards {
                    display: flex;
                    justify-content: center;
                    gap: 20px;
                    flex-wrap: wrap;
                }

                .menu-card {
                    background: var(--white);
                    border-radius: 8px;
                    padding: 30px;
                    width: 240px;
                    text-align: center;
                    box-shadow: var(--shadow);
                    transition: transform 0.3s ease, box-shadow 0.3s ease;
                }

                .menu-card:hover {
                    transform: translateY(-5px);
                    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
                }

                .menu-card i {
                    font-size: 2.5rem;
                    color: var(--primary);
                    margin-bottom: 15px;
                }

                .menu-card h3 {
                    margin-bottom: 15px;
                    color: var(--dark);
                }

                .menu-card a {
                    display: inline-block;
                    background: var(--primary);
                    color: white;
                    text-decoration: none;
                    padding: 8px 15px;
                    border-radius: 4px;
                    transition: background 0.3s ease;
                }

                .menu-card a:hover {
                    background: var(--primary-dark);
                }

                footer {
                    text-align: center;
                    padding: 20px 0;
                    background: var(--light);
                    color: var(--secondary);
                    font-size: 0.9rem;
                    margin-top: 40px;
                }
            </style>
        </head>

        <body>
            <header>
                <div class="container">
                    <div class="header-content">
                        <div class="logo">
                            <h1>Jubilut <span>Gestão</span></h1>
                        </div>
                        <a href="/?url=login/logout" class="logout-btn">
                            <i class="fas fa-sign-out-alt"></i> Sair
                        </a>
                    </div>
                </div>
            </header>

            <main class="container">
                <section class="welcome-section">
                    <h1>Dashboard do Sistema</h1>
                    <h2>Bem-vindo ao sistema de gerenciamento de alunos!</h2>
                </section>

                <section class="menu-cards">
                    <div class="menu-card">
                        <i class="fas fa-user-graduate"></i>
                        <h3>Alunos</h3>
                        <a href="/?url=aluno/index">Gerenciar</a>
                    </div>

                    <div class="menu-card">
                        <i class="fas fa-book"></i>
                        <h3>Áreas</h3>
                        <a href="/?url=area/index">Gerenciar</a>
                    </div>

                    <div class="menu-card">
                        <i class="fas fa-clipboard-list"></i>
                        <h3>Matrículas</h3>
                        <a href="/?url=matricula/index">Gerenciar</a>
                    </div>
                </section>
            </main>

            <footer>
                <div class="container">
                    <p>&copy; <?php echo date('Y'); ?> Jubilut - Sistema de Gestão Educacional</p>
                </div>
            </footer>
        </body>

        </html>
<?php
    }
}
?>