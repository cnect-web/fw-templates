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
<a href="#main-content" class="visually-hidden focusable skip-link">
  Skip to main content
</a>  
  
<div class="general-container">
<?php include("components/logo-area.php"); ?>
<?php includeWithParams("components/header.php", array(
  'logged'=>array('accountName'=>'Richard Phillips Feynman', 'nbNotifications'=>'7', 'list'=>true, 'accountPicture' => 'tmp_resources/accountPicture.jpg')
)); ?>

<main class="form-wrapper">
  
  <h2>Privacy settings</h2>
  
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus volutpat libero sapien, id lobortis neque lobortis vel. Nam ornare congue felis, at pharetra dolor feugiat ut.</p>

<form>
  
  <div class="form__block form__block--onecol form__block--ticks">
  <p class="form__fake-label">Allow people to find you based on:</p>
  
  <div class="form__block--toggle">
  <input type="checkbox" name="checkbox" id="checkbox_id1" value="value">
  <label for="checkbox_id1"><span class="onoffswitch-inner"></span> <span class="label-text">Your name</span></label>
  </div> 
  
  <div class="form__block--toggle">
  <input type="checkbox" name="checkbox" id="checkbox_id2" value="value">
  <label for="checkbox_id2"><span class="onoffswitch-inner"></span> <span class="label-text">Your location</span></label>
  </div> 
  
  <div class="form__block--toggle">
  <input type="checkbox" name="checkbox" id="checkbox_id3" value="value">
  <label for="checkbox_id3"><span class="onoffswitch-inner"></span> <span class="label-text">Your position or affiliation</span></label>
  </div> 
    
  <div class="form__block--toggle">
  <input type="checkbox" name="checkbox" id="checkbox_id4" value="value">
  <label for="checkbox_id4"><span class="onoffswitch-inner"></span> <span class="label-text">Your email</span></label>
  </div> 
    
  <div class="form__block--toggle">
  <input type="checkbox" name="checkbox" id="checkbox_id5" value="value">
  <label for="checkbox_id5"><span class="onoffswitch-inner"></span> <span class="label-text">Your network</span></label>
  </div> 
    
  <p class="form__fake-label">Allow people to perform the following:</p>
    
  <div class="form__block--toggle">
  <input type="checkbox" name="checkbox" id="checkbox_id6" value="value">
  <label for="checkbox_id6"><span class="onoffswitch-inner"></span> <span class="label-text">Contact you</span></label>
  </div> 
    
  <div class="form__block--toggle">
  <input type="checkbox" name="checkbox" id="checkbox_id7" value="value">
  <label for="checkbox_id7"><span class="onoffswitch-inner"></span> <span class="label-text">Invite you to groups</span></label>
  </div> 
    
  <div class="form__block--toggle">
  <input type="checkbox" name="checkbox" id="checkbox_id8" value="value">
  <label for="checkbox_id8"><span class="onoffswitch-inner"></span> <span class="label-text">Invite you to events</span></label>
  </div> 
  
</div>
  
  <div class="btn-list--center extra-space--top">
    <input type="submit" class="btn btn--green btn--large" value="Confirm" id="submit_interests">
    <a href="registration_form_05.php" class="btn btn--grey btn--large">Skip to social network settings</a>
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
  
</body>
</html>