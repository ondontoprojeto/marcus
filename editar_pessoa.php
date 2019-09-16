<?php

include 'conexao.php';

echo $id = $_GET['id'];

?>


<!DOCTYPE html>
<html>
<head>
	<!-- caso precise usar o bootstrap e javascript local seus arquivos estarão na pasta htdocs que foram baixados do site do bootstrap. São eles: <link rel="stylesheet" href="css/bootstrap.css"> e 
	<script type="text/javascript" src="js/bootstrap.js"></script -->
	<meta charset="utf-8">	
	<title>Cadastro de Pessoa</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">	

	<style type="text/css">

		#tamanhoContainer {
			width: 500px;
		}
		#botao{
			background-color: #FF1168; /*cor de fundo*/
			color: #ffffff; /*cor da letra*/
		}
	</style>

</head>
<body>

	<div class="container" id="tamanhoContainer" style="margin-top: 40px">
		<h4>Formulário de Cadastro de Pessoa</h4>
		<form action="_cadastra_pessoa.php" method="post" style="margin-top: 20px" > <!-- action (para que pagina ele vai; method (serve para enviar para a variavel) -->
            
            <?php
            
            $sql = "SELECT * FROM `cadpessoa` WHERE id_pessoa = $id";
            $buscar = mysqli_query($conexao,$sql);
            while ($array = mysqli_fetch_array($buscar)) {
                
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
            
  			<div class="form-group">
    			<label>CPF</label>
    			<input type="text" class="form-control" name="cpf" value="<?php echo $cpf ?>" disabled>
    		</div>


			<div class="form-group">
    			<label>RG</label>
    			<input type="text" class="form-control" name="rg" value="<?php echo $rg ?>">
    		</div>


    		<div class="form-group">
    			<label>NOME</label>
    			<input type="text" class="form-control" name="nome" value="<?php echo $nome ?>">
    		</div> 
            
            <div class="form-group">
    			<label>TELEFONE</label>
    			<input type="text" class="form-control" name="telefone" value="<?php echo $telefone ?>">
    		</div>
            
            <div class="form-group">
    			<label>CELULAR</label>
    			<input type="text" class="form-control" name="celular" value="<?php echo $celular ?>">
    		</div>
            
            <div class="form-group">
    			<label>E-MAIL</label>
    			<input type="text" class="form-control" name="email" value="<?php echo $email ?>">
    		</div>
            
            <div class="form-group">
    			<label>CEP</label>
    			<input type="text" class="form-control" name="cep" value="<?php echo $cep ?>">
    		</div>
            
            <div class="form-group">
    			<label>ENDEREÇO</label>
    			<input type="text" class="form-control" name="endereco" value="<?php echo $endereco ?>">
    		</div>
            
            <div class="form-group">
    			<label>BAIRRO</label>
    			<input type="text" class="form-control" name="bairro" value="<?php echo $bairro ?>">
    		</div>
            
            <div class="form-group">
    			<label>DATA NASCIMENTO</label>
    			<input type="date" class="form-control" name="nascimento" value="<?php echo $nascimento ?>">
    		</div>
            
            <div class="form-group">
    			<label>CIDADE</label>
    			<input type="text" class="form-control" name="cidade" value="<?php echo $cidade ?>">
    		</div>
            
            <div class="form-group">
    			<label>UF:</label>
    			<input type="text" class="form-control" name="uf" value="<?php echo $uf ?>">
    		</div>    
        
            <div class="container" id="tamanhoContainer" style="margin-top: 40px">
    
  			
            <h4>Anaminésia: </h4>
            <div class="form-group">
    			<label>DOENÇA DE BASE:</label>
    			<input type="text" class="form-control" name="doencabase" value="<?php echo $doencabase ?>">
    		</div>
                
             <div class="form-group">
    			<label>ALERGIA:</label>
    			<input type="text" class="form-control" name="alergia" value="<?php echo $alergia ?>">
    		</div>
                
                <div class="form-group">
    			<label>MEDICAMENTOS:</label>
    			<input type="text" class="form-control" name="medicamentos" value="<?php echo $medicamentos ?>">
    		</div>
                
                <div class="form-group">
    			<label>CIRURGIA PRÉVIA:</label>
    			<input type="text" class="form-control" name="cirurgia" value="<?php echo $cirurgia ?>">
    		</div>
                
                <div class="form-group">
    			<label>INTERNAÇÕES:</label>
    			<input type="text" class="form-control" name="internacoes" value="<?php echo $internacoes ?>">
    		</div>
                <div class="form-group">
    			<label>P.A:</label>
    			<input type="text" class="form-control" name="pa" value="<?php echo $pa ?>">
    		</div>
                <div class="form-group">
    			<label>QUEIXA PRICIPAL:</label>
    			<input type="text" class="form-control" name="queixaprinc" value="<?php echo $queixaprinc ?>">
    		</div>

  			<div style="text-align: right;">	
  				<button type="submit" id="botao" class="btn btn-sm">Atualizar</button>
  			</div>
            </div>
        <?php }  ?>  
    	</form>		
    
	</div>
    	

  
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>