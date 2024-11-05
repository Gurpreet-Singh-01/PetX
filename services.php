`<?php
 include('header.php');
 ?>

    <!-- main-content -->
    <div class="services_main">
      <div class="service_head">
        <p>Inclusions & Pricelist</p>
      </div>
      <div class="service_container">
        <div class="service_left">
          <div class="service_min_container">
            <img src="images/pet1.png" alt="pet" />
            <div class="service_text">
              <h3>Regular Bath</h3>
              <p><i class="fa-solid fa-check check"></i>Bath & Dry</p>
              <p><i class="fa-solid fa-check check"></i>Spritz of Perfume</p>
              <p><i class="fa-solid fa-check check"></i>Paw Massage</p>
              <p><i class="fa-solid fa-check check"></i>Mouth Spray</p>
            </div>
            <div class="price_box">
              <div class="price1"><p>Small: 1150/-</p></div>
              <div class="price2"><p>Medium: 1250/-</p></div>
              <div class="price3"><p>Large: 1350/-</p></div>
              <div class="price4"><p>ExtraL: 1500/-</p></div>
            </div>
          </div>
          <div class="service_min_container">
            <img src="images/pet2.png" alt="pet" />
            <div class="service_text">
              <h3>Tick and Flea Bath</h3>
              <p><i class="fa-solid fa-check check"></i>Medicated Bath</p>
              <p><i class="fa-solid fa-check check"></i>Tick Removal by Hand</p>
              <p><i class="fa-solid fa-check check"></i>Tick & Flea Spray</p>
              <p>
                <i class="fa-solid fa-check check"></i>Regular Bath services
              </p>
            </div>
            <div class="price_box">
              <div class="price1"><p>Small: 1550/-</p></div>
              <div class="price2"><p>Medium: 1750/-</p></div>
              <div class="price3"><p>Large: 1850/-</p></div>
              <div class="price4"><p>ExtraL: 1975/-</p></div>
            </div>
          </div>
          <div class="service_min_container">
            <img src="images/pet3.png" alt="pet" />
            <div class="service_text">
              <h3>Aroma Therapy</h3>
              <p><i class="fa-solid fa-check check"></i>Teal & Flea Bath</p>
              <p><i class="fa-solid fa-check check"></i>Paw Massage</p>
              <p><i class="fa-solid fa-check check"></i>Spritz of Perfume</p>
              <p>
                <i class="fa-solid fa-check check"></i>Regular Bath services
              </p>
            </div>
            <div class="price_box">
              <div class="price1"><p>Small: 1975/-</p></div>
              <div class="price2"><p>Medium: 2250/-</p></div>
              <div class="price3"><p>Large: 2500/-</p></div>
              <div class="price4"><p>ExtraL: 2800/-</p></div>
            </div>
          </div>
        </div>
        <div class="service_right">
          <div class="service_min_container">
            <img src="images/pet4.png" alt="pet" />
            <div class="service_text">
              <h3>Full Service</h3>
              <p>
                <i class="fa-solid fa-check check"></i>Regular, Teal & Flea bath
              </p>
              <p><i class="fa-solid fa-check check"></i>Teeth & Ear cleaning</p>
              <p>
                <i class="fa-solid fa-check check"></i>Nail & Sanitary Clipping
              </p>
              <p><i class="fa-solid fa-check check"></i>Spritz of Perfume</p>
            </div>
            <div class="price_box">
              <div class="price1"><p>Small: 2550/-</p></div>
              <div class="price2"><p>Medium: 2975/-</p></div>
              <div class="price3"><p>Large: 3250/-</p></div>
              <div class="price4"><p>ExtraL: 3550/-</p></div>
            </div>
          </div>
          <div class="service_min_container">
            <img src="images/pet5.png" alt="pet" />
            <div class="service_text">
              <h3>Haircut + Bath</h3>
              <p><i class="fa-solid fa-check check"></i>Medicated Bath</p>
              <p><i class="fa-solid fa-check check"></i>Full Body Haircut</p>
              <p><i class="fa-solid fa-check check"></i>Paw Cream</p>
              <p><i class="fa-solid fa-check check"></i>Spritz of Perfume</p>
            </div>
            <div class="price_box">
              <div class="price1"><p>Small: 2100/-</p></div>
              <div class="price2"><p>Medium: 2600/-</p></div>
              <div class="price3"><p>Large: 3000/-</p></div>
              <div class="price4"><p>ExtraL: 3250/-</p></div>
            </div>
          </div>
          <div class="service_min_container">
            <img src="images/pet6.png" alt="pet" />
            <div class="service_text">
              <h3>Cat Basic Grooming</h3>
              <p><i class="fa-solid fa-check check"></i>Bath & Dry</p>
              <p>
                <i class="fa-solid fa-check check"></i>Nail & Sanitary Clipping
              </p>
              <p><i class="fa-solid fa-check check"></i>Ear & Teeth Cleaning</p>
              <p><i class="fa-solid fa-check check"></i>Paw Massage</p>
            </div>
            <div class="price_box">
              <div class="price1"><p>Small: 1900/-</p></div>
              <div class="price2"><p>Medium: 2450/-</p></div>
              <div class="price3"><p>Large: 2850/-</p></div>
              <div class="price4"><p>ExtraL: 3150/-</p></div>
            </div>
          </div>
        </div>
      </div>
      <!-- Form -->
      <div class="feedback_form">
        <div class="feedback_head">
          <p>Give us Feedback</p>
        </div>
        <form class="feedback->form" action="services_form.php" method="post" enctype="multipart/form-data">
          <div class="feedback_wrapper">
            <table class="form_table">
              <tr>
                <td>
                  <label>Name</label>
                </td>
                <td><input type="text" name="Feedname" /></td>
              </tr>
              <tr>
                <td>
                  <label>Contact</label>
                </td>
                <td><input type="text" name="Feednum" /></td>
              </tr>
              <tr>
                <td>
                  <label>Message</label>
                </td>
                <td><textarea name="Feedback" class="f_textarea"></textarea></td>
              </tr>
            </table>
            <div class="fbtn">
            <input type="submit" value="Submit">
          </div>
          </div>
        </form>
      </div>
    </div>


    <?php
    include('footer.php');
    ?>