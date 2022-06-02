<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introducao</title>
    <link rel="stylesheet" href="estilo.css">
    
</head>
<body>
<script src="/projetoLeandro/script.js"></script>


<div id="menu">
     <ul>
	  <li><a href="http://localhost:85/projetoLeandro/index.php">Inicio</a></li>
	  <li><a href="http://localhost:85/agendabsi2/listar1.php">Modelos</a></li>
	  <li><a href="http://localhost:85/agendabsi2/inserir.php">Produtos</a></li>
	 
    
	  <li><a href="http://localhost:85/agendabsi2/deletar.php">Excluir</a></li>
	  <li><a href="http://localhost:85/projetoLeandro/sobre.html">Sobre</a></li> 
      <div id="pesquisa">
      <li><a href="http://localhost:85/projetoLeandro/listar.html">Pesquisar</a></li>
      <input type="text" id="barradebusca" placeholder="Pesquisar" onclick = seleciona()>
      
      </div>
      <label for="carrinhodecompra" id="compras">Compras</label>
      <div id="carrinhodecompra"></div>
      <label for="user" id="usuario">Usuário</label>
      <div id="user"></div>
	 </ul>
     
</div>




<?php
    
	
	include("conectar.php"); //acesso ao banco de dados
	$sql= "select * from bdproduto"; 
	$result=mysqli_query($conexao,$sql);
	
	
	
	while($reg=mysqli_fetch_array($result))
	{
 
     echo"<div id='tbproduto'><hr>";  
	 echo"<div id='codigo'>" ;
	 echo"<div id='img'></div>";
	 echo"<div id='infoprod'>";
	 echo "Preço: R$".$reg['preco']."<br>";
	 
	
	 echo $reg['nome'].' '.$reg['descricao']."<br>";
	 
     
     //echo "Imagem: ".$reg['imagem'];
	 echo "Quantidade disponível: ".$reg['quantidade']."<hr></div>";
	 echo"<form action='comprar.php'><input type='SUBMIT' name='btncomprar'  id='botaocomprar' value=COMPRAR>";
	 echo"<input type='SUBMIT' name='btnaddcompra'  id='botaoaddcar' value=CARRINHO></form>";
	 echo"</div>";
	 
	 	 
	}
	
	mysqli_close($conexao);
	
?>





</body>

</html>
