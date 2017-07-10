<html ng-app="anglo">
  <head>
    <meta charset="utf-8"/>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,600,700" rel="stylesheet">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title>Anglo Americana Imóveis</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sss.css" type="text/css" media="all">
    <script src='https://www.google.com/recaptcha/api.js'></script>
  </head>
  <body ng-controller="main">
    <div id="toprow" class="container-fluid">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-12">
            <p class="pull-left">Desde 1941 fazendo história no mercado imobilliário.</p>
            <i class="fa fa-phone" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Ligamos pra você"></i>
            <i class="fa fa-envelope" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Enviamos um email pra você"></i>
            <i class="fa fa-facebook" aria-hidden="true"></i>
            
            
            
            <p class="pull-right"><a href="">English</a> <a href="">Multilingual Staff</a></p>
    				<p class="pull-right hidden-xs hidden-sm">Tel: (11) 3887-4555</p>
    			</div>
    		</div>
    	</div>
    		
    </div>
    <nav class="navbar navbar-default">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img class="img-responsive" src="img/logoSite.png"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">Início</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Imóveis <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Encontre seu imóvel</a></li>
                <li><a href="#">Lançamentos</a></li>
                <li><a href="#">Internacional</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#" ng-click="cadastreToggle()">Cadastre seu imóvel</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Serviços <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="servicos2.php#locacao">Locação</a></li>
                <li><a href="servicos2.php#venda">Venda</a></li>
                <li><a href="servicos2.php#administracao">Administração</a></li>
              </ul>
            </li>
            <li><a href="relocation.php">Relocation</a></li>
            <li><a href="empresa.php">Empresa</a></li>
            <!-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Relocation <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="relocation.php#relocation">Relocation</a></li>
                <li><a href="relocation.php#stepbystep">Step by Step</a></li>
                <li><a href="relocation.php#advantages">Advantages</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Empresa <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="empresa.php#empresa">Empresa</a></li>
                <li><a href="empresa.php#cliente">Clientes</a></li>
              </ul>
            </li> -->
            <li><a href="contato.php">Contato</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <cadastre></cadastre>