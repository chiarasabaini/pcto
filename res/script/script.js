var count_clicks = 0;
var count_dblclicks = 0;
var count_resize = 0;
var count_scrolls = 0;
var count_over = 0;
var count_enter = 0;
var count_out = 0;
var count_leave = 0;

console.log('hello, world!');
/*
$("#content").hide();
$("#content").show();
$('#content').css({'background-color' : '#ffffff', 'color' : '#000000'});
$('#content').css({'background-color' : '#000000', 'color' : '#ffffff'});
 */

$("#purple-btn").click(function(){
    $("#click").text(count_clicks++);
})

$("#red-btn").dblclick(function(){
    $("#dblclick").text(count_dblclicks++);
})

$(window).resize(function(){
    $("#resize").text(count_resize++);
})

$(window).scroll(function(){
    $("#scroll").text(count_scrolls++);
})

$("#2021-03-05").mouseover(function(){
    $("#m-over").text(count_over++);
})

$(".daily").mouseenter(function(){
    $("#m-enter").text(count_enter++);
})

$("#2021-03-05").mouseout(function(){
    $("#m-out").text(count_out++);
})

$(".daily").mouseleave(function(){
    $("#m-leave").text(count_leave++);
})

$("#black-btn").click(function(){
    $.get("get_data.php", function(name, status){
      alert("Name: " + name + "\nStatus: " + status);
    });
  });