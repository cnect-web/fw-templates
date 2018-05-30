<main class="newsfeed clearfix">
<article class="newsfeed__item newsfeed__item--detailed newsfeed__item--discussion">
  <header>
<h2><a href="#"><?php echo $title; ?></a></h2>

<?php includeWithParams("components/profile-shortinfo.php", $postInfo); ?>

<img src="tmp_resources/cover01.jpg" class="newsfeed__item__cover responsive" alt="flags">
    
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
  include("components/comments.php");
?>

</article>
</main>
