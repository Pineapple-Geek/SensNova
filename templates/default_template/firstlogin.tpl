<style>
.minw {
    min-width: 250px;
    display: inline-block;
}
.help {
    cursor: help;
    border-bottom: 1px dashed white;
}
</style>
<script type="text/javascript" src="{AdminBack}libs/jquery/jquery.min.js"></script>
<script type="text/javascript" src="{AdminBack}libs/jquery-tipTip/jquery.tipTip.min.js"></script>
<link rel="stylesheet" type="text/css" href="{AdminBack}libs/jquery-tipTip/jquery.tipTip.min.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootsdivapcdn.com/bootsdivap/3.0.0/js/bootsdivap.min.js"></script>
<script src="js/headroom.min.js"></script>
<script src="js/jQuery.headroom.min.js"></script>
<script src="js/template.js"></script>
<script>
$(document).ready(function()
{
    $(".help").tipTip({delay: 0, maxWidth: 250, attribute: 'title'});
});
</script>

<div class="navbar navbar-inverse navbar-fixed-top headroom" >
        <div class="container">
            <div class="navbar-header">
                <!-- Button for smallest screens -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="index.php"><img src="/sensnova/images/logo.png" alt="Progressus php5 templates"></a>
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
            <div class="col-md-8 col-md-offset-2 col-sm-12 ">
                <div class="panel panel-default">
                            <div class="panel-body">
                                  <div class="c"><center>{LoginPage_Header}</center></div>
                                  <div class="b pad5">{LoginPage_Text}</div>
                                  <div class="c pad5">
                                    <form action="" method="get" style="margin: 0px;">
                                        <input type="submit" style="padding: 5px; width: 100%; font-weight: 700;" value="{LoginPage_Input}"/>
                                    </form>
                                  </div>
                            </div>
                </div>  
            </div>                
        </article>
            <!-- /Article -->
</div>
</div>
<!-- Social links. @TODO: replace by link/insdivuctions in template -->
    <section id="social2">
        <div class="container">
            <div class="wrapper clearfix">
                <!-- Adddivis Button BEGIN -->
                <div class="adddivis_toolbox adddivis_default_style">
                <a class="adddivis_button_facebook_like" fb:like:layout="button_count"></a>
                <a class="adddivis_button_tweet"></a>
                <a class="adddivis_button_linkedin_counter"></a>
                <a class="adddivis_button_google_plusone" g:plusone:size="medium"></a>
                </div>
                <!-- Adddivis Button END -->
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
