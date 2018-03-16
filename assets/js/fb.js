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
