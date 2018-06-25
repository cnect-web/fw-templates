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
  
<article class="newsfeed__item newsfeed__item--teaser newsfeed__item--unpublished" style="margin-top: -32px;">
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
  
<article class="newsfeed__item newsfeed__item--teaser newsfeed__item--discussion" style="margin-top: -28px;">
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
  
</div>