<h2>Nova Matrícula</h2>
<form method="POST" action="/?url=matricula/store">
    <label>Aluno:</label><br>
    <select name="aluno_id" required>
        <option value="">Selecione um aluno</option>
        <?php foreach ($alunos as $aluno): ?>
            <option value="<?= $aluno['id'] ?>"><?= $aluno['nome'] ?></option>
        <?php endforeach; ?>
    </select><br><br>

    <label>Curso:</label><br>
    <select name="curso_id" required>
        <option value="">Selecione um curso</option>
        <?php foreach ($areasCursos as $areaCurso): ?>
            <option value="<?= $areaCurso['id'] ?>"><?= $areaCurso['titulo'] ?></option>
        <?php endforeach; ?>
    </select><br><br>

    <button type="submit">Matricular</button>
</form>
<a href="/?url=matricula/index">Voltar</a>