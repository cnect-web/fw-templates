<<<<<<< HEAD
<header class="general-header clearfix">
<?php
if ($logged) {
  includeWithParams("components/account-info.php", $logged);
} else {
  echo "not logged";
}
?>  
    

  
<?php
  include("navigation.php");
?>
  
<div class="new-item">
  <button class="create-new"><i class="fas fa-pencil-alt"></i><span class="sr-only">Create new item</span></button>
</div> 
  
=======
<header class="general-header clearfix">
<?php
if ($logged) {
  includeWithParams("components/account-info.php", $logged);
} else {
  echo "not logged";
}
?>  
    

  
<?php
  include("navigation.php");
?>
  
<div class="new-item">
  <button class="create-new"><i class="fas fa-pencil-alt"></i><span class="sr-only">Create new item</span></button>
</div> 
  
>>>>>>> d8775734bd7c5fc91f87c18da270f277c10a52e0
</header>