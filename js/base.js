var _mediaId = "#mediaContainer";
var _conteudo = "#conteudo";
var _indexMusica = 0;
var _musica = "";


var $mute = $("#mute");
var $unmute = $("#unmute");
var $play = $("#play");
var $pause = $("#pause");
var $stop = $("#stop");
var $back = $("#back");
var $next = $("#next");

var $busca = $("#busca");
var $tocarTodas = $("#tocarTodas");

var $labeMusica = $(".label-musica");
var $barraMusica = $(".barra-musica");

var _esconde = "hide";
var _activa = "active";

var _optionsPlayer = {
        swfPath: "/lib/jQuery.jPlayer.2.4.0jQuery.jPlayer.2.4.0/",
        supplied: "mp3",
        cssSelectorAncestor: "#player",
        cssSelector: {
            play: ".play",
            pause: ".pause",
            stop: ".stop",
            mute: ".mute",
            unmute: ".unmute",
            currentTime: ".current-time",
            duration: ".duration",
            seekBar: '.barra-musica',
            playBar: '.progress-bar'
          },
        size: {
            width: "320px",
            height: "30px"
        }
};
/**

    Funções e Parâmetros

**/

var getPage = function(link){
    $.ajax({
        url:link,
        method:"get",
        success:function(data){
            $(_conteudo).html(data);
        }
    });
}

$back.on("click",function(){
    if(_indexMusica > 0){
        _indexMusica--;
        atualizaPlayer();
    }
});
var next = function(){
    if(_indexMusica < ListaMusicas.size()){
        _indexMusica--;
        atualizaPlayer();
    }
}
$next.on("click",next);
$tocarTodas.on("click", function(){atualizaPlayer(true)});

$busca.on("keyup", function(){
    getPage($("[role='search']").attr("action")+"?busca="+$(this).val());
});

var selecionaMusica = function($check, play = false){
    $check.attr("checked","checked");
    ListaMusicas.add($check.val());
    _indexMusica = ListaMusicas.index;
    if(play){
        atualizaPlayer(true);
    }
}
var desmarcaMusica = function($check){
    $check.attr("checked","false");
    ListaMusicas.remove($check.val());
}

var atualizaPlayer = function(autoplay = false){
    $.ajax({
        url: "ajaxMusica.php",
        dataType: "json",
        data: {
            "id": ListaMusicas.get(_indexMusica)
        },
        method:"get",
        success:function(data){
            var retorno = data[0];
            _musica = retorno.MP3;
            // alert(retorno.Id+"\n"+retorno.Artista+"\n"++"\n"+retorno.TXT+"\n"+retorno.MP3);
            $labeMusica.text(retorno.Artista + " - "+retorno.Musica);
            destruirPlayer();
            gerarPlayer(autoplay);
        }
    });
     
}
var gerarPlayer = function(autoplay = false){
    var opcoes = _optionsPlayer;
    opcoes.ready = function () {
        $(this).jPlayer("setMedia", {
            mp3: _musica
        });
        $(this).jPlayer("load");
        if(autoplay){
            $(this).jPlayer("play");
        }
      };
    $(_mediaId).jPlayer(_optionsPlayer);
};

var destruirPlayer = function(){
  $(_mediaId).jPlayer("destroy");  
}

/* jPlayer Funções */

var escondeEMostra = function ($obj1, $obj2){
    $obj1.addClass(_esconde);
    $obj2.removeClass(_esconde);
}

var escondePlayEMostraPause = function(){
    escondeEMostra($play,$pause);
    $barraMusica.addClass(_activa);
}
var escondePauseEMostraPlay = function(){
    escondeEMostra($pause,$play);
    $barraMusica.removeClass(_activa);
}

$mute.on("click",  escondeEMostra($(this),$unmute));
$unmute.on("click", escondeEMostra($(this),$mute));

var voltarPlayEPause = function(event) {
    escondePauseEMostraPlay();
};

$(_mediaId).bind($.jPlayer.event.play, escondePlayEMostraPause);
$(_mediaId).bind($.jPlayer.event.pause, voltarPlayEPause);
$(_mediaId).bind($.jPlayer.event.ended, voltarPlayEPause);