<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home Finance | Organize seus boletos</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<link rel="stylesheet" href="css/cadastrar.css">
</head>
<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">		
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="img/logo-quadrado.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
			    <form action="/examples/actions/confirmation.php" method="post" class="pt-5">
					<h2 class="pt-5">Cadastro</h2>
					<p>Preencha os campos abaixo para criar sua conta.</p>
					<hr>
			        <div class="form-group">
			        	<input type="text" class="form-control" name="nome" placeholder="Nome" required="required">
			        </div>
			        <div class="form-group">
			        	<input type="email" class="form-control" name="email" placeholder="E-mail" required="required">
			        </div>
					<div class="form-group">
			            <input type="password" class="form-control" name="password" placeholder="Senha" required="required">
			        </div>
					<div class="form-group">
			            <input type="password" class="form-control" name="confirm_password" placeholder="Confirme a senha" required="required">
			        </div>        
			        <div class="form-group">
						<label class="checkbox-inline"><input type="checkbox" required="required"> Aceito os <a href="#">Termos de uso</a> &amp; <a href="#">Política de privacidade.</a></label>
					</div>
					<div class="form-group">
			            <button type="submit" class="btn cadastro_btn">Cadastrar</button>
			        </div>
			    </form>
			</div>
				<div class="hint-text text-center pb-3">
					Já possui conta? <a href="#">Login</a>
				</div>
			</div>
			
		</div>
	</div>
</body>
</html>                            