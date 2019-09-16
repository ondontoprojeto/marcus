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
            
  			<div class="form-group">
    			<label>CPF</label>
    			<input type="text" class="form-control" name="cpf" placeholder="Insira o numero do cpf" required>
    		</div>


			<div class="form-group">
    			<label>RG</label>
    			<input type="text" class="form-control" name="rg" placeholder="Insira o rg" autocomplete="off" required>
    		</div>


    		<div class="form-group">
    			<label>NOME</label>
    			<input type="text" class="form-control" name="nome" placeholder="Insira a quantidade do produto" autocomplete="off" required>
    		</div> 
            
            <div class="form-group">
    			<label>TELEFONE</label>
    			<input type="text" class="form-control" name="telefone" placeholder="Insira o Telefone" autocomplete="off" required>
    		</div>
            
            <div class="form-group">
    			<label>CELULAR</label>
    			<input type="text" class="form-control" name="celular" placeholder="Insira o celular" autocomplete="off" required>
    		</div>
            
            <div class="form-group">
    			<label>E-MAIL</label>
    			<input type="text" class="form-control" name="email" placeholder="Insira o e-mail" autocomplete="off" required>
    		</div>
            
            <div class="form-group">
    			<label>CEP</label>
    			<input type="text" class="form-control" name="cep" placeholder="Insira o Cep" autocomplete="off" required>
    		</div>
            
            <div class="form-group">
    			<label>ENDEREÇO</label>
    			<input type="text" class="form-control" name="endereco" placeholder="Insira o endereço" autocomplete="off" required>
    		</div>
            
            <div class="form-group">
    			<label>BAIRRO</label>
    			<input type="text" class="form-control" name="bairro" placeholder="Insira o Bairro" autocomplete="off" required>
    		</div>
            
            <div class="form-group">
    			<label>DATA NASCIMENTO</label>
    			<input type="date" class="form-control" name="nascimento" placeholder="Insira o dia do nascimento" autocomplete="off" required>
    		</div>
            
            <div class="form-group">
    			<label>CIDADE</label>
    			<input type="text" class="form-control" name="cidade" placeholder="Insira a cidade" autocomplete="off" required>
    		</div>
            
            <div class="form-group">
    			<label>UF:</label>
    			<input type="text" class="form-control" name="uf" placeholder="UF:" autocomplete="off" required>
    		</div>    
        
            <div class="container" id="tamanhoContainer" style="margin-top: 40px">
    
  			
            <h4>Anaminésia: </h4>
            <div class="form-group">
    			<label>DOENÇA DE BASE:</label>
    			<input type="text" class="form-control" name="doencabase" autocomplete="off" required>
    		</div>
                
             <div class="form-group">
    			<label>ALERGIA:</label>
    			<input type="text" class="form-control" name="alergia" autocomplete="off" required>
    		</div>
                
                <div class="form-group">
    			<label>MEDICAMENTOS:</label>
    			<input type="text" class="form-control" name="medicamentos" autocomplete="off" required>
    		</div>
                
                <div class="form-group">
    			<label>CIRURGIA PRÉVIA:</label>
    			<input type="text" class="form-control" name="cirurgia" autocomplete="off" required>
    		</div>
                
                <div class="form-group">
    			<label>INTERNAÇÕES:</label>
    			<input type="text" class="form-control" name="internacoes" autocomplete="off" required>
    		</div>
                <div class="form-group">
    			<label>P.A:</label>
    			<input type="text" class="form-control" name="pa" autocomplete="off" required>
    		</div>
                <div class="form-group">
    			<label>QUEIXA PRICIPAL:</label>
    			<input type="text" class="form-control" name="queixaprinc" autocomplete="off" required>
    		</div>

  			<div style="text-align: right;">	
  				<button type="submit" id="botao" class="btn btn-sm">Cadastrar</button>
  			</div>
            </div>

    	</form>		
    
	</div>
    	

  
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>