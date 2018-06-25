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
<?php includeWithParams("components/header_empty.php", array(
  'logged'=>false, 'ctaJoin'=>false, 'ctaSignIn'=>true )); ?>

<main class="form-wrapper">
  
  <h2>My Profile</h2>
  <h3>Interests</h3>
  
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus volutpat libero sapien, id lobortis neque lobortis vel. Nam ornare congue felis, at pharetra dolor feugiat ut.</p>

<form>
  
  <!-- proposition based on most popular tags, could be refined with the affiliation / location ? -->
  
  <h4>Suggestions</h4>
  
  <div class="form__block form__block--twocol form__block--ticks">
  <div class="form__block--checkbox">
  <input type="checkbox" name="checkbox" id="checkbox_id1" value="value" checked>
  <label for="checkbox_id1"><span class="onoffswitch-inner"></span> <span class="label-text">Proposition 01</span></label>
  </div>  
    
  <div class="form__block--checkbox">
  <input type="checkbox" name="checkbox" id="checkbox_id2" value="value" checked>
  <label for="checkbox_id2"><span class="onoffswitch-inner"></span> <span class="label-text">Proposition with a waaaay longer text 02</span></label>
  </div>
  
  <div class="form__block--checkbox">
  <input type="checkbox" name="checkbox" id="checkbox_id3" value="value">
  <label for="checkbox_id3"><span class="onoffswitch-inner"></span> <span class="label-text">Another proposition with a long label 03</span></label>
  </div>  
  
  <div class="form__block--checkbox">
  <input type="checkbox" name="checkbox" id="checkbox_id4" value="value">
  <label for="checkbox_id4"><span class="onoffswitch-inner"></span> <span class="label-text">Proposition 04</span></label>
  </div>    
  
  <div class="form__block--checkbox">
  <input type="checkbox" name="checkbox" id="checkbox_id5" value="value">
  <label for="checkbox_id5"><span class="onoffswitch-inner"></span> <span class="label-text">Proposition 05</span></label>
  </div>  
  
  <div class="form__block--checkbox">
  <input type="checkbox" name="checkbox" id="checkbox_id6" value="value">
  <label for="checkbox_id6"><span class="onoffswitch-inner"></span> <span class="label-text">Proposition 06</span></label>
  </div>    
</div> 
  
<div class="form__block form__block--onecol btn-list--right">  
  <button class="btn btn--blue">show more suggestions</button>
</div>
  
 <div class="form__block form__block--text">
  <label for="field-ID-3" required>
    Add any interest </label>
  <input type="text" name="field-name-3" id="field-ID-3" class="form__input form__input--text" placeholder="">
  <p>examples: Green energy, Local democracy, Open source </p>
</div> 
  
  <div class="form__block form__block--onecol btn-list--right">  
  <button class="btn btn--blue"><i class="fas fa-plus"></i> Add</button>
</div>
  
  <h4>Your selection</h4>
  <ul class="list list--taxonomy list--taxonomy">
      <li class="list__item list__item--tag tag--deletable tag">
    Proposition 01 <button type="button" class="close" data-dismiss="modal" aria-label="Remove">
            <span aria-hidden="true">&times;</span>
          </button>
  </li>
    <li class="list__item list__item--tag tag--deletable tag">
    Proposition with a waaaay longer text 02 <button type="button" class="close" data-dismiss="modal" aria-label="Remove">
            <span aria-hidden="true">×</span>
          </button>
  </li>
    <li class="list__item list__item--tag tag--deletable tag">
    Lorem <button type="button" class="close" data-dismiss="modal" aria-label="Remove">
            <span aria-hidden="true">×</span>
          </button>
  </li>
    <li class="list__item list__item--tag tag--deletable tag">
    Lorem <button type="button" class="close" data-dismiss="modal" aria-label="Remove">
            <span aria-hidden="true">×</span>
          </button>
  </li>
    <li class="list__item list__item--tag tag--deletable tag">
    Lorem <button type="button" class="close" data-dismiss="modal" aria-label="Remove">
            <span aria-hidden="true">×</span>
          </button>
  </li>
    <li class="list__item list__item--tag tag--deletable tag">
    Lorem <button type="button" class="close" data-dismiss="modal" aria-label="Remove">
            <span aria-hidden="true">×</span>
          </button>
  </li>
    <li class="list__item list__item--tag tag--deletable tag">
    Lorem <button type="button" class="close" data-dismiss="modal" aria-label="Remove">
            <span aria-hidden="true">×</span>
          </button>
  </li>
  </ul>
  
    <div class="btn-list--center extra-space--top">
    <input type="submit" class="btn btn--green btn--large" value="Confirm" id="submit_interests">
    <a href="registration_form_04.php" class="btn btn--grey btn--large">Skip to privacy settings</a>
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