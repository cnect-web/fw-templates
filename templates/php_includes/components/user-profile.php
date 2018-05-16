<main class="profile profile--group clearfix">

  <header>
    
    <a href="#" class="profile__pic__link"><!-- link to full pic -->
      <img src="tmp_resources/userPicture01.jpg" class="profile__pic" alt="Christina Mattews Profile picture">
    </a>
    
    <h2 class="profile__title"><?php echo $title; ?></h2>
    <a href="base-user-details.php" class="profile__link--about">Learn more <span class="sr-only">about Christina Mattews</span> <i class="fas fa-chevron-right"></i>
    </a>
    
    <ul class="profile__meta">
      <li>Communication adviser at DG Move</li>
      <li>Member of Violeta Bulc cabinet at DG Move</li>
    </ul>
    
    <ul class="profile__location">
      <li><i class="fas fa-map-marker-alt"></i> Brussels - BE</li>
      <li><i class="fas fa-map-marker-alt"></i> Kuala Lumpur - MY</li>
      <li><i class="fas fa-map-marker-alt"></i> Vienna - AT</li>
    </ul>
    
    <ul class="profile__actions">
      <li><a href="#" class="profile__actions--contact">contact</a></li>
      <!--li><a href="#" class="profile__actions--join">join</a></li-->
      <li><a href="#" class="profile__actions--follow">follow</a></li>
      <li><a href="#" class="profile__actions--add2list">add to list</a></li>
      <!--<li><a href="#" class="profile__actions--leave">leave</a></li>
      <li><a href="#" class="profile__actions--unfollow">unfollow</a></li-->
    </ul>
    
    <ul class="profile__networks">
      <li class="profile__networks__item profile__following"><a href="base-list-of-users.php?hasadmin=false">47 following</a></li>
      <li class="profile__networks__item profile__followers"><a href="base-list-of-users.php?hasadmin=false">324 followers</a></li>
      <li class="profile__networks__item profile__groups"><a href="base-list-of-groups.php?hasadmin=false">12 groups</a></li>
    </ul>
    
</header>

<nav class="inpage-nav">  
  <ul class="nav--tabs">
    <li>
      <a class="nav__link active" href="#">publications</a>
    </li>
    <li>
      <a class="nav__link" href="#">events</a>
    </li>
    <li>
      <a class="nav__link" href="#">shared content</a>
    </li>
  </ul>
</nav>
  
<div class="newsfeed">
  
<article class="newsfeed__item newsfeed__item--short newsfeed__item--discussion newsfeed__item--pinned">
  <header>
<h2><a href="#"><?php echo $postTitle; ?></a><span class="newsfeed__item__state sideinfo"> [ pinned ]</span></h2>

<?php includeWithParams("components/post-info.php", $postInfo); ?>

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
  
<article class="newsfeed__item newsfeed__item--short newsfeed__item--draft" style="margin-top: -32px;">
  <header>
<h2><a href="#"><?php echo $postTitle; ?></a><span class="newsfeed__item__state sideinfo"> [ ! draft ]</span></h2>

<?php includeWithParams("components/post-info.php", $postInfo); ?>

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
  
<article class="newsfeed__item newsfeed__item--short newsfeed__item--discussion" style="margin-top: -28px;">
  <header>
<h2><a href="#"><?php echo $postTitle; ?></a></h2>

<?php includeWithParams("components/post-info.php", $postInfo); ?>

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
</main>
