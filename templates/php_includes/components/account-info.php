<?php 
  $class = "";
  if ($nbNotifications !== 0 ) {
    $class .= " account-info--notification";
  }
  if ($list) {
    $class .= " account-info--list";
  }
?>

<div class="account-info <?php echo $class; ?>">  

  <a href="#" class="account-info__wrapper">
  <img src="<?php echo $accountPicture; ?>" alt="<?php echo $accountName; ?>" class>
  
  <div class="account-info__username no-display--sm">
    <?php echo $accountName; ?>
  </div>
  </a>
  
  <div class="account-info__profile">
    <a href="#"><i class="icon icon--cog"></i><span class="no-display--sm">profile settings</span></a>
  </div>
  <div class="account-info__notifications">
    <a href="#" class="account-info__notifications-nr"><span class="sr-only">notifications :</span>99</a>
  </div>
  
</div>