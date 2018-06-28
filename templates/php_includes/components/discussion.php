<main>
<article class="newsfeed__item newsfeed__item--detailed newsfeed__item--ngf-discussion">
  <header>
<h2><a href="#"><?php echo $title; ?></a></h2>

<?php includeWithParams("components/profile-shortinfo.php", $postInfo); ?>

<div class="field field--name-field-ngf-cover-image field--type-entity-reference field--label-hidden field__item">    
<img src="tmp_resources/cover01.jpg" class="newsfeed__item__cover responsive" alt="flags">
</div>
<p class="newsfeed__legend-copyright">European flags | &copy; Jorisvo via <a href="http://www.thinkstockphotos.com/image/stock-photo-european-flags-in-brussels/133988283" target="_blank">Thinkstockphoto.com</a></p>
    
</header>
  
<div>  
<?php
  include("tmp_resources/lipsum.php");
?>
</div>   
  
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
</main>
