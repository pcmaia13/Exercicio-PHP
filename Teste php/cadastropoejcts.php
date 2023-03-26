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

    <a href="funcao.php">Tabela de projetos</a>
    <br>
    <h4>Cadastrar Projeto</h4>

    <?php

    ?>

    <form action="inserir_projeto.php" method="post">

        <div class="form-group">
        <label>Id do funcionario</label>
        <input type="text" class="form-control" name="statusproject" placeholder="Insira o status do projeto" autocomplete="off" required>
        <br>

        <div style=>
      <button type="submit" class="btn btn-sm btn-success">Cadastrar</button>
  </div>
    </form>

</body>

</html>

<?php
