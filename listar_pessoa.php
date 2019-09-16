<!DOCTYPE html>
<html>
<head>
	<title>Pessoas</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/7b04e73c30.js"></script> <!-- link para add icones -->

</head>
<body>

<div class="container" style="margin-top: 40px"> <!-- tabela para listar os produtos cadastrados -->
	<h3>Lista de Pessoas</h3>
	<br>
	<table class="table">
  <thead>
    <tr>
        <th scope="col">CPF</th>
        <th scope="col">RG</th>
        <th scope="col">NOME</th>
        <th scope="col">TELEFONE</th>
        <th scope="col">CELULAR</th>
        <th scope="col">E-MAIL</th>        
        <th scope="col">CEP</th>
        <th scope="col">ENDEREÇO</th>
        <th scope="col">BAIRRO</th>
        <th scope="col">DATA NASCIMENTO</th>
        <th scope="col">CIDADE</th>
        <th scope="col">UF</th>
        <th scope="col">DOENÇA DE BASE</th>
        <th scope="col">ALERGIA</th>
        <th scope="col">MEDICAMENTOS</th>
        <th scope="col">CIRURGIA PRÉVIA</th>
        <th scope="col">INTERNAÇÕES</th>
        <th scope="col">P.A</th>
        <th scope="col">QUEIXA PRICIPAL</th>
    </tr>
  </thead>
    <?php
            include 'conexao.php'; // incluindo a conexao com o banco executando a consulta para listar no formulário
    		$sql = "SELECT * FROM `cadpessoa`";
    		$busca = mysqli_query($conexao,$sql);
    		//estrutura de reperição para contar as linhas do banco e add no formulario	
    		while ($array = mysqli_fetch_array($busca)){

    			$id_pessoa = $array['id_pessoa'];
    			$cpf = $array['cpf'];
    			$rg = $array['rg'];
    			$nome = $array['nome'];
    			$telefone = $array['telefone'];
    			$celular = $array['celular'];
                $email = $array['email'];
                $cep = $array['cep'];
                $endereco = $array['endereco'];
                $bairro = $array['bairro'];
                $nascimento = $array['nascimento'];
                $cidade = $array['cidade'];
                $uf = $array['uf'];
                $doencabase = $array['doencabase'];
                $alergia = $array['alergia'];
                $medicamentos = $array['medicamentos'];
                $cirurgia = $array['cirurgia'];
                $internacoes = $array['internacoes'];
                $pa = $array['pa'];
                $queixaprinc = $array['queixaprinc'];
                
		?>
	<tr>
        <td><?php echo $cpf ?></td>
        <td><?php echo $rg ?></td>
        <td><?php echo $nome ?></td>
        <td><?php echo $telefone ?></td>
        <td><?php echo $celular ?></td>
        <td><?php echo $email ?></td>
        <td><?php echo $cep ?></td>
        <td><?php echo $endereco ?></td>
        <td><?php echo $bairro ?></td>
        <td><?php echo $nascimento ?></td>
        <td><?php echo $cidade ?></td>
        <td><?php echo $uf ?></td>
        <td><?php echo $doencabase ?></td>
        <td><?php echo $alergia ?></td>
        <td><?php echo $medicamentos ?></td>
        <td><?php echo $cirurgia ?></td>
        <td><?php echo $internacoes ?></td>
        <td><?php echo $pa ?></td>
        <td><?php echo $queixaprinc ?></td>
    
        
        
      <td><a class="btn btn-warning btn-sm" style="color:#fff" href="editar_pessoa.php?id=<?php echo $id_pessoa ?>" role="button"><i class="far fa-edit"></i>Editar</a></td>
         </tr>
      <!--class far é o icone do botão editar --> 

  <?php } ?> <!-- fechamento da reperição e php -->
   
  
</table>

</div>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>