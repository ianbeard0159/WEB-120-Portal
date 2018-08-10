function changeBox(boxOne, boxTwo, boxThree, boxFour, boxFive, currentBox){
    var current = 1;
    offset = 50;
    var pos = (document.documentElement.scrollTop) + offset;
    if(pos < boxTwo){
        current = 1;
    }
    else if(pos < boxThree){
        current = 2;
    }
    else if(pos < boxFour){
        current = 3;
    }
    else if(pos < boxFive){
        current = 4;
    }
    else{
        current = 5;
    }
    return current;
}
function changeNav(currentBox){
    console.log("Now viewing box " + currentBox);
    var bigNav = ["#big1","#big2","#big3","#big4","#big5"];
    for(var i = 1; i <=5; i++){
        if(currentBox == i){
            $(bigNav[i-1]).css("color", "rgb(186, 229, 250)");
        }
        else{
            $(bigNav[i-1]).css("color", "rgb(20, 98, 139)");
        }
    }
}

$(document).ready(function(){
    console.log("Script Running");
    var boxOne = ($("#topic-1").position()).top;
    var boxTwo = ($("#topic-2").position()).top;
    var boxThree = ($("#topic-3").position()).top;
    var boxFour = ($("#topic-4").position()).top;
    var boxFive = ($("#topic-5").position()).top;
    var currentBox = changeBox(boxOne, boxTwo, boxThree, boxFour, boxFive);
    var newBox = currentBox;
    changeNav(currentBox);

    //Whenever the user scrolls, calculate the current text box
    window.onscroll = function(){
        newBox = changeBox(boxOne, boxTwo, boxThree, boxFour, boxFive, currentBox);
        //Only change big-nav when the current box actually changes
        if(newBox != currentBox){
            currentBox = newBox;
            changeNav(currentBox);
        }
    };
    $(window).resize(function(){
        boxOne = ($("#topic-1").position()).top;
        boxTwo = ($("#topic-2").position()).top;
        boxThree = ($("#topic-3").position()).top;
        boxFour = ($("#topic-4").position()).top;
        boxFive = ($("#topic-5").position()).top;
        currentBox = changeBox(boxOne, boxTwo, boxThree, boxFour, boxFive);
        changeNav(currentBox);
    });

    $("#big-nav").on("click", ".big-nav-item",(function(){
        var id = $(this).attr("id");
        console.log(id);
        if (id == "big1"){
            $(document).scrollTop(boxOne);
        }
        else if (id == "big2"){
            $(document).scrollTop(boxTwo);
        }
        else if (id == "big3"){
            $(document).scrollTop(boxThree);
        }
        else if (id == "big4"){
            $(document).scrollTop(boxFour);
        }
        else if (id == "big5"){
            $(document).scrollTop(boxFive);
        }
    }));

});