<main>
<div>
<div>
<div>
  
<div class="newsfeed">
  
<article class="newsfeed__item newsfeed__item--teaser newsfeed__item--discussion newsfeed__item--pinned">
  <header>
<h2><a href="#"><?php echo $postTitle; ?></a><span class="newsfeed__item__state sideinfo"> [ pinned ]</span></h2>

<?php includeWithParams("components/profile-shortinfo.php", $postInfo); ?>

<img src="tmp_resources/cover01.jpg" class="newsfeed__item__cover responsive" alt="flags">    
    
</header>
  
<div>  
<?php
  include("tmp_resources/lipsum-short.php");
?>
</div>
  
<div class="btn-list btn-list--right">
  <a href="#" class="btn btn--green"><span class="sr-only">read</span> more<span class="sr-only">about <?php echo $postTitle; ?></span></a>
</div>
  
</article>
  
<article class="newsfeed__item newsfeed__item--teaser newsfeed__item--unpublished">
  <header>
<h2><a href="#"><?php echo $postTitle; ?></a><span class="newsfeed__item__state sideinfo"> [ ! draft ]</span></h2>

<?php includeWithParams("components/profile-shortinfo.php", $postInfo); ?>

<img src="tmp_resources/cover01.jpg" class="newsfeed__item__cover responsive" alt="flags">    
    
</header>
  
<div>  
<?php
  include("tmp_resources/lipsum-short.php");
?>
</div>
  
<div class="btn-list btn-list--right">
  <a href="#" class="btn btn--green"><span class="sr-only">read</span> more<span class="sr-only">about <?php echo $postTitle; ?></span></a>
</div>

</article>
  
<article class="newsfeed__item newsfeed__item--teaser newsfeed__item--ngf-discussion">
  <header>
<h2><a href="#"><?php echo $postTitle; ?></a></h2>

<?php includeWithParams("components/profile-shortinfo.php", $postInfo); ?>

<img src="tmp_resources/cover01.jpg" class="newsfeed__item__cover responsive" alt="flags">    
    
</header>

<div>  
<?php
  include("tmp_resources/lipsum-short.php");
?>
</div>
  
<div class="btn-list btn-list--right">
  <a href="#" class="btn btn--blue">reply</a>
  <a href="#" class="btn btn--green"><span class="sr-only">read</span> more<span class="sr-only">about <?php echo $postTitle; ?></span></a>
</div>

</article>
  
  
<article class="newsfeed__item newsfeed__item--teaser newsfeed__item--ngf-event">
  <header>
<h2><a href="#"><?php echo $postTitle; ?></a></h2>

<?php includeWithParams("components/profile-shortinfo.php", $postInfo); ?>
    
    <div class="event-data">
    <h3><i class="fas fa-calendar-alt"></i> Date and time</h3>
    <p>From the 2nd July to the 6th July</p>
      
    <h3><i class="fas fa-map-marker-alt"></i> Location</h3>
    <p>ISCTE - INSTITUTO UNIVERSITÁRIO DE LISBOA<br>
Av.ª das Forças Armadas<br>
1649-026 Lisboa</p>  
    </div>    
    
</header>

<div>  
<?php
  include("tmp_resources/lipsum-short.php");
?>
</div>
  
<div class="btn-list btn-list--right">
  <a href="#" class="btn btn--blue">interested</a>
  <a href="#" class="btn btn--green"><span class="sr-only">read</span> more<span class="sr-only">about <?php echo $postTitle; ?></span></a>
</div>

</article>
  
</div>
  
</div>
  
</div>

</div>
  
</main>
