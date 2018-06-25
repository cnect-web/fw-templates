<header class="general-header clearfix">
<?php
if ($logged) {
  includeWithParams("components/account-info.php", $logged);
} else {
  
  if($ctaJoin || $ctaSignIn){
    
    echo "<div class='cta--wrapper'>";
  
    if($ctaJoin){
      echo '<a class="cta--sidebar cta--join">
        <h3 class="no-display--sm">New to FuturiumLab?</h3> 
        <p>Sign up now <span class="no-display--sm">to get your own personalised newsfeed!</span></p>
      </a>';
    }

    if($ctaSignIn){
      echo '<a class="cta--sidebar cta--signin">
      <h3 class="no-display--sm">Have an account?</h3>
      <p>Log in</p>

      </a>';  
    }
    
    echo "</div>";
    
  }
}
?>  
    

  
<?php
  //if ($logged) {
    include("navigation_empty.php");
  //}
?>
  
<div class="new-item">
  <button class="create-new"><i class="fas fa-pencil-alt"></i><span class="sr-only">Create new item</span></button>
</div> 
  
</header>