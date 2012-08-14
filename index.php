<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Testing Facebook API</title>
    </head>
    <body>
        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
        <?php
        // put your code here
        ?>
        <h5>This is to test facebook API</h5>
        <p>You can social plugin</p>
        <div class="fb-like" data-send="false" data-layout="standard" data-width="450" data-show-faces="false" data-action="like" data-colorscheme="light"></div>
        <br/>
         <p>Since you got your soical plugin, we can put more users interaction by adding Activity Feed Plugin, etc </p>
         
     
        <p>User can use facebook login to get into the system without registration with new username and password </p>
        <p>We will save username and password from facebook into database , what about users'profiles</p>
        <p> So we can log in our application using facebook username and password. OAuth is used for authentication. It means facebook allows your application to access user information but will restrict to update user name and information..</p>
        <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            appId      : '353315594746548', // App ID
            channelUrl : 'http://apps.facebook.com/353315594746548/', // Channel File
            status     : true, // check login status
            cookie     : true, // enable cookies to allow the server to access the session
            xfbml      : true  // parse XFBML
          });
          // Additional initialization code here
        };
        // Load the SDK Asynchronously
        (function(d){
           var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
           if (d.getElementById(id)) {return;}
           js = d.createElement('script'); js.id = id; js.async = true;
           js.src = "//connect.facebook.net/en_US/all.js";
           ref.parentNode.insertBefore(js, ref);
         }(document));
         
      </script>
      
      <div class="fb-login-button">Login with Facebook</div>
    </body>
</html>
