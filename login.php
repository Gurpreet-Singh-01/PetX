<?php
 include('header.php');
 ?>
    <!-- Login -->
    <div class="login_page">
    <form method="post" action="login_form.php" enctype="multipart/form-data">
      <div class="Login_menu">
        <div class="login_head">
          <p>Login Menu</p>
        </div>
        <div class="email">
          <i class="fa-solid fa-user mail"></i><input type="text" name="login_user" />
        </div>
        <div class="password">
          <i class="fa-solid fa-lock pass"></i><input type="password" name="password_mail" />
          <div class="new_user">
            <a href="signup.php"><p> New User? Create New account</p></a> 
          </div>
          <div class="sbtn">
          <input type="submit" value="Login" name="Login-btn"/>
        </div>
        </div>
      </div>
    </form>
  </div>

  <?php
  include('footer.php');
  ?>