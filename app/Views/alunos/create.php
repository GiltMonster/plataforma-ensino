<?php
$erro = $_SESSION['erro'] ?? null;
unset($_SESSION['erro']);
?>


<?php if ($erro): ?>
    <p style="color: red;"><?= $erro ?></p>
<?php endif; ?>

<h2>Novo Aluno</h2>
<form method="POST" action="/?url=aluno/store">
    <label>Nome:</label><br>
    <input type="text" name="nome" required><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br>

    <label>Data de Nascimento:</label><br>
    <input type="date" name="data_nascimento"><br><br>

    <button type="submit">Salvar</button>
</form>

<a href="/?url=aluno/index">Voltar</a>
