<!DOCTYPE php>
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	
	<title>SensNova - Accueil</title>

	<link rel="shortcut icon" href="<?php $url = str_replace('index.php', '', $_SERVER['REQUEST_URI']) ;  echo($url); ?>images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="<?php $url = str_replace('index.php', '', $_SERVER['REQUEST_URI']) ;  echo($url); ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php $url = str_replace('index.php', '', $_SERVER['REQUEST_URI']) ;  echo($url); ?>css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="<?php $url = str_replace('index.php', '', $_SERVER['REQUEST_URI']) ;  echo($url); ?>css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="<?php $url = str_replace('index.php', '', $_SERVER['REQUEST_URI']) ;  echo($url); ?>css/main.css">

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
				<a class="navbar-brand" href="#"><img src="<?php $url = str_replace('/index.php', '', $_SERVER['REQUEST_URI']) ;  echo($url); ?>/images/logo.png" alt="Progressus php5 templates"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a href="index.php">Accueil</a></li>
					<li><a href="rules.php">Régles du jeu</a></li>
					<li><a href="http://www.kommunauty.fr/forum/xnova/">Forum</a></li>
					<li><a href="signin.php">Se Connecter</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<!-- Header -->
	<header id="head">
		<div class="container">
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-5 col-md-offset-3 col-lg-4 col-lg-offset-4 SensNova"> 
					<h1 class="lead">SensNova</h1>
					<p class="tagline">Un MMORPG gratuit en ligne de conquête spatiale</p>
					<p><a class="btn btn-action btn-xs btn-sm btn-md" role="button" href="index.php?page=reg&lang={$lang}">JOUER MAINTENANT</a></p>
				</div>
			</div>
		</div>
	</header>
	<!-- /Header -->

	<!-- Intro -->
	<div class="container text-center">
		<br> <br>
		<h2 class="thin">Préparez-vous a dominé l'univers! </h2>
	</div>
	<!-- /Intro-->
		
	<!-- Highlights - jumbotron -->
	<div class="jumbotron top-space">
		<div class="container">
			
			<h3 class="text-center thin">Galerie :</h3>
			
			<div class="row">
				<div class="col-md-4 col-sm-6 highlight">
					<img id="myImg1" src="<?php $url = str_replace('index.php', '', $_SERVER['REQUEST_URI']) ;  echo($url); ?>images/Preview1.jpg" class="img-responsive img-thumbnail" alt="">
				</div>
				<div class="col-md-4 col-sm-6 highlight">
					<img id="myImg2" src="<?php $url = str_replace('index.php', '', $_SERVER['REQUEST_URI']) ;  echo($url); ?>images/Preview2.jpg" class="img-responsive img-thumbnail" alt="">
				</div>
				<div class="col-md-4 col-sm-6 highlight">
					<img id="myImg3" src="<?php $url = str_replace('index.php', '', $_SERVER['REQUEST_URI']) ;  echo($url); ?>images/Preview3.jpg" class="img-responsive img-thumbnail" alt="">
				</div>
			</div> <!-- /row  -->
		
		</div>
	</div>
	<!-- /Highlights -->

	<!-- container -->
	<div class="container">
		<br>
		<div class="row">
			<div class="col-sm-5 column-border">
				<h3>La porte vers de nouveaux mondes</h3>
				<p>Bâtissez une infrastructure économique et militaire.</p>
				<p>Livrez bataille pour remporter de précieuses ressources.</p>
			</div>
			<div class="col-sm-5 col-sm-offset-2 column-border">
				<h3>Créez votre empire dans l`espace</h3>
				<p>Une stratégie épique sur navigateur, tablette et smartphone.</p>
				<p>Une légende des jeux en ligne, gratuit et sans téléchargement.</p>
			</div>
		</div> <!-- /row -->
<br>
		<div class="row">
			<div class="col-sm-5 column-border">
				<h3>Vos flottes combattent au milieu des étoiles</h3>
				<p>L`espace est en guerre : </p>
				<p>De nombreux pionniers de l`espace se fraient un passage vers de nouveaux quadrants, fondant de nouvelles colonies et s`appropriant de précieuses ressources. Des flottes sont armées, des galaxies conquises. 
				</p>
			</div>
			<div class="col-sm-5 col-sm-offset-2 column-border">
				<h3>Le destin de votre peuple est entre vos mains !</h3>
				<p>Lancez-vous rapidement dans un univers infini.</p>
				<p>Forgez des alliances et joignez vos forces pour attaquer d`autres planètes.</p>
			</div>
		</div> <!-- /row -->

		<div class="jumbotron top-space">
			<h4>Pour en apprendre plus, consulter les régles du jeu 📖</h4>
     		<p class="text-right"><a class="btn btn-primary btn-large" href="rules.php">Régles du jeu »</a></p>
  		</div>

</div>	<!-- /container -->
	
	<!-- Social links. @TODO: replace by link/instructions in template -->
	<section id="social">
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
		
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img1 = document.getElementById('myImg1');
var img2 = document.getElementById('myImg2');
var img3 = document.getElementById('myImg3');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img1.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerphp = this.alt;
}
img2.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerphp = this.alt;
}
img3.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerphp = this.alt;
}
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="<?php $url = str_replace('index.php', '', $_SERVER['REQUEST_URI']) ;  echo($url); ?>js/headroom.min.js"></script>
	<script src="<?php $url = str_replace('index.php', '', $_SERVER['REQUEST_URI']) ;  echo($url); ?>js/jQuery.headroom.min.js"></script>
	<script src="<?php $url = str_replace('index.php', '', $_SERVER['REQUEST_URI']) ;  echo($url); ?>js/template.js"></script>
</body>
</php>