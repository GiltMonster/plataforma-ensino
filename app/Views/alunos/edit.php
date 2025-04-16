<h2>Editar Aluno</h2>
<form method="POST" action="/?url=aluno/update">
    <input type="hidden" name="id" value="<?= $aluno['id'] ?>">

    <label>Nome:</label><br>
    <input type="text" name="nome" value="<?= $aluno['nome'] ?>" required><br>

    <label>Email:</label><br>
    <input type="email" name="email" value="<?= $aluno['email'] ?>" required><br>

    <label>Data de Nascimento:</label><br>
    <input type="date" name="data_nascimento" value="<?= $aluno['data_nascimento'] ?>"><br><br>

    <button type="submit">Atualizar</button>
</form>
