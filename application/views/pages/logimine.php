<!DOCTYPE html>
<html lang="et">
<head>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/login.css')?>"/>
  <title>Sisse logimine</title>
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width">

       <meta name="description" content="See leht võimaldab inimestel asju rentida ja rendile anda.">

       <meta name="keywords" content="asjade rent">
</head>
<body>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1933669939985923',
      cookie     : true,
      xfbml      : true,
      version    : 'v2.12'
    });
      
    FB.AppEvents.logPageView();   
      
  };
function checkLoginState() {
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });
}
  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
   
FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
});



</script>
	<form action="/action_page.php">
		<h3 id="mail" >E-mail:</h3> 
		<br><br>
		<input id="meil" type="text" name="meil" size="40">
		<br><br>
		<h3 id="mail" >Parool:</h3>
		<br><br>
		<input id="parool" type="password" name="parool" size="40">
		<br><br>
		<fb:login-button id="fb"
			scope="public_profile,email"
			onlogin="checkLoginState();">
		</fb:login-button>
	</form>
</body>
</html>