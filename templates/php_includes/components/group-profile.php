<main class="profile profile--group clearfix">

  <header>
    
    <a href="#" class="profile__pic__link"><!-- link to full pic -->
      <img src="tmp_resources/groupPicture01.jpg" class="profile__pic" alt="Green energy in transport logo">
    </a>
    
    <h2 class="profile__title"><a href="base-group-profile.php"><?php echo $title; ?></a></h2>
    <a href="base-group-details.php" class="profile__link--about">Learn more <span class="sr-only">about Green energy in transport</span> <i class="fas fa-chevron-right"></i>
    </a>
    
    <ul class="profile__meta">
      <li>public group</li>
    </ul>
    
    <ul class="profile__actions">
      <li><a href="#" class="profile__actions--contact">contact</a></li>
      <li><a href="#" class="profile__actions--join">join</a></li>
      <li><a href="#" class="profile__actions--follow">follow</a></li>
      <!--li><a href="#" class="profile__actions--leave">leave</a></li>
      <li><a href="#" class="profile__actions--unfollow">unfollow</a></li-->
    </ul>
    
    <ul class="profile__networks">
      <li class="profile__networks__item profile__members"><a href="base-list-of-users.php?hasadmin=true">47 members</a></li>
      <li class="profile__networks__item profile__followers"><a href="base-list-of-users.php?hasadmin=false">324 followers</a></li>
      <li class="profile__networks__item profile__subgroups"><a href="base-list-of-groups.php">4 subgroups</a></li>
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
      <a class="nav__link" href="#">library</a>
    </li>
    <li>
      <a class="nav__link" href="#">shared content</a>
    </li>
  </ul>
</nav>
  
<div class="newsfeed">
  
<article class="newsfeed__item newsfeed__item--short newsfeed__item--discussion newsfeed__item--pinned">
  <header>
<h2><a href="#"><?php echo  $title; ?></a><span class="newsfeed__item__state sideinfo"> [ pinned ]</span></h2>

<?php includeWithParams("components/post-info.php", $postInfo); ?>

<img src="tmp_resources/cover01.jpg" class="newsfeed__item__cover responsive" alt="flags">    
    
</header>
  
<div>  
<?php
  include("tmp_resources/lipsum-short.php");
?>
</div>
  
<div class="btn-list btn-list--right">
  <a href="#" class="btn btn--green"><span class="sr-only">read</span> more<span class="sr-only">about <?php echo $title; ?></span></a>
</div>
  
</article>
  
<article class="newsfeed__item newsfeed__item--short newsfeed__item--draft" style="margin-top: -32px;">
  <header>
<h2><a href="#"><?php echo $title; ?></a><span class="newsfeed__item__state sideinfo"> [ ! draft ]</span></h2>

<?php includeWithParams("components/post-info.php", $postInfo); ?>

<img src="tmp_resources/cover01.jpg" class="newsfeed__item__cover responsive" alt="flags">    
    
</header>
  
<div>  
<?php
  include("tmp_resources/lipsum-short.php");
?>
</div>
  
<div class="btn-list btn-list--right">
  <a href="#" class="btn btn--green"><span class="sr-only">read</span> more<span class="sr-only">about <?php echo $title; ?></span></a>
</div>

</article>
  
<article class="newsfeed__item newsfeed__item--short newsfeed__item--discussion" style="margin-top: -28px;">
  <header>
<h2><a href="#"><?php echo $title; ?></a></h2>

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
  <a href="#" class="btn btn--green"><span class="sr-only">read</span> more<span class="sr-only">about <?php echo $title; ?></span></a>
</div>

</article>
  
</div>
</main>
