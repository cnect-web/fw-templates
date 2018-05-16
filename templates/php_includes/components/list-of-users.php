<main class="profile profile--group clearfix">

  <header>
    
    <a href="#" class="profile__pic__link"><!-- link to full pic -->
      <img src="tmp_resources/groupPicture01.jpg" class="profile__pic" alt="Green energy in transport logo">
    </a>
    
    <h2 class="profile__title"><?php echo $title; ?></h2>
    <a href="#" class="profile__link--about">Learn more <span class="sr-only">about Green energy in transport</span> <i class="fas fa-chevron-right"></i>
    </a>
    
    <ul class="profile__meta">
      <li>public group</li>
    </ul>
    
    <ul class="profile__actions">
      <li><a href="#" class="profile__actions--contact">contact</a></li>
      <li><a href="#" class="profile__actions--join">join</a></li>
      <li><a href="#" class="profile__actions--follow">follow</a></li>
      <!--li><a href="#" class="profile__actions--add2list">add to list</a></li>
      <li><a href="#" class="profile__actions--leave">leave</a></li>
      <li><a href="#" class="profile__actions--unfollow">unfollow</a></li-->
    </ul>
    
    <ul class="profile__networks active">
      <li class="profile__networks__item profile__members"><a href="#" class="active">47 members</a></li>
      <li class="profile__networks__item profile__followers"><a href="#">324 followers</a></li>
      <li class="profile__networks__item profile__subgroups"><a href="#">4 subgroups</a></li>
    </ul>
    
</header>


  
<div class="profile-listing">
  <?php includeWithParams("components/listing-item.php", $listingItem); ?>
</div>
</main>
