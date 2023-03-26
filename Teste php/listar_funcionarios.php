<!DOCTYPE html>
<html>
<head>
	<title>Listagem de produtos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    
<div class="container" style="margin-top: 40px">
<form method='POST'>

<a href="Data.php">Idade media funcionarios</a><br><a href="salario.php">Salario medio funcionarios</a><br><a href="funcao.php">Função dos funcionarios</a>
<br>
<a href="index.php">Cadastro geral</a>
<h4>Tabela de funcionarios</h4>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id do funcionario</th>
      <th scope="col">Nome do funcionario</th>
      <th scope="col">Idade do funcionario</th>
      <th scope="col">Cargo do funcionario</th>
      <th scope="col">Salario do funcionario</th>
      <th scope="col"> Data de admissão do funcionario</th>
    </tr>
  </thead>
       <?php

        include 'conexao.php';
    
        $items=array("idfuncionario", "nomefuncionario", "idadefuncionario", "funcaofuncionario", "salariofuncionario", "diadeadmissaofuncionario");
        foreach($items as $item)

        $sql = "SELECT * FROM `employees`";
        $items = mysqli_query($conn,$sql);

        while ($array = mysqli_fetch_array($items)) {

            $idfuncionario = $array['idfuncionario'];
            $nomefuncionario = $array['nomefuncionario'];
            $idadefuncionario = $array['idadefuncionario'];
            $funcaofuncionario = $array['funcaofuncionario'];
            $salariofuncionario = $array['salariofuncionario'];
            $diadeadmissaofuncionario = $array['diadeadmissaofuncionario'];
         

            
         ?>
        <tr>

    
		    <td><?php echo $idfuncionario ?></td>

		    <td><?php echo $nomefuncionario ?></td>

		    <td><?php echo $idadefuncionario ?></td>

		    <td><?php echo $funcaofuncionario ?></td>

		    <td><?php echo $salariofuncionario ?></td>

            <td><?php echo $diadeadmissaofuncionario ?></td>

            </tr>
	

<?php  ?>
    <td></td>

    <?php } ?>

    <?php

   

