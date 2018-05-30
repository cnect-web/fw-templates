<?php 
 if(isset($groupFullName) && $groupFullName != "" ) {
    $wrapperClass = "profile-shortinfo--group";
?>
<div class="profile-shortinfo <?php echo $wrapperClass ?> clearfix">
  
  <div class="profile-shortinfo__ilustration">
    <a href="<?php echo $authorProfileURL; ?>" class="profile-shortinfo__link profile-shortinfo__link--account">
      <img src="<?php echo $authorPics; ?>" alt="<?php echo $authorFullName; ?>" class="profile-shortinfo__picture profile-shortinfo__picture--account responsive">
    </a>
      
    
    <a href="#" class="profile-shortinfo__link profile-shortinfo__link--group">
      <img src="<?php echo $groupPics; ?>" alt="<?php echo $groupFullName ?>" class="profile-shortinfo__picture profile-shortinfo__picture--group responsive">
    </a>
    

 
  </div>

  <div class="profile-shortinfo__details">
    <h4 class="profile-shortinfo__author">by <a href="<?php echo $authorProfileURL; ?>" class="profile-shortinfo__link profile-shortinfo__account-link"><?php echo $authorFullName; ?></a></h4>
    <p class="profile-shortinfo__metadata">posted 18 mins ago in <a href="<?php echo $groupURL ?>" class="profile-shortinfo__link profile-shortinfo__group-link"><?php echo $groupFullName ?></a> </p>
  </div>
  
</div>
<?php
    } else {
    $wrapperClass = "profile-shortinfo--no-group";
?>

<div class="profile-shortinfo <?php echo $wrapperClass ?>">  
  <div class="profile-shortinfo__ilustration">
    <a href="<?php echo $authorProfileURL; ?>" class="profile-shortinfo__link profile-shortinfo__link--account">
      <img src="<?php echo $authorPics; ?>" alt="<?php echo $authorFullName; ?>" class="profile-shortinfo__picture profile-shortinfo__picture--account responsive">
    </a>
  </div>
  
  <div class="profile-shortinfo__details">
    <h4 class="profile-shortinfo__author">by <a href="<?php echo $authorProfileURL; ?>" class="profile-shortinfo__link profile-shortinfo__account-link"><?php echo $authorFullName; ?></a></h4>
    <p class="profile-shortinfo__metadata">posted 18 mins ago</p>
  </div>
  
</div>

<?php
  }
?>