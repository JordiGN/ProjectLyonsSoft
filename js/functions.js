// Fecha
var datetime = null,date = null;
var update = function () {
    date = moment(new Date())
    datetime.html(date.format('h:mm:ss a'));
};

$(document).ready(function(){
    datetime = $('.clock')
    update();
    setInterval(update, 1000);
});


$(document).ready(function(){
$("a.minimize-window").on( "click", function() {
  var target = $(this).attr("data-target");
  var title = $(target).find(".panel-heading").text();
  $(target).addClass("animated zoomOutDown");
  $('<a class="active-window animated flipInY" data-target="'+target+'"><i class="fa fa-cube"></i>'+title+'</a>').appendTo("#app-active");

$("a.active-window").on( "click", function(event) {
  event.preventDefault();
  var target = $(this).attr("data-target");
    $(target).removeClass("animated zoomOutDown").delay(1000);
    $(target).addClass("animated zoomInUp");
    $(this).removeClass("animated flipInY").delay(1000);
    $(this).addClass('animated flipOutX');
    $(this).hide(1000);
  });
});

$("a.close-window").on( "click", function() {
  var target = $(this).attr("data-target");
    $(target).addClass("animated zoomOut");
    $(target).hide(1000);
});

$(".wallpapers a").on( "click", function() {
  var target = $(this).attr("data-id");
  var bodytag = $("body");
  var bodywall = bodytag.attr('class');

    if (target == 1){
      bodytag.removeClass(bodywall);
      bodytag.addClass("wall-1");


    }else if (target == 2){
      bodytag.removeClass(bodywall);
      bodytag.addClass("wall-2");


    }else if (target == 3){
      bodytag.removeClass(bodywall);
      bodytag.addClass("wall-3");


    }else if (target == 4){
      bodytag.removeClass(bodywall);
      bodytag.addClass("wall-4");


    }else{
      return;
    }

});


//////////////////////
/* Knob Value Data */
////////////////////
var d = new Date(),
    s = d.getSeconds(),
    m = d.getMinutes(),
    h = d.getHours();

$('.h').data('targetValue', h);
$('.m').data('targetValue', m);
$('.s').data('targetValue', s);
//basic setup
$('.knob').knob({
    value: 0,
        'readOnly': true,
        'width': 100,
        'height': 100,
        'dynamicDraw': true,
        'thickness': 0.2,
        'tickColorizeValues': true,
        'skin': 'tron'
});
$.when(
$('.knob').animate({
    value: 100
}, {
    duration: 1800,
    easing: 'swing',
    progress: function () {
    $(this).val(Math.round(this.value/100*$(this).data('targetValue'))).trigger('change')
    }
})
).then(function () {
    myDelay();
});

function myDelay() {
    var d = new Date(),
        s = d.getSeconds(),
        m = d.getMinutes(),
        h = d.getHours();
    $('.h').val(h).trigger("change");
    $('.m').val(m).trigger("change");
    $('.s').val(s).trigger("change");
    setTimeout(myDelay, 1000)
}



$(".panel-heading").on( "click", function(e) {
     $(this).parent().draggable();
});


$(".panel-heading").mouseup(function() {
    $(this).parent().draggable();
  })
  .mousedown(function() {
    $(this).parent().draggable();
  });



});
