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
  <a href="base-create-new.php" class="create-new"><i class="fas fa-pencil-alt"></i><span class="no-display--sm">Add / Edit a publication...</span></a>
</div> 
  
</header>