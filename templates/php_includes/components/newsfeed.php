<div class="newsfeed">
  
<!-- draft and pinned maybe not relevant in all contexts -->
  
<article class="newsfeed__item newsfeed__item--teaser newsfeed__item--discussion newsfeed__item--pinned">
  <header>
<h2><a href="base-discussion.php"><?php echo $postTitle; ?></a><span class="newsfeed__item__state sideinfo"> [ pinned ]</span></h2>

<?php includeWithParams("components/profile-shortinfo.php", $postInfo); ?>

<img src="tmp_resources/cover01.jpg" class="newsfeed__item__cover responsive" alt="flags">    
    
</header>
  
<div>  
<?php
  include("tmp_resources/lipsum-short.php");
?>
</div>
  
<div class="btn-list btn-list--right">
  <a href="base-discussion.php" class="btn btn--green"><span class="sr-only">read</span> more<span class="sr-only">about <?php echo $postTitle; ?></span></a>
</div>
  
</article>
  
<article class="newsfeed__item newsfeed__item--teaser newsfeed__item--unpublished">
  <header>
<h2><a href="base-discussion.php"><?php echo $postTitle; ?></a><span class="newsfeed__item__state sideinfo"> [ ! draft ]</span></h2>

<?php includeWithParams("components/profile-shortinfo.php", $postInfo); ?>

<img src="tmp_resources/cover01.jpg" class="newsfeed__item__cover responsive" alt="flags">    
    
</header>
  
<div>  
<?php
  include("tmp_resources/lipsum-short.php");
?>
</div>
  
<div class="btn-list btn-list--right">
  <a href="base-discussion.php" class="btn btn--green"><span class="sr-only">read</span> more<span class="sr-only">about <?php echo $postTitle; ?></span></a>
</div>

</article>
  
<article class="newsfeed__item newsfeed__item--teaser newsfeed__item--ngf-discussion">
  <header>
<h2><a href="base-discussion.php"><?php echo $postTitle; ?></a></h2>

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
  
<article class="newsfeed__item newsfeed__item--teaser newsfeed__item--ngf-event">
  <header>
<h2><a href="base-discussion.php">Lorem ipsum sit dolor amet</a></h2>

<?php 
$postInfo2 = array(
    "authorFullName" => "Christina Mattews",
    "authorProfileURL" => "base-user-profile.php",
    "authorPics" => "tmp_resources/userPicture01.jpg",
    "authorGuid" => 15,
    "postTime" => "18 mins ago",
    "groupFullName" => "Green Energy in transport community",
    "groupURL" => "base-group-profile.php",
    "groupPics" => "tmp_resources/groupPicture01.jpg",
  );    
  includeWithParams("components/profile-shortinfo.php", $postInfo2); 
?>  
    
</header>
  
<div class="event-data">
    <h3><i class="fas fa-calendar-alt"></i> Date and time</h3>
    <p>From the 2nd July to the 6th July</p>
      
    <div class="event-location">
      <h3><i class="fas fa-map-marker-alt"></i> Location</h3>
      <h4>Diependal sporthal</h4>
      <p class="address" translate="no">
        <span class="address-line1">Lindeboomstraat 19</span><br>
        <span class="postal-code">3080</span>
        <span class="locality">Tervuren</span><br>
        <span class="country">Belgium</span>
      </p>
    </div>
</div>
  
<div class="btn-list btn-list--right">
  <a href="#" class="btn btn--blue">I'm interested<span class="sr-only"><?php echo $postTitle; ?></span></a>
  <a href="base-event.php" class="btn btn--green"><span class="sr-only">read</span> more<span class="sr-only">about <?php echo $postTitle; ?></span></a>
</div>

</article>
  
</div>