<!-- User Account Menu -->
<li class="dropdown user user-menu">
  <!-- Menu Toggle Button -->
  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
    <!-- The user image in the navbar-->
    <img src="<?php echo $urlAssets.'user2-160x160.jpg'; ?>" class="user-image" alt="User Image">
    <!-- hidden-xs hides the username on small devices so only the image appears. -->
    <span class="hidden-xs"><?php echo $session["USER_NAME"]; ?></span>
  </a>
  <ul class="dropdown-menu">
    <!-- The user image in the menu -->
    <li class="user-header">
      <img src="<?php echo $urlAssets.'user2-160x160.jpg'; ?>" class="img-circle" alt="User Image">

      <p>
        <?php echo $session["USER_NAME"]; ?>
        <small>Member since Nov. 2012</small>
      </p>
    </li>
    </li>
    <!-- Menu Footer-->
    <li class="user-footer">
      <div class="pull-left">
        <a href="#" class="btn btn-default btn-flat">Profile</a>
      </div>
      <div class="pull-right">
        <a href="../auth.php?id=logout" class="btn btn-default btn-flat">Sign out</a>
      </div>
    </li>
  </ul>
</li>
