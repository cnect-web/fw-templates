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

<main class="form-wrapper">
  
  <h2>My profile</h2>
  <h3>Affiliation</h3>
  
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus volutpat libero sapien, id lobortis neque lobortis vel. Nam ornare congue felis, at pharetra dolor feugiat ut.</p>

<form class="form">
  
<div class="form__block form__block--text">
  <label for="field-ID-1" required>
    Role </label>
  <input type="text" name="field-name-1" id="field-ID-1" class="form__input form__input--text" placeholder="" required>
</div>
  
<div class="form__block form__block--text">
  <label for="field-ID-2" required>
    Organisation </label>
  <input type="text" name="field-name-2" id="field-ID-2" class="form__input form__input--text" placeholder="" required>
</div>
  


<div class="form__block form__block--onecol form__block--submit btn-list--right">  
  <button class="btn btn--blue"><i class="fas fa-plus"></i> add another affiliation</button>
  <input type="submit" value="save" id="save_loc" class="btn btn--green">
</div>
  
</form>
  
  <h3 class="extra-space--top">Location</h3>
  
  <p>Aliquam rutrum nulla sed tellus fringilla aliquet. Fusce et odio nec nisl dignissim sodales eget tincidunt mauris. Vivamus ac varius odio, sed mollis nisl. Suspendisse potenti. Phasellus ac velit vitae mauris laoreet rhoncus placerat eu enim. In non lectus mauris.</p>

<form class="form">
  
<div class="form__block form__block--text">
  <label for="field-ID-3">
    City </label>
  <input type="text" name="field-name-3" id="field-ID-3" class="form__input form__input--text" placeholder="">
</div>

<div class="form__block form__block--onecol form__block--submit btn-list--right">  
  <button class="btn btn--blue"><i class="fas fa-plus"></i> add another location</button>
  <input type="submit" value="save" id="save_loc" class="btn btn--green">
</div>
  
</form>
  
  <div class="btn-list--center extra-space--top">
    <a href="registration_form_03.php" class="btn btn--grey btn-large">Skip to interests settings</a>
  </div>
  
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
  
</body>
</html>