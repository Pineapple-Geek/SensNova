<!DOCTYPE php>
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	
	<title>SensNova - Inscription</title>

	<link rel="shortcut icon" href="<?php $url = str_replace('/reg_mainpage.php', '', $_SERVER['REQUEST_URI']) ;  echo($url); ?>/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="<?php $url = str_replace('/reg_mainpage.php', '', $_SERVER['REQUEST_URI']) ;  echo($url); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php $url = str_replace('/reg_mainpage.php', '', $_SERVER['REQUEST_URI']) ;  echo($url); ?>/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="<?php $url = str_replace('/reg_mainpage.php', '', $_SERVER['REQUEST_URI']) ;  echo($url); ?>/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="<?php $url = str_replace('/reg_mainpage.php', '', $_SERVER['REQUEST_URI']) ;  echo($url); ?>/css/main.css">

	<!-- php5 shim and Respond.js IE8 support of php5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="./js/php5shiv.js"></script>
	<script src="./js/respond.min.js"></script>
	<![endif]-->
</head>

<body class="home">
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.php"><img src="<?php $url = str_replace('/reg_mainpage.php', '', $_SERVER['REQUEST_URI']) ;  echo($url); ?>/images/logo.png" alt="Progressus php5 templates"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a href="#">Accueil</a></li>
					<li><a href="rules.php">Régles du jeu</a></li>
					<li><a href="http://www.kommunauty.fr/forum/xnova/">Forum</a></li>
					<li><a href="login.php">Se Connecter</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->
<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.php">Accueil</a></li>
			<li class="active">Inscription</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Inscription</h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<form method="POST">
								<div class="top-margin">
									<label>Pseudo<span class="text-danger">*</span></label>
									<input type="text" class="form-control" required>
								</div>
								
								<div class="top-margin">
									<label>E-Mail<span class="text-danger">*</span></label>
									<input type="email" class="form-control" required>
								</div>

								<div class="top-margin">
									<label>Confirmation E-Mail<span class="text-danger">*</span></label>
									<input type="text" class="form-control" required>
								</div>

								<div class="row top-margin">
									<div class="col-sm-6">
										<label>Mot de passe<span class="text-danger">*</span></label>
										<input type="password" class="form-control" required>
									</div>
									<div class="col-sm-6">
										<label>Confirmation Mot de passe<span class="text-danger">*</span></label>
										<input type="password" class="form-control" required>
									</div>
								</div>

								<hr>

								<div class="row">
									<div class="col-lg-6">
										<label class="checkbox">
											<input type="checkbox" required> 
											J'ai bien lu <a href="rules.php">Les régles du jeu</a>
										</label>                        
									</div>
									<div class="col-lg-6 text-right">
										<button class="btn btn-action" type="submit">Créer votre compte</button>
									</div>
								</div>
							</form>
						</div>
					</div>

				</div>
				
			</article>
			<!-- /Article -->

		</div>
	</div>

	
	<!-- Social links. @TODO: replace by link/instructions in template -->
	<section id="social2">
		<div class="container">
			<div class="wrapper clearfix">
				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style">
				<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
				<a class="addthis_button_tweet"></a>
				<a class="addthis_button_linkedin_counter"></a>
				<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
				</div>
				<!-- AddThis Button END -->
			</div>
		</div>
	</section>
	<!-- /social links -->
		<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								<a href="#">Accueil</a> | 
								<a href="about.php">Régles du jeu</a> |
								<a href="sidebar-right.php">Forum</a> |
								<a href="contact.php">Se Connecter</a>
								<b>
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2019, Crée par la Team SENS 🚀
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

	</footer>	

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="<?php $url = str_replace('/reg_mainpage.php', '', $_SERVER['REQUEST_URI']) ;  echo($url); ?>/js/headroom.min.js"></script>
	<script src="<?php $url = str_replace('/reg_mainpage.php', '', $_SERVER['REQUEST_URI']) ;  echo($url); ?>/js/jQuery.headroom.min.js"></script>
	<script src="<?php $url = str_replace('/reg_mainpage.php', '', $_SERVER['REQUEST_URI']) ;  echo($url); ?>/js/template.js"></script>
</body>
</php>