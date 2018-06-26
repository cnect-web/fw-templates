<?php 
  $class = "";
  $nbNotifications = 0; // notifications not yet ready
  $list = false;

  if ($nbNotifications !== 0 ) {
    $class .= " account-info--notification";
  }
  if ($list) {
    $class .= " account-info--list";
  }
  if ($nbNotifications == 0 && !$list ) {
    $class .= " account-info--menu-only";
  }
?>

<div class="account-info <?php echo $class; ?>">
  <a href="base-user-settings.php" class="account-info__wrapper">
  <img src="<?php echo $accountPicture; ?>" alt="<?php echo $accountName; ?>">
  
  <div class="account-info__username no-display--sm">
    <?php echo $accountName; ?>
  </div>
  
  <div class="account-info__trigger-icon">  
    <span class="no-display--sm">
      <i class="fas fa-sort-down"></i>
    </span>
    <span class="no-display--md">
      <i class="fas fa-ellipsis-v"></i>
    </span>
  </div>
  </a>
  
  <div class="account-info__menu account-info__dropdown">
    <ul>
      <li><a href="base-user-settings.php"><i class="fas fa-edit"></i> edit profile</a></li>
      <li><a href="base-user-settings.php"><i class="far fa-address-book"></i> manage network</a></li>
      <li><a href="base-user-settings.php"><i class="fas fa-sign-out-alt"></i> logout</a></li>
    </ul>
  </div>

  <!--<div class="account-info__notifications">
    <a href="#" class="account-info__notifications-nr"><span class="sr-only">notifications :</span>99</a>
  </div>-->
  
</div>