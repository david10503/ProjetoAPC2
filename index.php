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
	 echo "<br>Código: ".$reg['codigo'];
	 echo"</div>";
	 echo "Produto: ".$reg['nome'];
	 echo "Preço: ".$reg['preco'];
     echo "Descrição: ".$reg['descricao'];
     echo "Imagem: ".$reg['imagem'];
	 echo "Quantidade: ".$reg['quantidade']."<hr></div>";
	 echo"</div>";
	 	 
	}
	
	mysqli_close($conexao);
	
?>




<footer>
    <div id="rodape"><div class="nav-footer-user-info nav-bounds"><div class="nav-footer-info-wrapper"><div class="nav-footer-primaryinfo"><small class="nav-footer-copyright">Copyright ©&nbsp;1999-2022 Ebazar.com.br LTDA.</small><nav class="nav-footer-navigation"><a href="https://careers-meli.mercadolibre.com/pt?utm_campaign=site-mlb&amp;utm_source=mercadolibre&amp;utm_medium=mercadolibre">Trabalhe conosco</a><a href="https://www.mercadolivre.com.br/ajuda/Termos-e-condicoes-gerais-de-uso_1409">Termos e condições</a><a href="https://www.mercadolivre.com.br/privacidade">Como cuidamos da sua privacidade</a><a href="https://www.mercadolivre.com.br/ajuda">Contato</a></nav></div><p class="nav-footer-secondaryinfo">CNPJ n.º 03.007.331/0001-41 / Av. das Nações Unidas, nº 3.003, Bonfim, Osasco/SP - CEP 06233-903 - empresa do grupo Mercado Cold.</p></div><div class="nav-footer-downloadapp-wrapper"><a class="nav-footer-downloadapp" target="_blank" id="footer-applink" href="https://www.mercadolivre.com.br/l/app"><i class="nav-icon nav-icon-downloadapp"></i </div>
</footer>
</body>

</html>