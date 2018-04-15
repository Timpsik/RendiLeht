var run = function(){
 if (Offline.state === 'up')
 Offline.check();
 }
 setInterval(run, 5000);
 
var offlineCounter = 0;

$(document).ready(function() {
  var $online = $('.online'),
      $offline = $('.offline');

  Offline.on('down', function () {
    console.log("Offline");
    $online.fadeOut(function () {
      $offline.fadeIn();
    });
  });
 if (Offline.state == 'up') { 
    console.log("Started");
    $online.fadeOut(function () {
      $offline.fadeIn();
    });
  }

  Offline.on('up', function () {
    console.log("Online");
    $offline.fadeOut(function () {
      $online.fadeIn();
    });
    setTimeout(function(){
      $online.fadeOut("slow");
    },5000);
    if (localStorage.comment0) {
      for (i = 0; i < offlineCounter; i++) {
        console.log("Laen üles kommentaari nr: " + offlineCounter + ". Sisu: " + localStorage.getItem("comment" + i));
        $.ajax({
          type: "POST",
          url: window.location.href,
          data: {"tekst": localStorage.getItem("comment" + i), "autor":  localStorage.getItem("author" + i), 
          "autori_id": localStorage.getItem("id" + i)},
          success: function () {
            console.log("Laadisin üles kommentaari nr: " + offlineCounter + ". Sisu: " + localStorage.getItem("comment" + i));
            localStorage.removeItem("comment" + i);
            localStorage.removeItem("author" + i)
            localStorage.removeItem("id" + i)
          }
        });
      }
      $("#lisa_kommentaar").append('<p id="Lokaalse_info">Connection restored, comments uploaded./Ühendus taastatud, kommentaarid üles laetud.</p>');
      setTimeout(function(){
        $(".Lokaalse_info").fadeOut("slow");
      },5000);
      offlineCounter = 0;
    }
  });

  var submitComment = function (e) {
    Offline.check();
    console.log(Offline.state);
    if (Offline.state == 'down') {
        console.log("lisan lokaalselt");
      e.preventDefault();
      var comment = $("#kommentaar").val();
       var autor = $("#autor").val();
        var id = $("#autori_id").val();
      if (comment.length > 0) {
        localStorage.setItem("comment" + offlineCounter, comment);
         localStorage.setItem("author" + offlineCounter, autor);
          localStorage.setItem("id" + offlineCounter, id);
        $("#kommentaar").val("");
        console.log("Salvestasin kommentaari nr: " + offlineCounter + ". Sisu: " + comment);
        console.log("Salvestasin kommentaari nr: " + offlineCounter + ". Autor: " + autor);
        console.log("Salvestasin kommentaari nr: " + offlineCounter + ". Autori_id: " + id);
        offlineCounter += 1;
        $("#lisa_kommentaar").append('<p class="Lokaalselt_salvestatud">You are offline, comment saved in local storage.</p>');
        setTimeout(function(){
          $(".Lokaalselt_salvestatud").fadeOut("slow");
        },5000);
      }
    }
  };
  $("#kommentaari_lisamine").on('submit', submitComment);

});