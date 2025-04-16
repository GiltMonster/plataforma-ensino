<h2>Lista de Alunos</h2>
<a href="/?url=aluno/create">Novo Aluno</a> | <a href="/?url=home/index">Voltar</a>
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
            <td><?= $aluno['data_nascimento'] ?></td>
            <td>
                <a href="/?url=aluno/edit&id=<?= $aluno['id'] ?>">Editar</a>
                <a href="/?url=aluno/delete&id=<?= $aluno['id'] ?>" onclick="return confirm('Tem certeza?')">Excluir</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
