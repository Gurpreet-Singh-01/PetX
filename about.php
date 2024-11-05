<?php
 include('header.php');
 ?>

    <div class="contact_page">
      <div class="clients">
        <p>What Pet Owners Say About Us</p>
      </div>
      <div class="client_container">
        <div class="sayings">
          <div class="saying_head">
            <p>"Very Professional"</p>
          </div>
          <div class="saying_text">
            <p>
              Soft spoken doctor with great knowledge. Thank you Doctor for
              treating my pet.<br /><br /><br />Nitin Sharma
            </p>
          </div>
        </div>
        <div class="sayings">
          <div class="saying_head">
            <p>"Great Service"</p>
          </div>
          <div class="saying_text">
            <p>
              Best quality dog feeds, all kind of accessories and the best thing
              is that there is dog hostel too!!<br /><br /><br />Yatin Jain
            </p>
          </div>
        </div>
        <div class="sayings">
          <div class="saying_head">
            <p>"Kind & Loving"</p>
          </div>
          <div class="saying_text">
            <p>
              Pupkitt pet care doctors are very polite and down to earth. They
              know how to keep your pet health & happy.<br /><br /><br />Rajesh
              Goyal
            </p>
          </div>
        </div>
      </div>
      <br /><br /><br /><br />
      <hr />
      <!--  Contact Form -->
      <form action="about_form.php" method="post" enctype="multipart/form-data">
        <div class="contact_form">
          <div class="contact_left">
            <p class="head">
              Reach out to us today<br />
              via any of the given<br />
              information
            </p>

            <p class="support">Call us for instant support</p>
            <p class="num">799-234-9999</p>

            <p class="support">Write us by mail</p>
            <p class="num">PetX@gmail.com</p>
          </div>
          <div class="contact_right">
            <div class="enquiry_form">
              <div class="enquiry_head">
                <p>Franchise Enquiry</p>
              </div>
              <div class="enquiry_head_text">
                <p>Please Fill The Form To Get Information</p>
              </div>
              <div class="enquiry_content">
                <form >
                  <input type="text" name="name" placeholder="Full Name" />
                  <input
                    type="text"
                    name="contact_number"
                    placeholder="Phone Number"
                  />
                  <input
                    type="email"
                    name="email"
                    placeholder="Email Address"
                  />
                  <input type="text" name="Pincode" placeholder="Pincode" />
                  <input type="text" name="Address" placeholder="Address" />
                  <input
                    type="text"
                    name="Franchise"
                    placeholder="Area of Franchise you are Interested in"
                  />
                  <input
                    type="text"
                    name="Petx"
                    placeholder="How did you hear about PetX"
                  />
                  <div class="submit_btn">
                    <input type="submit" value="Submit" />
                    
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>

    <?php
 include('footer.php');
 ?>