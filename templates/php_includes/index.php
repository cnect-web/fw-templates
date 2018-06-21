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
  <title>Discussion ::: FunkyWave Php splitted Theme</title>
  
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>
  
<body>

<div class="pre-banner">
</div>  
  
<div class="general-container--card clearfix background--talk">  
  
<header>
  <img class="logo" alt="Futurium Lab Logo" src="../../images/logo_futurium_lab.svg" width="">
</header>

  <main>

  <div class="form-wrapper">  
    
    <form class="form">
  
<div class="form__block form__block--text">
  <label for="field-ID-1" required>
    First name <span class="form--required text-danger" title="This field is required."><span class="sr-only">Mandatory field</span>*</span></label>
  <input type="text" name="field-name-1" id="field-ID-1" class="form__input form__input--text" placeholder="" required>
</div>
  
<div class="form__block form__block--text">
  <label for="field-ID-2" required>Password <span class="form--required text-danger" title="This field is required."><span class="sr-only">Mandatory field</span>*</span></label>
  <input type="password" name="field-name-2" id="field-ID-2" class="form__input form__input--text" placeholder="" required>
</div>
      
      <div class="form__block form__block--onecol form__block--submit btn-list--right">  
  <input type="submit" value="submit" class="btn btn--green">
</div>
      
    </form>

  <h3>Not registred yet ?</h3>
    
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ullamcorper faucibus ipsum, quis lobortis justo. Donec blandit nunc sed elementum euismod. Nulla venenatis nec odio vitae tincidunt. Donec et enim non orci posuere ultrices quis sit amet mauris. Nunc blandit sapien quis tincidunt imperdiet. </p>
    
  <div class="btn-list--center">
    <a href="#" class="btn btn--blue btn--large">Register</a>
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