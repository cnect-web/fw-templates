<<<<<<< HEAD
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
  <title>Green energy in Europe group - NGF</title>
  
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

<?php includeWithParams("components/list-of-users.php", array(
  'title'=> 'Green Energy in transport community',
  'tags' => array("a" => "Lorem", "b" => "ipsum sit dorlor", "c" => "Etiam", "d" => "Nulla tindunt saius"),
  'listingItem' => array("type" => "user", "hasadmin" => $_GET['hasadmin'], "action" => "add to list", "listing" => [
    ["profileFullName" => "Carmen Hall", "meta01" => "Head of Cabinet of Violeta Bulc at DG move", "meta02" => "Brussels, BE"], 
    ["profileFullName" => "Tyrone Lawson", "meta01" => "Deputy Head of Cabinet of Violeta Bulc at DG move", "meta02" => "Paris, FR"], 
    ["profileFullName" => "Flenn Ferguson", "meta01" => "Development policy Advisor at DG CNECT", "meta02" => "Brussels, BE"], 
    ["profileFullName" => "Albert Knight", "meta01" => "Policy Researcher at RDS", "meta02" => "Den Haag, NL"], 
    ["profileFullName" => "Frederick Garcia", "meta01" => "Public Affairs Expert  at Weber Shandwick Company", "meta02" => "Brussels, BE"], 
    ["profileFullName" => "Carmen Hopkins", "meta01" => ["Head of Communication Unit at DG Regio", "Communication Advisor at the European Comittee of the Regions"], "meta02" => ["Brussels, BE", "Paris, FR"] ]
  ])
    
  )
); ?> 
  
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
=======
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
  <title>Green energy in Europe group - NGF</title>
  
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

<?php includeWithParams("components/list-of-users.php", array(
  'title'=> 'Green Energy in transport community',
  'tags' => array("a" => "Lorem", "b" => "ipsum sit dorlor", "c" => "Etiam", "d" => "Nulla tindunt saius"),
  'listingItem' => array("type" => "user", "hasadmin" => $_GET['hasadmin'], "action" => "add to list", "listing" => [
    ["profileFullName" => "Carmen Hall", "meta01" => "Head of Cabinet of Violeta Bulc at DG move", "meta02" => "Brussels, BE"], 
    ["profileFullName" => "Tyrone Lawson", "meta01" => "Deputy Head of Cabinet of Violeta Bulc at DG move", "meta02" => "Paris, FR"], 
    ["profileFullName" => "Flenn Ferguson", "meta01" => "Development policy Advisor at DG CNECT", "meta02" => "Brussels, BE"], 
    ["profileFullName" => "Albert Knight", "meta01" => "Policy Researcher at RDS", "meta02" => "Den Haag, NL"], 
    ["profileFullName" => "Frederick Garcia", "meta01" => "Public Affairs Expert  at Weber Shandwick Company", "meta02" => "Brussels, BE"], 
    ["profileFullName" => "Carmen Hopkins", "meta01" => ["Head of Communication Unit at DG Regio", "Communication Advisor at the European Comittee of the Regions"], "meta02" => ["Brussels, BE", "Paris, FR"] ]
  ])
    
  )
); ?> 
  
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
>>>>>>> d8775734bd7c5fc91f87c18da270f277c10a52e0
</html>