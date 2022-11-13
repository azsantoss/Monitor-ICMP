<!DOCTYPE html>
<html lang="BR" dir="ltr" class="ltr">
	<head>
    <meta charset="utf-8">
    <title>Monitor ICMP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1">
    <meta name="description" content="">
    <meta name="robots" content="noindex" />		
    <meta name="theme-color" content="#424242">
	  <link rel="icon" type="image/x-icon" href="favicon.ico" />
	  <link rel="icon" type="image/png" href="favicon.png" />
	  <link rel="apple-touch-icon" href="favicon.png" />
    <link href="static/plugin/twitter-bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="static/plugin/twitter-bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="static/plugin/bootstrap-multiselect/bootstrap-multiselect.min.css" rel="stylesheet">
    <link href="static/css/style.css" rel="stylesheet">
    <script type="text/javascript" src="static/plugin/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="static/plugin/twitter-bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="static/plugin/bootstrap-multiselect/bootstrap-multiselect.min.js"></script>
    <script type="text/javascript" src="static/js/scripts.js"></script>
    <style>
        .tab-content {
    display: block;
    width: auto;
    padding-top: 0;
    padding-bottom: 0;
    display: inline-block;
}
    </style>
  </head>
  <body data-spy="scroll" data-target=".subnav" data-offset="50" class="black_background">
    <!-- navbar -->
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="index.php">Monitor ICMP</a>
<div class="nav-collapse">
  <ul class="nav">
	  	  <li class="active"><a href="dashboard.php">Dashboard</a></li>
	  	  <li class=""><a href="http://localhost/monitor-ICMP/?&amp;mod=server">Servidores</a></li>
	  	  <li class=""><a href="http://localhost/monitor-ICMP/?&amp;mod=config">Configuração</a></li>
        <li class=""><a target="_blank" href="https://github.com/azsantoss/Monitor-ICMP">Atualização</a></li>
	  	  <li id="nav_option_help">
		  <a href="Monitorsupport" target="_blank"></a>
	  </li>
  </ul>
  <ul class="nav pull-right">
	<li class="dropdown visible-desktop">
	  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bem vindo, admin <b class="caret"></b></a>
	  <ul class="dropdown-menu">
		<li><a href="http://localhost/monitor-ICMP/?&amp;mod=user_profile"><i class="icon-cog"></i>&nbsp;Perfil</a></li>
		<li><a href="http://localhost/monitor-ICMP/?&amp;logout=1"><i class="icon-off"></i>&nbsp;Logout</a></li>
	  </ul>
	</li>
	<li class="hidden-desktop divider"></li>
	<li class="hidden-desktop"><a href="http://localhost/monitor-ICMP/?&amp;mod=user_profile">Perfil</a></li>
	<li class="hidden-desktop"><a href="http://localhost/monitor-ICMP/?&amp;logout=1">Logout</a></li>
  </ul>
</div>
        </div>
      </div>
    </div>
    <br>
    <div id="main-container">
		<div class="page-header">
			<div class="header-label"><h1>Status de conexões</h1></div>
			<div class="header-accessories"><div class="btn-group" data-toggle="buttons-radio">
	<button class="btn active" data-toggle="tab" data-target="#flow-layout" onclick="psm_saveLayout(0)"><i class="icon-th-large"></i></button>
	<button class="btn " data-toggle="tab" data-target="#list-layout" onclick="psm_saveLayout(1)"><i class="icon-th-list"></i></button>
</div></div>
		</div>
		<div id="main-content">
			
			<div id="page-container">
				<div id="flashmessage" class="hide">
									</div>
			
<style>
 .main iframe {
    border: none;
    position: fixed;
    /*top: 0;*/
    left: 3%;
    width: 95%;
    height: 95%;
}         
</style>

<div class="main"><center><iframe src="frame.php"></iframe></center></div>


</div>
</div>

			</div>
		</div>
			</div>
    <!-- /container -->
    </body>
</html>
