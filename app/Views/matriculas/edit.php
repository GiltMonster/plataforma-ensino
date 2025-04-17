<h2>Editar Matrícula</h2>
<form method="POST" action="/?url=matricula/update">
    <input type="hidden" name="id" value="<?= $matricula['id'] ?>">
    <label>Aluno:</label><br>
    <select name="aluno_id" required>
        <option value="">Selecione um aluno</option>
        <?php foreach ($alunos as $aluno): ?>
            <option value="<?= $aluno['id'] ?>" <?= $matricula['aluno_id'] == $aluno['id'] ? 'selected' : '' ?>><?= $aluno['nome'] ?></option>
        <?php endforeach; ?>
    </select><br><br>

    <label>Curso:</label><br>
    <select name="curso_id" required>
        <option value="">Selecione um curso</option>
        <?php foreach ($areasCursos as $areaCurso): ?>
            <option value="<?= $areaCurso['id'] ?>" <?= $matricula['curso_id'] == $areaCurso['id'] ? 'selected' : '' ?>><?= $areaCurso['titulo'] ?></option>
        <?php endforeach; ?>
    </select><br><br>

    <button type="submit">Editar</button>
</form>
<a href="/?url=matricula/index">Voltar</a>