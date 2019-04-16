<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>{title}</title>
        <link rel="shortcut icon" href="{AdminBack}gt_favicon.png" type="image/x-icon" />
        <link rel="icon" href="{AdminBack}favicon.ico" type="image/x-icon" />
        <meta name="description" content="GAMEDESCRIPTION" />
        <meta name="keywords" content="KEYWORDS" />
        <meta http-equiv="Content-Language" content="fr" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        {PHP_Meta}
        <script type="text/javascript" src="{AdminBack}libs/overlib/overlib.min.js"></script>
        <script type="text/javascript" src="{AdminBack}libs/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="{AdminBack}dist/js/main.light.cachebuster-1545956361123.min.js"></script>

        <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
        <link rel="stylesheet" href="{SkinPath}bootstrap.min.css">
        <link rel="stylesheet" href="{SkinPath}font-awesome.min.css">

        <!-- Custom styles for our template -->
        <link rel="stylesheet" href="{SkinPath}bootstrap-theme.css" media="screen" >
        <link rel="stylesheet" href="{SkinPath}main.css">
    </head>
    <body>
        {PHP_InjectAfterBody}
        <center>{game_content_replace}</center>
    </body>
</html>
