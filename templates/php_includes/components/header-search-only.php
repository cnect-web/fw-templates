<header class="general-header clearfix">
<?php
if ($logged) {
  includeWithParams("components/account-info.php", $logged);
} else {
  echo "not logged";
}
?>  
    

  
<?php
  include("navigation-search-only.php");
?>
  
<div class="new-item">
  <button class="create-new"><i class="fas fa-pencil-alt"></i><span class="sr-only">Create new item</span></button>
</div> 
  
</header>