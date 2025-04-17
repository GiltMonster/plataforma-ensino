<?php
session_start();
$erro = $_SESSION['erro_login'] ?? null;
unset($_SESSION['erro_login']);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Administrador | Micro Escola</title>
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
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            width: 100%;
            max-width: 400px;
            background-color: var(--white);
            border-radius: 8px;
            box-shadow: var(--shadow);
            padding: 30px;
        }

        .login-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .login-header h2 {
            color: var(--primary);
            font-weight: 600;
            font-size: 1.8rem;
        }

        .login-header .logo {
            margin-bottom: 15px;
        }

        .login-header .logo span {
            font-weight: 300;
            font-size: 1rem;
            color: var(--secondary);
        }

        .error-message {
            background-color: rgba(220, 53, 69, 0.1);
            color: var(--danger);
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 20px;
            font-size: 0.9rem;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: 500;
            color: var(--dark);
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #e1e5eb;
            border-radius: 4px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        .form-group input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(74, 111, 165, 0.2);
        }

        .btn-login {
            width: 100%;
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 12px;
            border-radius: 4px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-login:hover {
            background-color: var(--primary-dark);
        }

        .login-footer {
            text-align: center;
            margin-top: 20px;
            font-size: 0.85rem;
            color: var(--secondary);
        }
    </style>
</head>

<body>

    <div class="login-container">
        <div class="login-header">
            <div class="logo">
                <h1>Jubilut <span>Escola</span></h1>
            </div>
            <h2>Login do Administrador</h2>
        </div>

        <?php if ($erro): ?>
            <div class="error-message">
                <?= $erro ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="/?url=login/auth">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>
            </div>

            <button type="submit" class="btn-login">Entrar</button>
        </form>

        <div class="login-footer">
            Sistema de Gestão Escolar &copy; <?= date('Y') ?>
        </div>
    </div>
</body>

</html>