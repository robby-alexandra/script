<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Albeta</title>
    <!-- Mobile specific metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Force IE9 to render in normal mode -->
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="author" content="" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="application-name" content="" />
    <!-- Import google fonts - Heading first/ text second -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet" type="text/css">
    <!-- Css files -->
    <!-- Icons -->
    <link href="<?= base_url() ?>assets2/css/icons.css" rel="stylesheet" />
    <!-- Bootstrap stylesheets (included template modifications) -->
    <link href="<?= base_url() ?>assets2/css/bootstrap.css" rel="stylesheet" />
    <!-- Plugins stylesheets (all plugin custom css) -->
    <link href="<?= base_url() ?>assets2/css/plugins.css" rel="stylesheet" />
    <!-- Main stylesheets (template main css file) -->
    <link href="<?= base_url() ?>assets2/css/main.css" rel="stylesheet" />
    <!-- Custom stylesheets ( Put your own changes here ) -->
    <link href="<?= base_url() ?>assets2/css/custom.css" rel="stylesheet" />
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= base_url() ?>assets2/img/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url() ?>assets2/img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= base_url() ?>assets2/img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?= base_url() ?>assets2/img/ico/apple-touch-icon-57-precomposed.png">
    <link rel="icon" href="<?= base_url() ?>assets2/img/ico/favicon.ico" type="image/png">
    <!-- Windows8 touch icon ( http://www.buildmypinnedsite.com/ )-->
    <meta name="msapplication-TileColor" content="#3399cc" />
</head>

<body class="error-page">
    <div class="container error-container">
        <div class="error-panel panel panel-default plain animated bounceIn">
            <!-- Start .panel -->
            <div class="panel-body">
                <div class="page-header">
                    <h1 class="text-center mb25">404
                        <small>error</small>
                    </h1>
                </div>
                <h2 class="text-center mt30 mb30">The page cannot be found.</h2>
                <div class="text-center">
                    <a href="javascript: history.go(-1)" class="btn btn-default mr10"><span class="icomoon-icon-arrow-left-10 s16"></span>Go back</a>
                    <a href="<?= base_url('C_Master/profile') ?>" class="btn btn-default"><span class="icomoon-icon-screen s16"></span>Dashboard</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Javascripts -->
    <!-- Important javascript libs(put in all pages) -->
    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/libs/jquery-2.1.1.min.js">\x3C/script>')
    </script>
    <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/libs/jquery-ui-1.10.4.min.js">\x3C/script>')
    </script>
    <!--[if lt IE 9]>
  <script type="text/javascript" src="js/libs/excanvas.min.js"></script>
  <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <script type="text/javascript" src="js/libs/respond.min.js"></script>
<![endif]-->
    <!-- Bootstrap plugins -->
    <script src="<?= base_url() ?>assets2/js/bootstrap/bootstrap.js"></script>
</body>

</html>