<h2>Matrículas</h2>
<a href="/?url=matricula/create">Nova Matrícula</a> | <a href="/?url=home/index">Voltar</a>

<table border="1" cellpadding="5">
    <tr>
        <th>Aluno</th>
        <th>Curso</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($matriculas as $m): ?>
        <tr>
            <td><?= $m['aluno'] ?></td>
            <td><?= $m['areasCurso'] ?></td>
            <td>
                <a href="/?url=matricula/delete&id=<?= $m['id'] ?>" onclick="return confirm('Deseja remover essa matrícula?')">Remover</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
