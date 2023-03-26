<!DOCTYPE html>
<html>
<head>
	<title>Listagem de produtos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    
<div class="container" style="margin-top: 40px">
<form method='POST'>

<br>
<a href="listar_funcionarios.php">Tabela geral de informações</a>
<h4>Tabela gerenciamento de projetos</h4>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Projetos entregues</th>
      

    </tr>
  </thead>
       <?php

        include 'conexao.php';
    
 

        $sql = "SELECT * FROM `projects`";
        $items = mysqli_query($conn,$sql);

        while ($array = mysqli_fetch_array($items)) {

         
         ?>
        <tr>

		   


            </tr>
	

<?php  ?>
    <td></td>

    <?php } ?>

    <?php
