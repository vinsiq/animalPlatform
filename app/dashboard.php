<?php
//header ('Content-type: text/html; charset=UTF-8');
// A sessão precisa ser iniciada em cada página diferente
if (!isset($_SESSION))
    session_start();

//$nivel_necessario = 2;
//
//// Verifica se não há a variável da sessão que identifica o usuário
//if (!isset($_SESSION['UsuarioID']) OR ($_SESSION['UsuarioNivel'] < $nivel_necessario)) {
//    // Destrói a sessão por segurança
//    session_destroy();
//    // Redireciona o visitante de volta pro login
//    header("Location: index.html");
//    exit;
//}
?>

<!doctype html>
<html lang="en" ng-app="appAdmin">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>blueLab Admin - Entrar</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.css"/>
        <link rel="stylesheet" href="css/main.css"/>
        <link rel="stylesheet" href="css/bootstrap-theme.css"/>
    </head>
    <body ng-controller="MyCtrlAdmin">
        <!--[if lt IE 8]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. 
            Please <a href="http://browsehappy.com/">upgrade your browser</a> or 
            <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve 
            your experience.</p>
        <![endif]-->
        <div id="wrap">
            <div class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <!--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">-->
                        <button type="button" class="navbar-toggle" ng-init="navCollapsed = true" ng-click="navCollapsed = !navCollapsed">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="#"><img src="img/adotehojelogo.png" class="img-responsive logo" alt="MStech" style="height: 40px; margin-top:5px;" ng-class="!navCollapsed && 'in'" ng-click="navCollapsed = true"></a>
                    </div> <!-- /navbar-header -->

                    <!--<div class="collapse navbar-collapse">-->
                    <div class="collapse navbar-collapse" ng-class="!navCollapsed && 'in'" ng-click="navCollapsed = true">
                        <ul class="nav navbar-nav">
                            <li ng-class="{ active: isActive('/register')}"><a href="#/register">Cadastrar</a></li>
                            <li ng-class="{ active: isActive('/manager')}"><a href="#/manager">Excluir</a></li>
                            <li ng-class="{ active: isActive('/users')}"><a href="#/users">Usuários</a></li>
                        </ul>
                    </div>
                </div> <!-- /container -->
            </div> <!-- /navbar navbar-inverse navbar-fixed-top -->

            <div ng-view></div>
            <div id="push"></div>
        </div>
        <div id="footer">
            <div class="container">
                <p class="text-center" style="margin-top: 10px;"> Centro de Controle de Zoonoses - Bauru/SP</p>
            </div>
        </div>

        <!-- In production use:
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/x.x.x/angular.min.js"></script>
        -->
        <!-- important: jquery.js makes the dropdown works -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.js"></script>
        <script src="lib/angular/angular.js"></script>
        <script src="lib/angular/angular-route.js"></script>
        <script src="js/appadmin.js"></script>
        <script src="js/servicesadmin.js"></script>
        <script src="js/controllersadmin.js"></script>
        <script src="js/filtersadmin.js"></script>
        <script src="js/directivesadmin.js"></script>
        <script src="js/bootstrap/bootstrap.js"></script>
        <script src="js/bootstrap/ui-bootstrap-tpls-0.10.0.min.js"></script>
    </body>
</html>