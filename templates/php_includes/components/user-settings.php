<main class="profile profile--group clearfix">

  <header>
    
    <a href="#" class="profile__link">
      <img src="tmp_resources/frame.png" class="profile__qrcode" alt="Christina Mattews Profile picture">
    </a>
    
    <h2 class="profile__title">My Profile Page</h2>
    <h4 class="extra-space--bottom">(Me, <?php echo $title; ?>)</h4>
  
    <a href="base-user-details.php" class="profile__link--about">
      See my profile in display mode <i class="fas fa-chevron-right"></i>
      <!-- display in opposition of this mode which is edit mode -->
    </a>
    
    <ul class="profile__networks">
      <li class="profile__networks__item profile__following"><a href="base-list-of-users.php?hasadmin=false">47 following</a></li>
      <li class="profile__networks__item profile__followers"><a href="base-list-of-users.php?hasadmin=false">324 followers</a></li>
      <li class="profile__networks__item profile__groups"><a href="base-list-of-groups.php?hasadmin=false">12 groups</a></li>
    </ul>
    
<<<<<<< HEAD
  </header>
=======
</header>
>>>>>>> d8775734bd7c5fc91f87c18da270f277c10a52e0
  
  <nav class="inpage-nav">  
  <ul class="nav--tabs" role="tablist">
    <li>
      <a class="nav__link" href="#account" id="account-tab" aria-controls="account" aria-selected="true">Account</a>
    </li>
    <li>
      <a class="nav__link" href="#about" id="about-tab" aria-controls="about" aria-selected="false">About me</a>
    </li>
    <li>
      <a class="nav__link" href="#interests" id="interests-tab"  aria-controls="interests" aria-selected="false">Interests</a>
    </li>
    <li>
      <a class="nav__link" href="#socialnetwork" id="socialnetwork-tab" aria-controls="socialnetwork" aria-selected="false">Social Networks</a>
    </li>
    <li>
      <a class="nav__link" href="#privacy" id="privacy-tab"  aria-controls="privacy" aria-selected="false">Privacy</a>
    </li>
  </ul>
</nav>
  
<div class="tab-content form-wrapper">
  
<section id="account" class="tab-pane active" role="tabpanel" aria-labelledby="account-tab">
  <h3>Account informations</h3>
  
  <form>
  
<div class="form__block form__block--text">
  <label for="field-ID-1" required>
    First name <span class="form--required text-danger" title="This field is required."><span class="sr-only">Mandatory field</span>*</span></label>
  <input type="text" name="field-name-1" id="field-ID-1" class="form__input form__input--text" placeholder="" required value="Christina">
</div>
  
<div class="form__block form__block--text">
  <label for="field-ID-2" required>Last name <span class="form--required text-danger" title="This field is required."><span class="sr-only">Mandatory field</span>*</span></label>
  <input type="text" name="field-name-2" id="field-ID-2" class="form__input form__input--text" placeholder="" required value="Matthews">
</div>
    
<div class="form__block form__block--text">
  <label for="field-ID-3" required>Email <span class="form--required text-danger" title="This field is required."><span class="sr-only">Mandatory field</span>*</span></label>
  <input type="email" name="field-name-3" id="field-ID-3" class="form__input form__input--email" placeholder="" required value="chrismat@ec.europa.eu">
</div>
    
    <h3>Change password</h3>
    
<div class="form__block form__block--text">
  <label for="field-ID-3b" required>Old Password <span class="form--required text-danger" title="This field is required."><span class="sr-only">Mandatory field</span>*</span></label>
  <input type="password" name="field-name-3b" id="field-ID-3b" class="form__input form__input--email" placeholder="" required >
</div>
  
<div class="form__block form__block--text">
  <label for="field-ID-4" required>New Password <span class="form--required text-danger" title="This field is required."><span class="sr-only">Mandatory field</span>*</span></label>
  <input type="password" name="field-name-4" id="field-ID-4" class="form__input form__input--email" placeholder="" required>
  <div>Password Compliance: </div>
</div>
  
<div class="form__block form__block--text">
  <label for="field-ID-5" required>Confirm password change<span class="form--required text-danger" title="This field is required."><span class="sr-only">Mandatory field</span>*</span></label>
  <input type="password" name="field-name-5" id="field-ID-5" class="form__input form__input--email" placeholder="" required>
</div> 

<div class="btn-list--center extra-space--top">  
  <input type="submit" value="Save changes" class="btn btn--green btn--large">
</div>
  
</form>
</section>
  
<section id="about" class="tab-pane"  role="tabpanel" aria-labelledby="about-tab">
  
  <h3>Profile information</h3>
  
  <form>
  
  <div class="form__block form__block--file">
    
    <p class="form__fake-label">Upload a new profile picture</p>
    
    <input type="file" name="file-7[]" id="file-7" class="form__input--file" data-multiple-caption="{count} files selected" accept=".jpg, .jpeg, .jpe, .png" />
    <label for="file-7"><span class="form__input--selected"></span> <span class="form__label--file"><i class="fas fa-upload"></i> Choose a file&hellip;</span></label>
    
  </div>
  
    <div class="form__block form__block--file">
    
    <p class="form__fake-label">Upload a new CV (in PDF format)</p>
    
      <input type="file" name="file-1[]" id="file-1" class="form__input--file" data-multiple-caption="{count} files selected" accept=".pdf" />
      <label for="file-1"><span class="form__input--selected"></span> <span class="form__label--file"><i class="fas fa-upload"></i> Choose a file&hellip;</span></label>
      
    </div>
  
  <div class="form__block form__block--text">
  <label for="field-ID-6" >
    Edit your short description</label>
    <textarea name="field-name-6" id="field-ID-6" class="form__input form__input--text" placeholder=""></textarea>
</div>
  
  
  
  <div class="btn-list--right extra-space--top">
    <input type="submit" class="btn btn--green" value="Confirm" id="submit_interests">
  </div>
  
</form>
  
  
  <h3>Affiliation</h3>
  
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus volutpat libero sapien, id lobortis neque lobortis vel. Nam ornare congue felis, at pharetra dolor feugiat ut.</p>

<form class="form">
  
<div class="form__block form__block--text">
  <label for="field-ID-7" required>
    Role </label>
  <input type="text" name="field-name-7" id="field-ID-7" class="form__input form__input--text" placeholder="" required>
</div>
  
<div class="form__block form__block--text">
  <label for="field-ID-8" required>
    Organisation </label>
  <input type="text" name="field-name-8" id="field-ID-8" class="form__input form__input--text" placeholder="" required>
</div>
  


<div class="form__block form__block--onecol form__block--submit btn-list--right">  
  <button class="btn btn--blue"><i class="fas fa-plus"></i> add another affiliation</button>
  <input type="submit" value="save" id="save_affiliation" class="btn btn--green">
</div>
  
</form>
  
  <h3 class="extra-space--top">Location</h3>
  
  <p>Aliquam rutrum nulla sed tellus fringilla aliquet. Fusce et odio nec nisl dignissim sodales eget tincidunt mauris. Vivamus ac varius odio, sed mollis nisl. Suspendisse potenti. Phasellus ac velit vitae mauris laoreet rhoncus placerat eu enim. In non lectus mauris.</p>

<form class="form">
  
<div class="form__block form__block--text">
  <label for="field-ID-9">
    City </label>
  <input type="text" name="field-name-9" id="field-ID-9" class="form__input form__input--text" placeholder="">
</div>

<div class="form__block form__block--onecol form__block--submit btn-list--right">  
  <button class="btn btn--blue"><i class="fas fa-plus"></i> add another location</button>
  <input type="submit" value="save" id="save_loc" class="btn btn--green">
</div>
  
</form>
</section>

<section id="interests" class="tab-pane"  role="tabpanel" aria-labelledby="interests-tab">
  
  <form>
  
  <h3>interests</h3>
  
  <h4>Your selection</h4>
  <ul class="list list--taxonomy list--taxonomy">
      <li class="list__item list__item--tag tag--deletable tag">
    Proposition 01 <button type="button" class="close" data-dismiss="modal" aria-label="Remove">
            <span aria-hidden="true">&times;</span>
          </button>
  </li>
    <li class="list__item list__item--tag tag--deletable tag">
    Proposition with a waaaay longer text 02 <button type="button" class="close" data-dismiss="modal" aria-label="Remove">
            <span aria-hidden="true">×</span>
          </button>
  </li>
    <li class="list__item list__item--tag tag--deletable tag">
    Lorem <button type="button" class="close" data-dismiss="modal" aria-label="Remove">
            <span aria-hidden="true">×</span>
          </button>
  </li>
    <li class="list__item list__item--tag tag--deletable tag">
    Lorem <button type="button" class="close" data-dismiss="modal" aria-label="Remove">
            <span aria-hidden="true">×</span>
          </button>
  </li>
    <li class="list__item list__item--tag tag--deletable tag">
    Lorem <button type="button" class="close" data-dismiss="modal" aria-label="Remove">
            <span aria-hidden="true">×</span>
          </button>
  </li>
    <li class="list__item list__item--tag tag--deletable tag">
    Lorem <button type="button" class="close" data-dismiss="modal" aria-label="Remove">
            <span aria-hidden="true">×</span>
          </button>
  </li>
    <li class="list__item list__item--tag tag--deletable tag">
    Lorem <button type="button" class="close" data-dismiss="modal" aria-label="Remove">
            <span aria-hidden="true">×</span>
          </button>
  </li>
  </ul>
  
  <div class="form__block form__block--text">
  <label for="field-ID-3" required>
    Add any interest </label>
  <input type="text" name="field-name-3" id="field-ID-3" class="form__input form__input--text" placeholder="">
  <p>examples: Green energy, Local democracy, Open source </p>
</div> 
  
  <div class="form__block form__block--onecol btn-list--right">  
  <button class="btn btn--blue"><i class="fas fa-plus"></i> Add</button>
</div>
    
    <h4>Suggestions</h4>
  
  <div class="form__block form__block--twocol form__block--ticks">
  <div class="form__block--checkbox">
  <input type="checkbox" name="checkbox" id="checkbox_id1" value="value" checked>
  <label for="checkbox_id1"><span class="onoffswitch-inner"></span> <span class="label-text">Proposition 01</span></label>
  </div>  
    
  <div class="form__block--checkbox">
  <input type="checkbox" name="checkbox" id="checkbox_id2" value="value" checked>
  <label for="checkbox_id2"><span class="onoffswitch-inner"></span> <span class="label-text">Proposition with a waaaay longer text 02</span></label>
  </div>
  
  <div class="form__block--checkbox">
  <input type="checkbox" name="checkbox" id="checkbox_id3" value="value">
  <label for="checkbox_id3"><span class="onoffswitch-inner"></span> <span class="label-text">Another proposition with a long label 03</span></label>
  </div>  
  
  <div class="form__block--checkbox">
  <input type="checkbox" name="checkbox" id="checkbox_id4" value="value">
  <label for="checkbox_id4"><span class="onoffswitch-inner"></span> <span class="label-text">Proposition 04</span></label>
  </div>    
  
  <div class="form__block--checkbox">
  <input type="checkbox" name="checkbox" id="checkbox_id5" value="value">
  <label for="checkbox_id5"><span class="onoffswitch-inner"></span> <span class="label-text">Proposition 05</span></label>
  </div>  
  
  <div class="form__block--checkbox">
  <input type="checkbox" name="checkbox" id="checkbox_id6" value="value">
  <label for="checkbox_id6"><span class="onoffswitch-inner"></span> <span class="label-text">Proposition 06</span></label>
  </div>    
</div> 
  
<div class="form__block form__block--onecol btn-list--right">  
  <button class="btn btn--blue">show more suggestions</button>
</div>
  
    <div class="btn-list--center extra-space--top">
    <input type="submit" class="btn btn--green btn--large" value="Confirm" id="submit_interests">
   
  </div>
    </form>
</section>

<section id="socialnetwork" class="tab-pane"  role="tabpanel" aria-labelledby="socialnetwork-tab">
  <h3>social networks</h3>
  
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus volutpat libero sapien, id lobortis neque lobortis vel. Nam ornare congue felis, at pharetra dolor feugiat ut.</p>

<form>
  
  <h4>Twitter</h4>
  
  <div class="form__block form__block--text">
    <label for="field-ID-3">
      Link to my twitter account </label>
    <input type="text" name="field-name-3" id="field-ID-3" class="form__input form__input--text" placeholder="http://">
  </div>
  
  <div class="form__block--toggle">
  <input type="checkbox" name="checkbox" id="checkbox_id1" value="value">
  <label for="checkbox_id1"><span class="onoffswitch-inner"></span> <span class="label-text">Place this link in my profile</span></label>
  </div> 
  
  <div class="form__block--toggle">
  <input type="checkbox" name="checkbox" id="checkbox_id2" value="value" onchange="alert('launch twitter API')">
  <label for="checkbox_id2"><span class="onoffswitch-inner"></span> <span class="label-text">Allow to import content from my twitter account</span></label>
  </div> 
  
  <h4>LinkedIn</h4>
  
  <div class="form__block form__block--text">
    <label for="field-ID-3">
      Link to my LinkedIn account </label>
    <input type="text" name="field-name-3" id="field-ID-3" class="form__input form__input--text" placeholder="http://">
  </div>
  
  <div class="form__block--toggle">
  <input type="checkbox" name="checkbox" id="checkbox_id3" value="value">
  <label for="checkbox_id3"><span class="onoffswitch-inner"></span> <span class="label-text">Place this link in my profile</span></label>
  </div> 
  
  <div class="form__block--toggle">
  <input type="checkbox" name="checkbox" id="checkbox_id4" value="value" onchange="alert('launch LinkedIn API')">
  <label for="checkbox_id4"><span class="onoffswitch-inner"></span> <span class="label-text">Allow to import content from my LinkedIn account</span></label>
  </div> 
  
  <h4>Facebook</h4>
  
  <div class="form__block form__block--text">
    <label for="field-ID-3">
      Link to my Facebook account </label>
    <input type="text" name="field-name-3" id="field-ID-3" class="form__input form__input--text" placeholder="http://">
  </div>
  
  <div class="form__block--toggle">
  <input type="checkbox" name="checkbox" id="checkbox_id5" value="value">
  <label for="checkbox_id5"><span class="onoffswitch-inner"></span> <span class="label-text">Place this link in my profile</span></label>
  </div> 
  
  <div class="form__block--toggle">
  <input type="checkbox" name="checkbox" id="checkbox_id6" value="value" onchange="alert('launch Facebook API')">
  <label for="checkbox_id6"><span class="onoffswitch-inner"></span> <span class="label-text">Allow to import content from my Facebook account</span></label>
  </div> 
  
  <h4>Blogs and news feed</h4>
  
  <p>If you have a personnal blog or any source of content providing you an RSS feed, you can link it to your account to import this content source automatically on your profile</p>
  
  <div class="form__block form__block--text">
    <label for="field-ID-4">
      Label of the source </label>
    <input type="text" name="field-name-4" id="field-ID-4" class="form__input form__input--text" placeholder="">
  </div>
  
  <div class="form__block form__block--text">
    <label for="field-ID-5">
      RSS feed</label>
    <input type="text" name="field-name-5" id="field-ID-5" class="form__input form__input--text" placeholder="http://">
  </div>
  
  <div class="form__block form__block--onecol form__block--submit btn-list--right">  
  <button class="btn btn--blue"><i class="fas fa-plus"></i> add another RSS source feed</button>
</div>
  
  <div class="btn-list--center extra-space--top">
    <input type="submit" class="btn btn--green btn--large" value="Confirm" id="submit_interests">
  </div>
  
</form>
</section>
  
<section id="privacy" class="tab-pane"  role="tabpanel" aria-labelledby="privacy-tab">
  <h3>Privacy settings</h3>
  
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus volutpat libero sapien, id lobortis neque lobortis vel. Nam ornare congue felis, at pharetra dolor feugiat ut.</p>

<form>
  
  <div class="form__block form__block--onecol form__block--ticks">
  <p class="form__fake-label">Allow people to find you based on:</p>
  
  <div class="form__block--toggle">
  <input type="checkbox" name="checkbox" id="checkbox_id1" value="value">
  <label for="checkbox_id1"><span class="onoffswitch-inner"></span> <span class="label-text">Your name</span></label>
  </div> 
  
  <div class="form__block--toggle">
  <input type="checkbox" name="checkbox" id="checkbox_id2" value="value">
  <label for="checkbox_id2"><span class="onoffswitch-inner"></span> <span class="label-text">Your location</span></label>
  </div> 
  
  <div class="form__block--toggle">
  <input type="checkbox" name="checkbox" id="checkbox_id3" value="value">
  <label for="checkbox_id3"><span class="onoffswitch-inner"></span> <span class="label-text">Your position or affiliation</span></label>
  </div> 
    
  <div class="form__block--toggle">
  <input type="checkbox" name="checkbox" id="checkbox_id4" value="value">
  <label for="checkbox_id4"><span class="onoffswitch-inner"></span> <span class="label-text">Your email</span></label>
  </div> 
    
  <div class="form__block--toggle">
  <input type="checkbox" name="checkbox" id="checkbox_id5" value="value">
  <label for="checkbox_id5"><span class="onoffswitch-inner"></span> <span class="label-text">Your network</span></label>
  </div> 
    
  <p class="form__fake-label">Allow people to perform the following:</p>
    
  <div class="form__block--toggle">
  <input type="checkbox" name="checkbox" id="checkbox_id6" value="value">
  <label for="checkbox_id6"><span class="onoffswitch-inner"></span> <span class="label-text">Contact you</span></label>
  </div> 
    
  <div class="form__block--toggle">
  <input type="checkbox" name="checkbox" id="checkbox_id7" value="value">
  <label for="checkbox_id7"><span class="onoffswitch-inner"></span> <span class="label-text">Invite you to groups</span></label>
  </div> 
    
  <div class="form__block--toggle">
  <input type="checkbox" name="checkbox" id="checkbox_id8" value="value">
  <label for="checkbox_id8"><span class="onoffswitch-inner"></span> <span class="label-text">Invite you to events</span></label>
  </div> 
  
</div>
  
  <div class="btn-list--center extra-space--top">
    <input type="submit" class="btn btn--green btn--large" value="Confirm" id="submit_interests">
  </div>
  
</form>
  
</section> 
  
</div>
  
</main>
