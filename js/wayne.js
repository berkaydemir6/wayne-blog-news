$(function(){
  $("#arama-yap").click(function () {
        $('#qnimate').css({'display': 'block'}).animate(2000);
          });
        
          $("#aramayiKapat").click(function () {
            $('#qnimate').css({'display': 'none'}).animate(2000);
   });
})

$(document).ready(function() { 
  $(".icerik-h3").hover(function() { 
    $(this).parent().parent().parent().parent().children("figure").children("a").children("img").css({"filter" : "blur(1.5px) grayscale(50%)", "transition" : ".3s linear"}).animate(200);
    $(this).parent().parent().parent().parent().children("figure").children("figcaption").children(".icerik-bilgileri").css({"visibility" : "visible", "transition" : ".3s linear", "opacity" : "1", "top" : "25px"}).animate(200);  
  }, function() { 
    $(this).parent().parent().parent().parent().children("figure").children("a").children("img").css({"filter" : "blur(0)", "transition" : ".3s linear"}).animate(200);
    $(this).parent().parent().parent().parent().children("figure").children("figcaption").children(".icerik-bilgileri").css({"visibility" : "hidden", "transition" : ".3s linear", "opacity" : "0", "top" : "0px"}).animate(200);  
  }); 
  });
  
  
  $(document).ready(function() { 
  $(".icerik-sirali-h3").hover(function() { 
    $(this).parent().parent().parent().parent().children("figure").children("a").children("img").css({"filter" : "blur(1.5px) grayscale(50%)", "transition" : ".3s linear"}).animate(200);
    $(this).parent().parent().parent().parent().children("figure").children("figcaption").children(".icerik-bilgileri").css({"visibility" : "visible", "transition" : ".3s linear", "opacity" : "1", "top" : "25px"}).animate(200);  
  }, function() { 
    $(this).parent().parent().parent().parent().children("figure").children("a").children("img").css({"filter" : "blur(0)", "transition" : ".3s linear"}).animate(200);
    $(this).parent().parent().parent().parent().children("figure").children("figcaption").children(".icerik-bilgileri").css({"visibility" : "hidden", "transition" : ".3s linear", "opacity" : "0", "top" : "0px"}).animate(200);  
  }); 
  });


  $("button.header-menu-item").hover(function() {
    var menu_item = $(this);
    menu_item.attr("expanded","true");
    menu_item.parent().addClass('show');
    var db_id = menu_item.attr('db_id');
    $("#" + db_id).addClass('show');
  });

  $(".menu-dropdown").mouseenter(function() {
    var menu_item = $(this);
    menu_item.addClass('show');
  }).mouseleave(function() {
    var menu_item = $(this);
    menu_item.removeClass('show');
  });

  $('#wayne-desktop-menu').children(".dropdown").children('button').each(function (index, value) {
    if(window.location.href == $(this).attr('url')){
      $(this).addClass('active');
    }
    });


  $('#wayne-menu').children('div').children('ul').children('.dropdown').children('button').each(function (index, value) {
    if(window.location.href == $(this).attr('url')){
      $(this).addClass('active');
    }
    });
  
