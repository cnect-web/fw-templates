<main class="profile profile--group clearfix">

  <header class="profile">
    
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
  

<?php includeWithParams("components/newsfeed.php", array(
  'title'=> 'Christina Mattews',
  'postTitle'=> 'Lorem ipsum sit dolor amet',
  'tags' => array("a" => "Lorem", "b" => "ipsum sit dorlor", "c" => "Etiam", "d" => "Nulla tindunt saius"),
  'postInfo' => array(
    "authorFullName" => "Christina Mattews",
    "authorProfileURL" => "base-user-profile.php",
    "authorPics" => "tmp_resources/userPicture01.jpg",
    "authorGuid" => 15,
    "postTime" => "18 mins ago"
  )
)); ?>   
  
  
</main>
