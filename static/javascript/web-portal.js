
function scroll_pic(id, start){
    var pos = document.documentElement.scrollTop;
    var height = $("body").height();
    var scroll = (70*(pos/height) + start) + "%";
    $(".picture-box" + id).css("background-position", "70%" + scroll);
}

$(document).ready(function(){
    console.log("Script Running");
    // Initialize Scroll Positions
    scroll_pic("#profile-picture", 35);

    window.onscroll = function() {
        scroll_pic("#profile-picture", 35);
    };
});