<h2>Lista de Alunos</h2>
<a href="/?url=aluno/create">Novo Aluno</a> | <a href="/?url=home/index">Voltar</a>

<form method="POST" action="/?url=aluno/show">
    <label>Buscar Aluno:</label><br>
    <input type="text" name="nameOurEmail" required>
    <button type="submit">Buscar</button>
    <a href="/?url=aluno/index">Limpar busca</a>
</form>

<table border="1" cellpadding="5">
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Data de Nascimento</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($alunos as $aluno): ?>
        <tr>
            <td><?= $aluno['nome'] ?></td>
            <td><?= $aluno['email'] ?></td>
            <td><?= $aluno['data_nascimento'] ? $aluno['data_nascimento'] : 'N/A' ?></td>
            <td>
                <a href="/?url=aluno/edit&id=<?= $aluno['id'] ?>">Editar</a>
                <a href="/?url=aluno/delete&id=<?= $aluno['id'] ?>" onclick="return confirm('Tem certeza?')">Excluir</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>