<?php 
$x=2;

foreach ($listing as $item) {
  if($x < 10) {
    $pictureURL = "tmp_resources/". $type ."Picture0". $x .".jpg";
  } else {
    $pictureURL = "tmp_resources/". $type ."Picture". $x .".jpg";
  }
  
?>

<div class="profile-shortinfo profile-shortinfo--no-group clearfix">  
  
  <div class="profile-shortinfo__ilustration">
    <a href="#" class="profile-shortinfo__link profile-shortinfo__link--account">
      <img src="<?php echo $pictureURL ?>" alt="<?php echo $item["profileFullName"] ?>" class="profile-shortinfo__picture profile-shortinfo__picture--account responsive">
    </a>
  </div>
  
  <div class="profile-shortinfo__details">
    
    <?php
    if(isset($subGroupURL)){
      $link = $subGroupURL;
    } else {
      $link = "#";
    }
    ?>
    
    <h4 class="profile-shortinfo__author"><a href="<?php echo $link; ?>" class="profile-shortinfo__link profile-shortinfo__account-link"><?php echo $item["profileFullName"] ?>
      <?php
      if($x == 2 && $hasadmin == true) {
      echo '<span class="newsfeed__item__state sideinfo"> [ admin ]</span>';
      }
      ?>
      </a></h4>
    <p class="profile-shortinfo__metadata">
      <?php    
      if(is_array($item["meta01"])){
        echo $item["meta01"][0] . ", " .$item["meta01"][1];
      } else {
        echo $item["meta01"];
      }  
      ?>
    <?php if(isset($item["meta02"])) { 
      if(is_array($item["meta02"])){
        echo "<br><i class='fas fa-map-marker-alt'></i> " . $item["meta02"][0] . ", <i class='fas fa-map-marker-alt'></i> " .$item["meta02"][1];
      } else {
        echo "<br><i class='fas fa-map-marker-alt'></i> " . $item["meta02"];
      }
    } ?>
    </p>
  </div>
  
  <?php if (isset($action)) { ?>
  <div class="profile-shortinfo__action">
    <a href="#" class="profile-shortinfo__action--<?php echo str_replace(' ', '', $action); ?>">
      <span class="sr-only"><?php echo $action; ?></span>
    </a>
  </div>
  <?php } ?>
</div>

<?php
  
   $x++;
  }
?>