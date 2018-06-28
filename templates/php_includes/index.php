<?php 
function includeWithParams($fileName, $variablesArray) {
   extract($variablesArray);
   include($fileName);
}
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome on Futurium Lab!</title>
  
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="../../css/style.css">
  
  <!-- favicons ... -->
  <link rel="apple-touch-icon" sizes="57x57" href="apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
  <link rel="manifest" href="manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <!-- end of favicons -->
  
</head>
  
<body>

<div class="pre-banner">
</div>  
  
<div class="general-container--card clearfix background--talk">  
  
<header class="logo-wrapper--index">
  <img class="logo-cover" alt="Futurium Lab Logo" src="../../images/logo_futurium_lab.svg">
</header>

  <main>

  <div class="form-wrapper">  
    
    <form class="form" action="base_personnal_feed.php">
  
<div class="form__block form__block--text">
  <label for="field-ID-1" required>
    Login or Email <span class="form--required text-danger" title="This field is required."><span class="sr-only">Mandatory field</span>*</span></label>
  <input type="text" name="field-name-1" id="field-ID-1" class="form__input form__input--text" placeholder="" required>
</div>
  
<div class="form__block form__block--text">
  <label for="field-ID-2" required>Password <span class="form--required text-danger" title="This field is required."><span class="sr-only">Mandatory field</span>*</span></label>
  <input type="password" name="field-name-2" id="field-ID-2" class="form__input form__input--text" placeholder="" required>
</div>
  <div class="clearfix btn-list btn-list--right no-child-margins">
      <div class="opposite">
      <p><a href="#">Forgot password?</a></p>
      </div> 
  <input type="submit" value="submit" class="btn btn--green">
    </div>
      
    </form>

  <h3>Not registred yet ?</h3>
    
  <p>Have an idea for Europe?
Futuriumlab is an open platform dedicated to Europeans discussing EU matters. Please join and start discussions on this platform.
    Any topic relevant for European Union is welcome to be addressed here.</p>
<p>The name “Futurium” refers to the times ahead us. The more we engage, the more we have impact on our future.
Join us at Futuriumlab!</p>
    
  <div class="btn-list--center">
    <a href="registration_form_01.php" class="btn btn--blue btn--large">Register</a>
    </div>
<div class="extra-space--top">    
 <p class="text-center">Do you want to catch a glimpse of what's really going on here?</p>   
      <div class="btn-list--center">
    <a href="base-public-feed.php" class="btn btn--grey btn--large">Check the public feed</a>
    </div>
     </div>  
    </div>
    
  </main>
 
  
  <footer class="general-footer--card">
   <ul class="menu">
     <li><a href="">About</a></li>
     <li><a href="">Legal notice</a></li>
     <li><a href="">Cookies</a></li>
     <li><a href="">Contact on Europa</a></li>
     <li><a href="">Search on Europa</a></li>
   </ul>
  </footer>  
  
</div>
  
<!-- 
FOUT WITH A CLASS: CSS Font Loading API
https://github.com/typekit/webfontloader
-->  
<script>
WebFontConfig = {
    google: { families: [ 'Montserrat:300,400,500,700,800,900:latin', 'Raleway:300,400,500,700,800,900:latin'] },
    active: function() {
      sessionStorage.fonts = true;
    }
  };

  (function() {
    var wf = document.createElement('script');
    wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })();  
</script>  
  
</body>
</html>