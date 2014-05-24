<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="robots" content="index, follow">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="copyright" content="&copy;teteusix" />
	<link rel="index" title="Kbank (Knowledge Bank)" href="https://github.com/teteusix/knowledge-bank"/> 
	<title>Login - Kbank (Knowledge Bank)</title>

	<meta name="description" content="O KBANK (Knowledge Bank) servirá para organizar e facilitar a consulta de informações dos produtos da empresa. Assim, todas as informações já buscadas, serão cadastradas em seus respectivos produtos.">
	<meta name="keywords" content="Kbank (Knowledge Bank), kabank, banco de conhecimento">
	<meta name="author" content="Matheus Ramos (teteusix)">
	<meta name="author-url" content="http://www.teteusix.com" />
	<meta name="reply-to" content="matheus.hf.ramos@gmail.com" />

	<!-- CSS -->
	<link href="css/login.css" rel="stylesheet" type="text/css">

	<!-- OTHERS -->
	<script type="text/javascript" src="js/modernizr.custom.js"></script>
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet" type="text/css">
	<!-- <link href="http://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900" rel="stylesheet" type="text/css"> -->
	<!-- <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet" type="text/css"> -->
	<!-- <link href="http://fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet" type="text/css"> -->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<link rel="shortcut icon" href="img/favicon.ico">
</head>
<body>
	<section id="main">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 texts">
					<h1>Bem-vindo ao KBANK %Nome da Empresa%</h1>
					<h2>O KBANK (Knowledge Bank) servirá para organizar e facilitar a consulta de informações dos produtos da empresa. Assim, todas as informações já buscadas, serão cadastradas em seus respectivos produtos.</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					
					<!-- ALERTS -->
					<div class="alerts-form">
						<div class="alert alert-danger">E-mail ou senha estão incorretos</div>
						<div class="alert alert-success">Senha solicitada com sucesso! Verifique seu e-mail</div>
						<div class="alert alert-danger">Digite o e-mail corretamente</div>
					</div>

					<!-- form login -->
					<form action="" id="login" role="form" method="post" class="form">
						<!-- RECADO -->
						<div class="message">
							<h2>Utilize seu e-mail e senha para logar</h2>
						</div>
						
						<!-- e-mail -->
						<div class="form-group">
							<label for="email"><span>
								<i class="fa fa-user"></i></span>
								<input type="email" class="form-control" id="email" name="email" placeholder="Seu e-mail ou login">
							</label>
						</div>

						<!-- password -->
						<div class="form-group">
							<label for="password"><span>
								<i class="fa fa-lock"></i></span>
								<input type="password" class="form-control" id="password" name="password" placeholder="Sua senha">
							</label>
						</div>

						<!-- send form -->
						<button class="btn btn-default send" type="submit">Logar</button>
						
						<a href="#" class="request-pass">Esqueceu a senha?</a>
					</form>
				</div>


				<div class="col-lg-12">
					<!-- form forget password -->
					<form action="" id="forget-pass" role="form" method="post" class="form">
						<!-- name -->
						<div class="form-group">
							<label for="name"><span>
								<i class="fa fa-user"></i></span>
								<input type="text" class="form-control" id="name" name="name" placeholder="Nome Completo">
							</label>
						</div>

						<!-- e-mail -->
						<div class="form-group">
							<label for="email-forget"><span>
								<i class="fa fa-envelope-o"></i></span>
								<input type="email" class="form-control" id="email-forget" name="email-forget" placeholder="Seu e-mail">
							</label>
						</div>
						<div class="form-group">
							<button class="btn btn-default send">Solicitar senha</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<script>
	
	</script>
</body>
</html>