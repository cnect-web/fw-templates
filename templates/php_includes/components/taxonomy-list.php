<div class="sub-section sub-section--related-taxonomy">
  <?php 
  if ( isset($title) ) {
    echo "<h3>" . $title . "</h3>"; 
  } else {
    echo "<h3>Related topics</h3>";  
  }
  ?>
  <ul class="list list--taxonomy">
    <?php
    foreach($tags as $tag) {
    ?>
      <li class="list__item list__item--tag">
        <a href="#" class="tag tag__link"><?php echo $tag; ?></a>
      </li>
    <?php 
    }
    ?>
  </ul>
</div>