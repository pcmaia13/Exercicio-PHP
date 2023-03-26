<!DOCTYPE html>
<html>
<head>
	<title>Idade media funcionarios</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"> 
<div class="container" style="width: 500px; margin-top: 20px">



<div class="container" style="margin-top: 40px">
<form action="listar_funcionarios.php" method='GET'>	


</div>
<a href="listar_funcionarios.php">Tabela geral de informações</a>
<br>

<table class="table">

<form action="dados.php" method="GET">

<thead>
    <tr>

      <th scope="col"><h4>media do salario dos funcionarios</h4></th>      

</body>
      
     
    </tr>

    <?php
    

        include 'conexao.php';
        include 'script.php';

        foreach($items as $item);

        $items=array("salariofuncionario");
  
        $conn = mysqli_connect($servername, $username, $password, $database);

        $sql = "SELECT * FROM `employees`";
        $items = mysqli_query($conn,$sql);

        while ($array = mysqli_fetch_array($items)) {

            $salariofuncionario = $array['salariofuncionario'];

         ?>
         
        <tr>
		   
		    <td><?php echo $salariofuncionario ?></td>
		    
        </tr>
            <?php


?>

 <?php 





            $soma=$salariofuncionario+$salariofuncionario;
            echo "Soma: $soma<br />";
            
            
            $media = $soma/5;
            echo "Média: $media<br />";
           ?>
 
 </form> 
 <?php 

    }




