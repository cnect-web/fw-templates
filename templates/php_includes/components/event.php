<main>
<div>
<article class="newsfeed__item newsfeed__item--detailed newsfeed__item--ngf-event">
  <header>
<h2><a href="#"><?php echo $title; ?></a></h2>

<?php includeWithParams("components/profile-shortinfo.php", $postInfo); ?>
    
<div class="event-data">
    <h3><i class="fas fa-calendar-alt"></i> Date and time</h3>
    <p>From the 2nd July to the 6th July</p>
      
    <h3><i class="fas fa-map-marker-alt"></i> Location</h3>
    <p>ISCTE - INSTITUTO UNIVERSITÁRIO DE LISBOA<br>
Av.ª das Forças Armadas<br>
1649-026 Lisboa</p>  
  
  <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=-9.37236785888672%2C38.537424323873275%2C-8.91918182373047%2C38.78727491420832&amp;layer=mapnik" style="border: 1px solid black"></iframe><br/><small><a href="https://www.openstreetmap.org/#map=12/38.6625/-9.1458" target="_blank">display bigger map</a></small>
  
    </div>        
    
</header>
  
<div>  
  
  <h3>Description</h3>
  
<?php
  include("tmp_resources/lipsum.php");
?>
</div>   
  
  <h3>Speakers</h3>
  <ul>
    <li><a href="">Darryl Garza</a></li>
    <li><a href="">Sandra Collins</a></li>
    <li><a href="">Audrey Mason</a></li>
    <li><a href="">Christian Davidson</a></li>
  </ul>
  
  <div class="btn-list--center extra-space--top">
    <a href="#" class="btn btn--blue btn--large">register</a>
  </div>
  
  
<?php
  include("components/related-events.php");
?>
  
<?php
  include("components/attachment.php");
?>
  
<?php
  include("components/reference.php");
?>
  
<?php
  // include("components/appreciation.php");
?>
  
<?php
  include("components/social-share.php");
?>
  
<?php
  $arrayOfTags = array("tags" => $tags);
  includeWithParams("components/taxonomy-list.php", $arrayOfTags);
?>
  
<?php
  include("components/related-content.php");
?>
  
<?php
  $infos = array("postInfo" => $postInfo);
  includeWithParams("components/comments.php", $infos);
?>

</article>
</div>
</main>
