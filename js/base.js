    
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
        swfPath: "/lib/jQuery.jPlayer.2.4.0jQuery.jPlayer.2.4.0/",
        supplied: "m4v, ogv",
        cssSelectorAncestor: "",
        cssSelector: {
            play: "#play",
            pause: "#pause",
            stop: "#stop",
            mute: "#mute",
            unmute: "#unmute",
            currentTime: "#currentTime",
            duration: "#duration",
            seekBar: '.progress-striped',
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
$mute.on("click", function(){
	$(this).addClass(_esconde);
	$unmute.removeClass(_esconde)
});
$unmute.on("click", function(){
	$(this).addClass(_esconde);
	$mute.removeClass(_esconde)
});

$(_mediaId).jPlayer();

    $(_mediaId).bind($.jPlayer.event.pause, function(event) {
        $(this).jPlayer("clearMedia");
        $(this).jPlayer("setMedia", {
                mp3: server
        });
    });