<?php
    
	
	include("conectar.php"); //acesso ao banco de dados
	$sql= "select * from bdprodutos"; 
	$result= mysqli_query($conexao,$sql);
	$tot = mysqli_num_rows($result);
	
	
	while($reg = mysqli_fetch_array($result))
	{
        
	 echo "<br>Código: ".$reg['codigo'];
	 echo "<br>Nome: ".$reg['nome'];
	 echo "<br>Preço: ".$reg['preco'];
     echo "<br>Descrição: ".$reg['descricao'];
	 echo "<br>Quantidade: ".$reg['quantidade']."<hr>";
	 	 
	}
	echo "<tr colspan='5'>Total de alunos da agenda: ".$tot."</table></tr>";
	mysqli_close($conexao);
	echo "<br> Total de alunos da Agenda: ".$tot;
?>