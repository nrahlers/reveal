
<html ng-app="neverEndingWar">
    <head>
        <link rel="stylesheet" href="includes/bootstrap/css/bootstrap.css">
        
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <script>
        window.fbAsyncInit = function() {
          FB.init({
            appId      : 'your-app-id',
            xfbml      : true,
            version    : 'v2.4'
          });
        };

        (function(d, s, id){
           var js, fjs = d.getElementsByTagName(s)[0];
           if (d.getElementById(id)) {return;}
           js = d.createElement(s); js.id = id;
           js.src = "//connect.facebook.net/en_US/sdk.js";
           fjs.parentNode.insertBefore(js, fjs);
         }(document, 'script', 'facebook-jssdk'));
      </script>
        <div id="fb-root"></div>
            <script>
                (function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s); js.id = id;
                    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
            </script>
        <div id="container" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>
        <button class='pickGirl'>Vote for girl</button><button class='pickBoy'>Vote for Boy</button>
        <div class="fb-login-button" data-max-rows="1" data-size="medium" data-show-faces="false" data-auto-logout-link="false">loginto facebook</div>
        
        <script src="includes/js/jquery-2.1.4.js"></script>
        <script src="includes/js/"></script>
        <script src="http://code.highcharts.com/highcharts.js"></script>
        <script src="http://code.highcharts.com/modules/exporting.js"></script>
        <script src='includes/js/homePage.js'></script>
       
    </body>
</html>
