<h2>Lista de areas</h2>
<a href="/?url=area/create">Novo area</a> | <a href="/?url=home/index">Voltar</a>
<table border="1" cellpadding="5">
    <tr>
        <th>Titulo</th>
        <th>Descrição</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($areas as $area): ?>
        <tr>
            <td><?= $area['titulo'] ?></td>
            <td><?= $area['descricao'] ?></td>
            <td>
                <a href="/?url=area/edit&id=<?= $area['id'] ?>">Editar</a>
                <a href="/?url=area/delete&id=<?= $area['id'] ?>" onclick="return confirm('Tem certeza?')">Excluir</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
