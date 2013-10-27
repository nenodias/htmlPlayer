<html>
	<head>
		<title>AudioRock</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="lib/bootstrap-3.0.0/css/bootstrap-theme.min.css" />
		<link rel="stylesheet" href="lib/bootstrap-3.0.0/css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/base.css" />
		<script type="text/javascript" src="lib/jquery-2.0.3.min.js"></script>
		<script type="text/javascript" src="lib/bootstrap-3.0.0/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="lib/jQuery.jPlayer.2.4.0/jquery.jplayer.min.js"></script>
	</head>
	<body>
		 <header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
		  <div class="container">
		    <div class="navbar-header">
		      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a href="#" class="navbar-brand">AudioRock</a>
		    </div>
		    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
		      <ul class="nav navbar-nav">
		        <li>
		          <a href="#">Getting started</a>
		        </li>
		        <li>
		          <a href="#">CSS</a>
		        </li>
		        <li>
		          <a href="#">Components</a>
		        </li>
		        <li>
		          <a href="#">JavaScript</a>
		        </li>
		        <li>
		          <a href="#">Customize</a>
		        </li>
		      </ul>
		    </nav>
		  </div>
		</header>
		<div class="container" id="conteudo">
			<div>
			<?php
				include("jsonReader.php");
			?>
			</div>
		</div>
		<footer id="rodape" class="navbar navbar-inverse navbar-fixed-bottom">
			<div id="player" class="span7 barra-controle">
				<div id="mediaContainer"></div>
				<div id="mostradores">
					<span class="current-time pull-left"></span>
					<span class="duration pull-right"></span>
					<div class="label-musica"><span class="label-musica">Outras Frequências</span></div>
				</div>
				<a id="back" class="btn"><span class="glyphicon glyphicon-step-backward"></span></a>					
				<a id="play" class="btn play"><span class="glyphicon glyphicon-play"></span></a>
				<a id="pause" class="btn hide pause"><span class="glyphicon glyphicon-pause"></span></a>
				<a id="next" class="btn"><span class="glyphicon glyphicon-step-forward"></span></a>					
				<a id="stop" class="btn stop"><span class="glyphicon glyphicon-stop"></span></a>
				<a id="mute" class="btn mute"><span class="glyphicon glyphicon-volume-off"></span></a>
				<a id="unmute" class="btn unmute"><span class="glyphicon glyphicon-volume-up"></span></a>
				<div class="barra-musica progress progress-striped">
				  <div class="progress-bar"  role="progressbar" style="width: 100%"></div>
				</div>
			</div>
		</footer>
		<script type="text/javascript" src="js/base.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				var opcoes = _optionsPlayer;
				opcoes.ready = function () {
				    $(this).jPlayer("setMedia", {
				    	mp3: musica
				    });
				    $(this).jPlayer("load");
				  };
				$(_mediaId).jPlayer(_optionsPlayer);
			});
		</script>
	</body>
</html>
