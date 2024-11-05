<?php
include('header.php');
?>
<!-- Sign Up Form-->

<div class="signup_menu">
  <form action="signup_form.php" method="post" enctype="multipart/form-data">
    <div class="sign_up_wrapper">
      <div class="signup_menu_head">
        <p>Sign Up Menu</p>
      </div>
      <input type="text" name="username" placeholder="Username" required/ >
      <input type="text" name="contact_number" placeholder="Contact Number" required/>
      <input type="password" name="password" placeholder="Password" required/>
      <div class="signbtn">
        <input type="submit" value="Sign Up"  />
      </div>
    </div>
  </form>
</div>

<?php
include('footer.php');
?>