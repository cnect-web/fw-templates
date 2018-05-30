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