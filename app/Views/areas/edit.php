<h2>Editar Area</h2>
<form method="POST" action="/?url=area/update">
    <input type="hidden" name="id" value="<?= $area['id'] ?>">

    <label>Titulo:</label><br>
    <input type="text" name="titulo" value="<?= $area['titulo'] ?>" required><br>

    <label>Descrição:</label><br>
    <input type="descricao" name="descricao" value="<?= $area['descricao'] ?>" required><br>

    <button type="submit">Atualizar</button>
</form>

<a href="/?url=area/index">Voltar</a>
