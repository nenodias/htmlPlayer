<footer id="rodape" class="navbar navbar-inverse navbar-fixed-bottom">
	<div id="player" class="span7 barra-controle">
		<div id="mediaContainer"></div>
		<div id="mostradores">
			<span class="current-time pull-left"></span>
			<span class="duration pull-right"></span>
			<div class="label-musica"><span class="label-musica"></span></div>
		</div>					
		<a id="play" class="btn play"><span class="glyphicon glyphicon-play"></span></a>
		<a id="pause" class="btn hide pause"><span class="glyphicon glyphicon-pause"></span></a>			
		<a id="stop" class="btn stop"><span class="glyphicon glyphicon-stop"></span></a>
		<a id="mute" class="btn mute"><span class="glyphicon glyphicon-volume-off"></span></a>
		<a id="unmute" class="btn unmute"><span class="glyphicon glyphicon-volume-up"></span></a>
		<div class="barra-musica progress progress-striped">
		  <div class="progress-bar"  role="progressbar" style="width: 100%"></div>
		</div>
	</div>
</footer>
<script type="text/javascript" src="js/Lista.js"></script>
<script type="text/javascript" src="js/base.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		gerarPlayer();
	});
</script>