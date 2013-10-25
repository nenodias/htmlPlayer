<html>
	<head>
		<title>AudioRock</title>
		<link rel="stylesheet" href="lib/bootstrap-3.0.0/css/bootstrap-theme.min.css" />
		<link rel="stylesheet" href="lib/bootstrap-3.0.0/css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/base.css" />
		<script type="text/javascript" src="lib/jquery-2.0.3.min.js"></script>
		<script type="text/javascript" src="lib/bootstrap-3.0.0/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="lib/jQuery.jPlayer.2.4.0/jquery.jplayer.min.js"></script>
		<script type="text/javascript" src="js/base.js"></script>
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
			<div id="mediaContainer"></div>
			<div class="span7 barra-controle">
				<a id="back" class="btn"><span class="glyphicon glyphicon-step-backward"></span></a>					
				<a id="play" class="btn"><span class="glyphicon glyphicon-play"></span></a>
				<a id="pause" class="btn hide"><span class="glyphicon glyphicon-pause"></span></a>
				<a id="next" class="btn"><span class="glyphicon glyphicon-step-forward"></span></a>					
				<a id="stop" class="btn"><span class="glyphicon glyphicon-stop"></span></a>
				<a id="mute" class="btn"><span class="glyphicon glyphicon-volume-off"></span></a>
				<a id="unmute" class="btn"><span class="glyphicon glyphicon-volume-up"></span></a>
				<span id="current-time"></span>
				<span id="duration"></span>
				<div class="progress progress-striped active">
				  <div class="progress-bar"  role="progressbar" style="width: 100%">
				  </div>
				</div>
			</div>
		</footer>
		<script type="text/javascript">
			$(document).ready(function(){
				var opcoes = _optionsPlayer;
				opcoes.ready = function () {
				    $(this).jPlayer("setMedia", {
				    	mp3: musica
				    });
				    $(this).jPlayer("load");
				    $(this).jPlayer("play");
				  };
				$(_mediaId).jPlayer(_optionsPlayer);
			});
		</script>
	</body>
</html>
