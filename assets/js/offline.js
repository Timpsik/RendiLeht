var run = function(){
 if (Offline.state === 'up')
 Offline.check();
 }
 setInterval(run, 5000);
 
var offlineCounter = 0;
    console.log("Laadimisel");
$(document).ready(function() {
    console.log("Laetud");
  var $online = $('.online'),
      $offline = $('.offline');

  Offline.on('down', function () {
    console.log("NOW OFFLINE");
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
    console.log("NOW ONLINE");
    $offline.fadeOut(function () {
      $online.fadeIn();
    });
    setTimeout(function(){
      $online.fadeOut("slow");
    },5000);
    if (localStorage.comment0) {
      for (i = 0; i < offlineCounter; i++) {
        console.log("Attempting upload nr " + offlineCounter + ". Message: " + localStorage.getItem("comment" + i));
        $.ajax({
          type: "POST",
          url: window.location.href,
          data: {"tekst": localStorage.getItem("comment" + i), "autor":  localStorage.getItem("author" + i), 
          "autori_id": localStorage.getItem("id" + i)},
          success: function () {
            console.log("Uploaded comment nr " + offlineCounter + ". Message: " + localStorage.getItem("comment" + i));
            localStorage.removeItem("comment" + i);
            localStorage.removeItem("author" + i)
            localStorage.removeItem("id" + i)
          }
        });
      }
      $("#lisa_kommentaar").append('<p id="uploadedLocal">Connection restored, comments uploaded.</p>');
      setTimeout(function(){
        $("#uploadedLocal").fadeOut("slow");
      },5000);
      offlineCounter = 0;
    }
  });

  var submitComment = function (e) {
      console.log("nupp vajutatud");
    Offline.check();
    console.log("Offline kontrollitud");
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
        console.log("Saved comment nr " + offlineCounter + ". Message: " + comment);
        console.log("Saved nr " + offlineCounter + ". Message: " + autor);
        console.log("Saved  nr " + offlineCounter + ". Message: " + id);
        offlineCounter += 1;
        $("#lisa_kommentaar").append('<p class="savedLocal">You are offline, comment saved in local storage.</p>');
        setTimeout(function(){
          $(".savedLocal").fadeOut("slow");
        },5000);
      }
    }
  };
  $("#kommentaari_lisamine").on('submit', submitComment);

});