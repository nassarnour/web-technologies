
var count = 0;
var hrs = 0;
var mins = 0;
var secs = 0;
var endTime= document.getElementById('endTime');
var startTime= document.getElementById('startTime');

var pvpTurn = Math.floor(Math.random()*1);
var pvcTurn = Math.floor(Math.random()*1); 

var whoPlaying = "", timex = "", pvp = false, pvc = false, resetTime = false;
var isGameWon = false, isGameDrawn = false, isGameOver = false, count = 0;

var $ = function(id){
    return document.getElementById(id);
}

function startGame (){
var d=new Date();
startTime.innerHTML="Start Time: "+  d.getHours() + ":" + d.getMinutes()+":"+d.getSeconds();

    isGameOver = false;
    enableAllCells(); 
    currentGameSetting();
    
}


function reset(){ 
    location.reload();
}

function currentGameSetting(){
    if($("pVc").checked){
        playerVcomp();
    }else if($("pVp").checked){
        pvp = true;
        playerVplayer();
    }
}

function togglePlayer(){
    let letter = "";
    if(pvpTurn == 1){
        pvpTurn = 0;
        letter = 'X';
        return letter;
    } else if(pvpTurn == 0){
        pvpTurn = 1;
        letter = 'O';
        return letter;
    }
}

function switchPlayers(x)
{ var letter= "";
if(x=="O")
{
    letter= "X"
}
if(x=="X"){
    letter= "O"
}
return letter;
}

function playerVplayer(){
    debugger
    if(pvp)
        whoPlaying = togglePlayer();

        if(whoPlaying=='X')
        {
        
            $("box1").addEventListener(
                "click", function(){$("box1").innerHTML = "X"; 
                checkForWinner(); 
                $("box1").style.pointerEvents = 'none';
            });
            $("box2").addEventListener("click",
                 function(){
                    $("box2").innerHTML = "X";
                    checkForWinner(); 
                    $("box2").style.pointerEvents = 'none';
                });
            $("box3").addEventListener("click",function(){$("box3").innerHTML = "X"; checkForWinner(); $("box3").style.pointerEvents = 'none';});
            $("box4").addEventListener("click",function(){$("box4").innerHTML = "X"; checkForWinner(); $("box4").style.pointerEvents = 'none';});
            $("box5").addEventListener("click", function(){$("box5").innerHTML = "X"; checkForWinner(); $("box5").style.pointerEvents = 'none';});
            $("box6").addEventListener("click", function(){$("box6").innerHTML = "X"; checkForWinner(); $("box6").style.pointerEvents = 'none';});
            $("box7").addEventListener("click", function(){$("box7").innerHTML = "X"; checkForWinner(); $("box7").style.pointerEvents = 'none';});
            $("box8").addEventListener("click", function(){$("box8").innerHTML = "X"; checkForWinner(); $("box8").style.pointerEvents = 'none';});
            $("box9").addEventListener("click", function(){$("box9").innerHTML = "X"; checkForWinner();         currentGameSetting();
            $("box9").style.pointerEvents = 'none';});
            whoPlaying=switchPlayers("O");    
    }
    
        if(whoPlaying=='O')
        {
    
            $("box1").addEventListener(
                "click", function(){$("box1").innerHTML = "O"; 
                checkForWinner(); 
                $("box1").style.pointerEvents = 'none';
            });
            $("box2").addEventListener( "click",function(){$("box2").innerHTML = "O"; checkForWinner(); $("box2").style.pointerEvents = 'none';});
            $("box3").addEventListener("click", function(){$("box3").innerHTML = "O"; checkForWinner(); $("box3").style.pointerEvents = 'none';});
            $("box4").addEventListener("click", function(){$("box4").innerHTML = "O"; checkForWinner(); $("box4").style.pointerEvents = 'none';});
            $("box5").addEventListener("click", function(){$("box5").innerHTML = "O"; checkForWinner(); $("box5").style.pointerEvents = 'none';});
            $("box6").addEventListener("click", function(){$("box6").innerHTML = "O"; checkForWinner(); $("box6").style.pointerEvents = 'none';});
            $("box7").addEventListener("click", function(){$("box7").innerHTML = "O"; checkForWinner(); $("box7").style.pointerEvents = 'none';});
            $("box8").addEventListener("click", function(){$("box8").innerHTML = "O"; checkForWinner(); $("box8").style.pointerEvents = 'none';});
            $("box9").addEventListener("click",function(){$("box9").innerHTML = "O"; checkForWinner();         currentGameSetting();
            $("box9").style.pointerEvents = 'none';});
            whoPlaying=switchPlayers("O");
    
        }

    

    


}
function playerVcomp(){
    if(pvcTurn == 1){
        checkForWinner();
    } else if(pvcTurn == 0){
        checkForEmptyCells();
        checkForWinner();
        pvcTurn = 1;
        currentGameSetting();
    }
}

function printOnlyX(){
    $("box1").addEventListener("click", function(){if($("pVp").checked) return; $("box1").innerHTML = 'X'; $("box1").pointerEvents = 'none'; pvcTurn = 0; checkForWinner(); if(!isGameOver) checkForEmptyCells();});
    $("box2").addEventListener("click", function(){if($("pVp").checked) return; $("box2").innerHTML = 'X'; $("box2").pointerEvents = 'none'; pvcTurn = 0; checkForWinner(); if(!isGameOver) checkForEmptyCells();});
    $("box3").addEventListener("click", function(){if($("pVp").checked) return; $("box3").innerHTML = 'X'; $("box3").pointerEvents = 'none'; pvcTurn = 0; checkForWinner(); if(!isGameOver) checkForEmptyCells();});
    $("box4").addEventListener("click", function(){if($("pVp").checked) return; $("box4").innerHTML = 'X'; $("box4").pointerEvents = 'none'; pvcTurn = 0; checkForWinner(); if(!isGameOver) checkForEmptyCells();});
    $("box5").addEventListener("click", function(){if($("pVp").checked) return; $("box5").innerHTML = 'X'; $("box5").pointerEvents = 'none'; pvcTurn = 0; checkForWinner(); if(!isGameOver) checkForEmptyCells();});
    $("box6").addEventListener("click", function(){if($("pVp").checked) return; $("box6").innerHTML = 'X'; $("box6").pointerEvents = 'none'; pvcTurn = 0; checkForWinner(); if(!isGameOver) checkForEmptyCells();});
    $("box7").addEventListener("click", function(){if($("pVp").checked) return; $("box7").innerHTML = 'X'; $("box7").pointerEvents = 'none'; pvcTurn = 0; checkForWinner(); if(!isGameOver) checkForEmptyCells();});
    $("box8").addEventListener("click", function(){if($("pVp").checked) return; $("box8").innerHTML = 'X'; $("box8").pointerEvents = 'none'; pvcTurn = 0; checkForWinner(); if(!isGameOver) checkForEmptyCells();});
    $("box9").addEventListener("click", function(){if($("pVp").checked) return; $("box9").innerHTML = 'X'; $("box9").pointerEvents = 'none'; pvcTurn = 0; checkForWinner(); if(!isGameOver) checkForEmptyCells();});
}

function checkForEmptyCells(){
    let rNmumber = Math.floor((Math.random() * 9) + 1);

    var spot1 = $("box1").innerHTML, sqr2 = $("box2").innerHTML, sqr3 = $("box3").innerHTML;
    var sqr4 = $("box4").innerHTML, sqr5 = $("box5").innerHTML, sqr6 = $("box6").innerHTML;
    var sqr7 = $("box7").innerHTML, sqr8 = $("box8").innerHTML, sqr9 = $("box9").innerHTML;

    if(rNmumber == 1 && sqr1 == ""){
        $("box1").innerHTML = "O"; checkForWinner(); $("box1").pointerEvents = 'none';
    } else if(rNmumber == 2 && sqr2 == ""){
        $("box2").innerHTML = "O"; checkForWinner(); $("box2").pointerEvents = 'none';
    } else if(rNmumber == 3 && sqr3 == ""){
        $("box3").innerHTML = "O"; checkForWinner(); $("box3").pointerEvents = 'none';
    } else if(rNmumber == 4 && sqr4 == ""){
        $("box4").innerHTML = "O"; checkForWinner(); $("box4").pointerEvents = 'none';
    } else if(rNmumber == 5 && sqr5 == ""){
        $("box5").innerHTML = "O"; checkForWinner(); $("box5").pointerEvents = 'none';
    } else if(rNmumber == 6 && sqr6 == ""){
        $("box6").innerHTML = "O"; checkForWinner(); $("box6").pointerEvents = 'none';
    } else if(rNmumber == 7 && sqr7 == ""){
        $("box7").innerHTML = "O"; checkForWinner(); $("box7").pointerEvents = 'none';
    } else if(rNmumber == 8 && sqr8 == ""){
        $("box8").innerHTML = "O"; checkForWinner(); $("box8").pointerEvents = 'none';
    } else if(rNmumber == 9 && sqr9 == ""){
        $("box9").innerHTML = "O"; checkForWinner(); $("box9").pointerEvents = 'none';
    } else{ checkForEmptyCells();}

    pvcTurn = 1;
}

function isWonOrDrawn(winner){
var d=new Date();
var end= endTime.innerHTML="End Time: "+  d.getHours() + ":" + d.getMinutes()+":"+d.getSeconds();

    
isGameOver = true;
    if(isGameWon){
        alert("Player " + winner + " has won the match!");
        disableAllCells();
        $("playAgainBtn").style.display = 'initial';
        

    } else if(isGameDrawn){
        alert("Tie!");
        disableAllCells();
        $("playAgainBtn").style.display = 'initial';
    }
}

function  checkForWinner(){
    if (isGameOver)
        return;

    var sqr1 = $("box1").innerHTML, sqr2 = $("box2").innerHTML, sqr3 = $("box3").innerHTML;
    var sqr4 = $("box4").innerHTML, sqr5 = $("box5").innerHTML, sqr6 = $("box6").innerHTML;
    var sqr7 = $("box7").innerHTML, sqr8 = $("box8").innerHTML, sqr9 = $("box9").innerHTML;

    if(((sqr1=="X") || (sqr1=="O")) && ((sqr1 == sqr2) && (sqr2 == sqr3))){
        isGameWon = true; isWonOrDrawn(sqr1);
    } else if(((sqr4=="X") || (sqr4=="O")) && ((sqr4 == sqr5) && (sqr5 == sqr6))){
        isGameWon = true; isWonOrDrawn(sqr4);
    } else if(((sqr7=="X") || (sqr7=="O")) && ((sqr7 == sqr8) && (sqr8 == sqr9))){
        isGameWon = true; isWonOrDrawn(sqr7);
    }

    else if(((sqr1=="X") || (sqr1=="O")) && ((sqr1 == sqr4) && (sqr4 == sqr7))){
        isGameWon = true; isWonOrDrawn(sqr1);
    } else if(((sqr2=="X") || (sqr2=="O")) && ((sqr2 == sqr5) && (sqr5 == sqr8))){
        isGameWon = true; isWonOrDrawn(sqr2);
    } else if(((sqr3=="X") || (sqr3=="O")) && ((sqr3 == sqr6) && (sqr6 == sqr9))){
        isGameWon = true; isWonOrDrawn(sqr3);
    }

    else if(((sqr1=="X") || (sqr1=="O")) && ((sqr1 == sqr5) && (sqr5 == sqr9))){
        isGameWon = true; isWonOrDrawn(sqr1);
    } else if(((sqr3=="X") || (sqr3=="O")) && ((sqr3 == sqr5) && (sqr5 == sqr7))){
        isGameWon = true; isWonOrDrawn(sqr3);
    }

    else if(sqr1 != "" && sqr2 != "" && sqr3 != "" && sqr4 != "" && sqr5 != "" &&
            sqr6 != "" && sqr7 != "" && sqr8 != "" && sqr9 != ""){
        isGameDrawn = true; isWonOrDrawn(sqr1);
    }
}

function disableAllCells() {
    $("box1").style.pointerEvents = 'none', $("box2").style.pointerEvents = 'none', $("box3").style.pointerEvents = 'none';
    $("box4").style.pointerEvents = 'none', $("box5").style.pointerEvents = 'none', $("box6").style.pointerEvents = 'none';
    $("box7").style.pointerEvents = 'none', $("box8").style.pointerEvents = 'none', $("box9").style.pointerEvents = 'none';
}

function enableAllCells(){
    $("box1").style.pointerEvents = "all"; $("box2").style.pointerEvents = "all"; $("box3").style.pointerEvents = "all";
    $("box4").style.pointerEvents = "all"; $("box5").style.pointerEvents = "all"; $("box6").style.pointerEvents = "all";
    $("box7").style.pointerEvents = "all"; $("box8").style.pointerEvents = "all"; $("box9").style.pointerEvents = "all";
}

window.addEventListener('load', function(){
  disableAllCells(); printOnlyX();

document.getElementById('startBtn').onclick=function(){
  startGame()
};
document.getElementById('resetBtn').onclick=function(){
  reset()
};
document.getElementById('playAgainBtn').onclick=function(){
    reset()
  };
});
