
function submitMode(){
var startTime= document.getElementById('startTime');
var d=new Date();
startTime.innerHTML="Time Started: "+  d.getHours() + ":" + d.getMinutes();

//unlock the grid
//timer starts 
//execute fucntion to begin game

}

window.addEventListener('load', function(){
    var pVp= document.getElementById('playerVsPlayer');
    var pVc=document.getElementById('playerVsComputer');
    var playBtn = document.getElementById('playButton');

    pVp.checked=true;
    playBtn.addEventListener('click', submitMode);

});