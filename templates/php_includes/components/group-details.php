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
      <!--li><a href="#" class="profile__actions--leave">leave</a></li>
      <li><a href="#" class="profile__actions--unfollow">unfollow</a></li-->
    </ul>
    
    <ul class="profile__networks">
      <li class="profile__networks__item profile__members"><a href="http://localhost/futurium/templates/php_includes/base-followers.php">47 members</a></li>
      <li class="profile__networks__item profile__followers"><a href="http://localhost/futurium/templates/php_includes/base-followers.php">324 followers</a></li>
      <li class="profile__networks__item profile__subgroups"><a href="#">4 subgroups</a></li>
    </ul>
    
</header>
  
<div class="newsfeed" style="padding: 0 15px">
  
  <h3>About Green energy in transport</h3>
  
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc auctor nibh augue. Morbi ut congue metus, vel malesuada diam. Vivamus pretium, risus eget faucibus condimentum, elit massa tempus risus, in dictum neque est at massa. Donec pulvinar ullamcorper commodo. Ut et elit non urna faucibus bibendum ac non risus. Ut tempor dolor ipsum, sit amet consequat augue posuere et. Ut vitae congue turpis. Phasellus maximus maximus tincidunt. In vulputate nisi eget purus rutrum faucibus. Sed quis facilisis velit, non fringilla leo. Vestibulum rhoncus a magna ut rutrum. Nunc ornare nisi eu metus viverra commodo quis a lectus. Suspendisse vestibulum nunc nibh, at pulvinar est molestie eget. Donec eget pretium dolor, eget sagittis diam. Duis non enim imperdiet, blandit sapien at, faucibus est.</p>
  
  <p>Nulla pretium lorem vel nisl iaculis suscipit. Nunc euismod id sem vel vestibulum. In pulvinar eros eget turpis varius, ac pellentesque augue commodo. Pellentesque nec augue sapien. Quisque sollicitudin tristique tristique. Donec nec tortor imperdiet, volutpat lectus eu, pharetra massa. Vivamus tincidunt neque et venenatis malesuada. Vestibulum a tortor eros. Phasellus scelerisque dapibus sollicitudin. Maecenas molestie mauris vel tortor feugiat bibendum. Curabitur ipsum risus, pretium tempor quam et, auctor tempus justo. Quisque ultrices neque eu nisi tempor, vel fermentum diam scelerisque. Donec eu convallis enim. Nullam nunc metus, eleifend eu velit nec, eleifend lacinia nisi.</p>
  
  <p>Vivamus ac vulputate arcu. Donec felis quam, placerat ac tincidunt eget, consequat sed felis. Integer egestas mi ac rutrum scelerisque. In tortor orci, blandit id ante id, molestie sollicitudin sapien. Maecenas pellentesque pulvinar nisl pretium dapibus. Aliquam a ipsum scelerisque, ornare tellus sed, tincidunt erat. Cras et quam posuere, pulvinar nunc ac, mattis nisi. Nullam vitae posuere ante, eget laoreet sem.</p>
  
<?php
  $arrayOfTags = array("tags" => $tags, "title" => "List of interests");
  includeWithParams("components/taxonomy-list.php", $arrayOfTags);
?>
  
<?php
  $arrayOfTags = array("tags" => $tags, "title" => "Social Media Accounts");
  includeWithParams("components/group-social-network.php", $arrayOfTags);
?>
  
<?php
  $params = array("title" => "Curriculum Vitae");
  includeWithParams("components/attachment.php", $params);
?>
  </div>
</main>
