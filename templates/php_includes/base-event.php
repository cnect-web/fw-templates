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

<?php includeWithParams("components/event.php", array(
  'title'=> 'Lorem ipsum sit dolor amet',
  'tags' => array("a" => "Lorem", "b" => "ipsum sit dorlor", "c" => "Etiam", "d" => "Nulla tindunt saius"),
  'postInfo' => array(
    "authorFullName" => "Christina Mattews",
    "authorProfileURL" => "http://localhost/futurium/templates/php_includes/base-user-profile.php",
    "authorPics" => "tmp_resources/userPicture01.jpg",
    "authorGuid" => 15,
    "postTime" => "18 mins ago",
    "groupFullName" => "Green Energy in transport community",
    "groupURL" => "http://localhost/futurium/templates/php_includes/base-group-profile.php",
    "groupPics" => "tmp_resources/groupPicture01.jpg",
  )
)); ?> 
  
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