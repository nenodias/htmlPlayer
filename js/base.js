    
var _mediaId = "#mediaContainer";

var $mute = $("#mute");
var $unmute = $("#unmute");
var $play = $("#play");
var $pause = $("#pause");
var $stop = $("#stop");
var $back = $("#back");
var $next = $("#next");

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

$play.on("click", escondePlayEMostraPause);
$mute.on("click",  escondeEMostra($(this),$unmute));
$unmute.on("click", escondeEMostra($(this),$mute));
/*
$(_mediaId).jPlayer();
*/

var voltarPlayEPause = function(event) {
    escondePauseEMostraPlay();
};

$(_mediaId).bind($.jPlayer.event.pause, voltarPlayEPause);
$(_mediaId).bind($.jPlayer.event.ended, voltarPlayEPause);
// $(_mediaId).bind($.jPlayer.event.stop, function(event) { 
//      escondePauseEMostraPlay();
// });