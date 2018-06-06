<<<<<<< HEAD
<?php 
  if($groupFullName != "") {
    $wrapperClass = "post-info--group";
?>
<div class="post-info <?php echo $wrapperClass ?> clearfix">
  
  <div class="post-info__ilustration">
    <a href="#" class="post-info__link post-info__link--account">
      <img src="<?php echo $authorPics; ?>" alt="<?php echo $authorFullName; ?>" class="post-info__picture post-info__picture--account responsive">
    </a>
    <a href="#" class="post-info__link post-info__link--group">
      <img src="<?php echo $groupPics; ?>" alt="<?php echo $groupFullName ?>" class="post-info__picture post-info__picture--group responsive">
    </a>
  </div>

  <div class="post-info__details">
    <h4 class="post-info__author">by <a href="#" class="post-info__link post-info__account-link"><?php echo $authorFullName; ?></a></h4>
    <p class="post-info__metadata">posted 18 mins ago in <a href="#" class="post-info__link post-info__group-link"><?php echo $groupFullName ?></a> </p>
  </div>
  
</div>
<?php
    } else {
    $wrapperClass = "post-info--no-group";
?>

<div class="post-info <?php echo $wrapperClass ?>">  
  <div class="post-info__ilustration">
    <a href="#" class="post-info__link post-info__link--account">
      <img src="<?php echo $authorPics; ?>" alt="<?php echo $authorFullName; ?>" class="post-info__picture post-info__picture--account responsive">
    </a>
  </div>
  
  <div class="post-info__details">
    <h4 class="post-info__author">by <a href="#" class="post-info__link post-info__account-link"><?php echo $authorFullName; ?></a></h4>
    <p class="post-info__metadata">posted 18 mins ago</p>
  </div>
  
</div>

<?php
  }
=======
<?php 
 if(isset($groupFullName) && $groupFullName != "" ) {
    $wrapperClass = "post-info--group";
?>
<div class="post-info <?php echo $wrapperClass ?> clearfix">
  
  <div class="post-info__ilustration">
    <a href="<?php echo $authorProfileURL; ?>" class="post-info__link post-info__link--account">
      <img src="<?php echo $authorPics; ?>" alt="<?php echo $authorFullName; ?>" class="post-info__picture post-info__picture--account responsive">
    </a>
      
    
    <a href="#" class="post-info__link post-info__link--group">
      <img src="<?php echo $groupPics; ?>" alt="<?php echo $groupFullName ?>" class="post-info__picture post-info__picture--group responsive">
    </a>
    

 
  </div>

  <div class="post-info__details">
    <h4 class="post-info__author">by <a href="<?php echo $authorProfileURL; ?>" class="post-info__link post-info__account-link"><?php echo $authorFullName; ?></a></h4>
    <p class="post-info__metadata">posted 18 mins ago in <a href="<?php echo $groupURL ?>" class="post-info__link post-info__group-link"><?php echo $groupFullName ?></a> </p>
  </div>
  
</div>
<?php
    } else {
    $wrapperClass = "post-info--no-group";
?>

<div class="post-info <?php echo $wrapperClass ?>">  
  <div class="post-info__ilustration">
    <a href="<?php echo $authorProfileURL; ?>" class="post-info__link post-info__link--account">
      <img src="<?php echo $authorPics; ?>" alt="<?php echo $authorFullName; ?>" class="post-info__picture post-info__picture--account responsive">
    </a>
  </div>
  
  <div class="post-info__details">
    <h4 class="post-info__author">by <a href="<?php echo $authorProfileURL; ?>" class="post-info__link post-info__account-link"><?php echo $authorFullName; ?></a></h4>
    <p class="post-info__metadata">posted 18 mins ago</p>
  </div>
  
</div>

<?php
  }
>>>>>>> d8775734bd7c5fc91f87c18da270f277c10a52e0
?>