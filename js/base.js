
var _mediaId = "#mediaContainer" 

var $mute = $("#mute");
var $unmute = $("#unmute");
var $play = $("#play");
var $pause = $("#pause");
var $stop = $("#stop");
var $back = $("#back");
var $next = $("#next");

var _esconde = "hide";

var _optionsPlayer = {
        swfPath: "js/",
        wmode: "window",
        solution: "flash,html",
        supplied: "mp3",
        preload: "none",
        volume:0.75,
        cssSelectorAncestor: "",
        cssSelector: {
                play: "#play",
                pause: "#pause"
        }
};
/**

	Funções e Parâmetros

**/
$mute.on("click", function(){
	$(this).addClass(_esconde);
	$unmute.removeClass(_esconde)
});
$unmute.on("click", function(){
	$(this).addClass(_esconde);
	$mute.removeClass(_esconde)
});

$("#jquery_jplayer_1").jPlayer();

    $("#jquery_jplayer_1").bind($.jPlayer.event.pause, function(event) {
        $(this).jPlayer("clearMedia");
        $(this).jPlayer("setMedia", {
                mp3: server
        });
    });