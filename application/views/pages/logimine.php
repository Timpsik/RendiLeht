<!DOCTYPE html>

<html lang="en">

<head>

  <link rel="stylesheet" href="<?php echo base_url('assets/css/login.css')?>"/>

</head>

<body>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : 1933669939985923,
      cookie     : true,
      xfbml      : true,
      version    : 'v2.12'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

function login(){
FB.getLoginStatus(function(r){ //check if user already authorized the app
     if(r.status === 'connected'){
            window.location.href = 'http://rendileht.epizy.com/index.php/Pages/logitud';
     }else{
        FB.login(function(response) { // opens the login dialog
                if(response.authResponse) { // check if user authorized the app
              //if (response.perms) {
                    window.location.href = 'http://rendileht.epizy.com/index.php/Pages/logitud';
            } else {
              // user is not logged in
            }
     },{scope:'email'}); //permission required by the app
 }
});
}
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

	</form>
		<fb:login-button 
			scope="public_profile,email"
			onlogin="login();">
		</fb:login-button></body>

</html>