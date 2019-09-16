<?php

include 'conexao.php';

$cpf = $_POST['cpf']; //recebe o valor do atributo.
$rg = $_POST['rg'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$cep = $_POST['cep'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$nascimento = $_POST['nascimento'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$doencabase = $_POST['doencabase'];
$alergia = $_POST['alergia'];
$medicamentos = $_POST['medicamentos'];
$cirurgia = $_POST['cirurgia'];
$internacoes = $_POST['internacoes'];
$pa = $_POST['pa'];
$queixaprinc = $_POST['queixaprinc'];


//echo $nroproduto;
//echo $nomeproduto;
//echo $categoria;
//echo $quantidade;
//echo $fornecedor;


$sql = "INSERT INTO `cadpessoa`( `cpf`, `rg`, `nome`, `telefone`, `celular`, `email`, `cep`, `endereco`, `bairro`, `nascimento`, `cidade`, `uf`, `doencabase`, `alergia`, `medicamentos`, `cirurgia`, `internacoes`, `pa`, `queixaprinc`) VALUES ('$cpf', '$rg', '$nome', '$telefone', '$celular', '$email', '$cep', '$endereco', '$bairro', '$nascimento', '$cidade', '$uf', '$doencabase', '$alergia', '$medicamentos', '$cirurgia', '$internacoes', '$pa', '$queixaprinc')";



$inserir = mysqli_query($conexao, $sql);
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<center>
<div class="containe" style="width:500px; margin-top: 20px">
    </center>
	
<center>
	<h4>Cadastro Realizado com Sucesso!</h4>
	<div style="padding-top: 20px">
</center>


<center>
	<a href="index.php" role="button" class="btn btn-sm btn-primary">Cadastrar nova Pessoa</a>
</center>
	</div>
    
</div>	
