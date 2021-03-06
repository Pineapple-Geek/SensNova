<body class="home">
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top headroom" >
        <div class="container">
            <div class="navbar-header">
                <!-- Button for smallest screens -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="index.php"><img src="http://localhost/sensnova/images/logo.png" alt="Progressus php5 templates"></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav pull-right">
                    <li class="active"><a href="index.php">Accueil</a></li>
                    <li><a href="rules.php">Régles du jeu</a></li>
                    <li><a href="http://www.kommunauty.fr/forum/xnova/">Forum</a></li>
                    <li><a href="login.php">Se Connecter</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div> 
    <!-- /.navbar -->
<header id="head" class="secondary"></header>

<div class="container">

        <ol class="breadcrumb">
            <li><a href="index.php">Accueil</a></li>
            <li class="active">Connexion</li>
        </ol>

        <div class="row">
            
            <!-- Article main content -->
            <article class="col-xs-12 maincontent">
                <header class="page-header">
                    <h1 class="page-title">Identifiez-vous</h1>
                </header>
                
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form method="POST">
                                <div class="top-margin">
                                    <label>Identifiant <span class="text-danger">*</span></label>
                                    <input type="text" id="uname" name="username" value="" type="text" class="form-control" required>
                                </div>
                                <div class="top-margin">
                                    <label>Mot de passe <span class="text-danger">*</span> <a class="text-right" href="">Mot de passe oublié?</a></label>
                                    <input type="password" id="upass" name="password" value="" type="password" class="form-control" required>
                                </div>

                                <hr>

                                <div class="row">
                                    <div class="col-lg-7">
                                        
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <button class="btn btn-action btn-xs btn-sm btn-md" type="{type}" name="submit">Identifiez-vous</button>
                                    </div>
                                </div>

                                <hr>

                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <a class="btn btn-default btn-xs btn-sm btn-md" role="button" href="reg_mainpage.php">Créer votre compte SensNova</a>
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
</body>
</php>