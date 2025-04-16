<?php
session_start();
$erro = $_SESSION['erro_login'] ?? null;
unset($_SESSION['erro_login']);
?>

<h2>Login do Administrador</h2>

<?php if ($erro): ?>
    <p style="color: red;"><?= $erro ?></p>
<?php endif; ?>

<form method="POST" action="/?url=login/auth">
    <label>Email:</label><br>
    <input type="email" name="email" required><br>

    <label>Senha:</label><br>
    <input type="password" name="senha" required><br><br>

    <button type="submit">Entrar</button>
</form>
