<div class="sub-section sub-section--attachment">
  
  <?php 
  if ( isset($title) ) {
    echo "<h3>" . $title . "</h3>"; 
  } else {
    echo "<h3>Attachment</h3>";  
  }
  ?>

  <ul class="list list--file list--attachment">
    <li class="list__item list__item--file list__item--pdf">
        
      <p class="file__info">
        <a href="#" class="file__link" title="">
          <span class="file__title">Link to a .pdf file</span>
        </a>
      </p>

      <p class="file__meta-data">
        publish_date_author
      </p>
         
    </li>
  </ul>
</div>