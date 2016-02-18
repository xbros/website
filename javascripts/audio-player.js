/**
 * Created by Simon on 18/02/2016.
 */
function createPlayers(){
    var players = document.getElementsByClassName("player");
    var i;
    for (i = 0; i < players.length; i++)
    {
        var name = players[i].getAttribute("name");
        var path = players[i].getAttribute("path");
        var playerId = name + "-player";
        var progressId = name + "-progress";
        //alert(playerId + " / " + progressId);

        var inner = "<audio id=" + playerId + " ontimeupdate=\"update(this, \'" + progressId + "\')\">" +
            "<source src='simon-music/" + path + ".mp3'>" +
            "</audio>" +
            "<img class='img-player' src='simon-music/" + path + ".jpg'>" +
            "<div class='rest-player'>" +
            "<div class='progress' onclick=\"clickProgress(\'" + playerId + "\', this, event, \'" + progressId + "\')\">" +
            "<div class='progress-bar' id='" + progressId + "' role='progressbar' aria-valuemin='0' aria-valuemax='100'>" +
            "</div>" +
            "</div>" +
            "<button class='control btn btn-default' onclick=\"play(\'" + playerId + "\', this)\"><i class='fa fa-play'></i></button>" +
            "<button class='control btn btn-default' onclick=\"stop(\'" + playerId + "\')\"><i class='fa fa-stop'></i></button>" +
            "<div class='dropdown btn btn-default'>" +
            "<div href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'><i class='fa fa-volume-up'></i> Volume <span class='caret'></span></div>" +
            "<ul class='dropdown-menu'>" +
            "<li><input type='range' name='volume' min='0' max='100' value='80' onchange=\"volume(\'" + playerId + "\', this.value)\"></li>" +
            "</ul>" +
            "</div>" +
            "</div>";

        players[i].innerHTML = inner;
    }
}

function play(idPlayer, control) {
    var player = document.querySelector('#' + idPlayer);

    if(player.paused) {
        player.play();
        control.innerHTML = '<i class="fa fa-pause"></i>';
    }
    else {
        player.pause();
        control.innerHTML = '<i class="fa fa-play"></i>';
    }
}

function stop(idPlayer) {
    var player = document.querySelector('#' + idPlayer);

    player.currentTime = 0;
    player.pause();
}

function volume(idPlayer, vol) {
    var player = document.querySelector('#' + idPlayer);

    player.volume = parseInt(vol) / 100;
}

function update(player, idProgress) {
    var duration = player.duration; //Durée totale
    var time = player.currentTime; //Temps écoulé
    var fraction = time / duration;
    var percent = Math.ceil(fraction * 100);

    var progress = document.querySelector('#' + idProgress);

    progress.style.width = percent + '%';
    progress.textContent = percent + '% / ' + formatTime(time);
}

function formatTime(time) {
    var hours = Math.floor(time / 3600);
    var mins = Math.floor((time % 3600) / 60);
    var secs = Math.floor(time % 60);

    if (secs < 10) {
        secs = "0" + secs;
    }

    if (hours) {
        if (mins < 10) {
            mins = "0" + mins;
        }

        return hours + ":" + mins + ":" + secs;
    }
    else {
        return mins + ":" + secs;
    }
}

function getMousePosition(event) {
    return {
        x: event.pageX,
        y: event.pageY
    };
}

function getPosition(element){
    var top = 0, left = 0;

    do {
        top  += element.offsetTop;
        left += element.offsetLeft;
    } while (element = element.offsetParent);

    return { x: left, y: top };
}

function clickProgress(idPlayer, control, event, idProgress) {
    var parent = getPosition(control);    // La position absolue de la progressBar
    var target = getMousePosition(event); // L'endroit de la progressBar où on a cliqué
    var player = document.querySelector('#' + idPlayer);

    var x = target.x - parent.x;
    var wrapperWidth = document.querySelector('#' + idProgress).offsetWidth;

    var percent = Math.ceil((x / wrapperWidth) * 100);
    var duration = player.duration;

    player.currentTime = (duration * percent) / 100;
}