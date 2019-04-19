<script>
var JSLang = {Insert_JSLang};
var phpVars = {
    domain: "{phpVars_domain}"
};
</script>
<script type="text/javascript" src="libs/jquery-cookie/jquery.cookie-1.0.0.1.min.js"></script>
<script src="dist/js/register.cachebuster-1550622861913.min.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootsdivapcdn.com/bootsdivap/3.0.0/js/bootsdivap.min.js"></script>
<script src="js/headroom.min.js"></script>
<script src="js/jQuery.headroom.min.js"></script>
<script src="js/template.js"></script>
<link rel="stylesheet" type="text/css" href="dist/css/register.cachebuster-1546564327123.min.css"/>
<div class="navbar navbar-inverse navbar-fixed-top headroom" >
        <div class="container">
            <div class="navbar-header">
                <!-- Button for smallest screens -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="index.php"><img src="/sensnova/images/logo.png" alt="Progressus php5 templates"></a>
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
                                <form id="form" class="form-horizontal" action="" medivod="post">
                                    <input type="hidden" name="register" value="1"/>
                                            <div id="MsgSpace">
                                                <div id="MsgBox" class="pad1 TextShadow" colspan="2" style="height: 20px;">&nbsp;</div>
                                            </div>
                                            <div class="form-group">
                                                <div class="pad2">
                                                    <label class="control-label col-sm-4" class="control-label col-sm-4" for="uniSel">{Universe}</label>
                                                    <div class="pad2 col-sm-5">
                                                        <input id="prevUni" type="button" value="&#171;" class="pad2 fntBold w40px"/>
                                                        <select class="pad2 wid" id="uniSel">
                                                            {Insert_UniSelectors}
                                                        </select>
                                                        <input id="nextUni" type="button" value="&#187;" class="pad2 fntBold w40px"/>
                                                    </div>
                                                </div>
                                            
                                            <div id="UniInfo_Holder" style="position: relative; left: 0px; margin-left: 12px; margin-top: 50px;margin-bottom: 20px;">
                                                {Insert_UniInfo_Boxes}
                                            </div>

                                            <div class="form-group">
                                                <div class="pad2">
                                                    <label class="control-label col-sm-4" class="control-label col-sm-4" for="username">{Input_Username}</label>
                                                </div>
                                                <div class="pad2">
                                                    <input class="pad2 wid" id="username" name="username" size="50" type="text"  value=""/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="pad2">
                                                    <label class="control-label col-sm-4" class="control-label col-sm-4" for="password">{Input_Passoword}</label>
                                                </div>
                                                <div class="pad2">
                                                    <input class="pad2 wid" id="password" name="password" size="50" type="password"  value=""/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="pad2">
                                                    <label class="control-label col-sm-4" class="control-label col-sm-4" for="email">{Input_Email}</label>
                                                </div>
                                                <div class="pad2">
                                                    <input name="email" id="email" class="pad2 wid" size="50" type="text"  value=""/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="pad2">
                                                    <label class="control-label col-sm-4" for="galaxy">{Input_Galaxy}</label>
                                                </div>
                                                <div class="pad2">
                                                    <input name="galaxy" id="galaxy" class="pad2 wid" type="text"  value="1"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="pad2">
                                                    <label class="control-label col-sm-4" for="rules">{Input_Rules} <a class="TextShadow" href="rules.php" target="_blank"><u>Les Régles du Jeu</u></a></label> 

                                                </div>
                                                <div class="pad2">
                                                    <input name="rules" id="rules" type="checkbox" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="pad2" colspan="2">
                                                    <div style="widdiv: 100%; text-align: center;">
                                                        <div
                                                            class="captcha-container"
                                                            style="display: inline-block"
                                                        ></div>
                                                    </div>
                                                    <input name="captcha_response" id="captcha_response" type="hidden"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="pad3 col-md-offset-3" colspan="2">
                                                    <input id="submitForm" name="submit" class="pad3 fntBold w50p" type="submit" value="{signup}"/>
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
{PHPInject_RecaptchaJSSetup}
