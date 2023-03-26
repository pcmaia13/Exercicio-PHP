<?php
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastrar tabelas</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
   

    <div class="container" style="width: 400px; margin-top: 100px">
    <br>

    <a href="listar_funcionarios.php">Tabela de funcionarios</a>
    <br>
    <a href="cadastropoejcts.php">Cadastrar Produto</a>
    <br>
    <h4>Cadastrar funcionario</h4>

    <?php

    ?>

    <form action="inserir_funcionario.php" method="POST">

        <div class="form-group">
        <label>Id do funcionario</label>
        <input type="number" class="form-control" name="idfuncionario" placeholder="Insira o id do funcionario" autocomplete="off" required>
        <br>
</div>
    <div class="form-group">
        <label>Nome do funcionario</label>
        <input type="text" class="form-control" name="nomefuncionario" placeholder="Insira o nome do funcionario" autocomplete="off" required>
        <br>
</div>
    <div class="form-group">
        <label>Idade do funcionario</label>
        <input type="number" class="form-control" name=" idadefuncionario" placeholder="Insira a idade do funcionario" autocomplete="off"required>
        <br>
</div>
    <div class="form-group">
        <label>Função do funcionario</label>
        <input type="text" class="form-control" name="funcaofuncionario" placeholder="Insira a função do funcionario" autocomplete="off" required>
        <br>
</div>
    <div class="form-group">
        <label>Salario do funcionario</label>
        <input type="number" class="form-control" name="salariofuncionario" placeholder="Insira o salario do funcionario" autocomplete="off" required>
        <br>
</div>
    <div class="form-group">
        <label>Dia de admissão do funcionario</label>
        <input type="number" class="form-control" name="diadeadmissaofuncionario" placeholder="Insira a data de admissão do funcionario" autocomplete="off" required>
        <br>

        <div style=>
      <button type="submit" class="btn btn-sm btn-success">Cadastrar</button>

      
  </div>
    </form>

</body>

</html>
