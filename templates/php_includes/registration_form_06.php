<?php 
function includeWithParams($fileName, $variablesArray) {
   extract($variablesArray);
   include($fileName);
}
?>
<!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Discussion ::: FunkyWave Php splitted Theme</title>
  
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
  <script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>
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
  
<body class="not-signed">
<a href="#main-content" class="visually-hidden focusable skip-link">
  Skip to main content
</a>  
  
<div class="general-container">
<?php include("components/logo-area.php"); ?>
<?php includeWithParams("components/header_empty.php", array(
  'logged'=>false, 'ctaJoin'=>false, 'ctaSignIn'=>true )); ?>

<main>
  
  <h2>About me</h2>
  
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus volutpat libero sapien, id lobortis neque lobortis vel. Nam ornare congue felis, at pharetra dolor feugiat ut.</p>

<form>
  
  <div class="form__block form__block--file">
    
    <p class="form__fake-label">Upload profile picture</p>
    
    <input type="file" name="file-7[]" id="file-7" class="form__input--file" data-multiple-caption="{count} files selected" accept=".jpg, .jpeg, .jpe, .png" />
    <label for="file-7"><span class="form__input--selected"></span> <span class="form__label--file"><i class="fas fa-upload"></i> Choose a file&hellip;</span></label>
    
  </div>
  
    <div class="form__block form__block--file">
    
    <p class="form__fake-label">Upload CV (in PDF format)</p>
    
      <input type="file" name="file-1[]" id="file-1" class="form__input--file" data-multiple-caption="{count} files selected" accept=".pdf" />
      <label for="file-1"><span class="form__input--selected"></span> <span class="form__label--file"><i class="fas fa-upload"></i> Choose a file&hellip;</span></label>
      
    </div>
  
  <div class="form__block form__block--text">
  <label for="field-ID-1" >
    Short description</label>
    <textarea name="field-name-1" id="field-ID-1" class="form__input form__input--text" placeholder=""></textarea>
</div>
  
  
  
  <div class="btn-list--center extra-space--top">
    <input type="submit" class="btn btn--green btn--large" value="Confirm" id="submit_interests">
  </div>
  
</form>

</main>
  
<?php include("components/footer.php"); ?>
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
  
  <script src="../../js/custom-file-input.js"></script>
  
</body>
</html>