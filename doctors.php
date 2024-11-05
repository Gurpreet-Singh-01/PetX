<?php
 include('header.php');
 ?>

    <div class="anirudh">
      <div class="anirudh_img">
        <img src="images/Anirudh Mittal.png" alt="doctor" />
      </div>
      <div class="anirudh_content">
        <div class="anirudh_head">
          <p>Dr. Anirudh Mittal</p>
        </div>
        <div class="anirudh_text">
          <p class="study">B.V.Sc & A.H, M.V.Sc, PGDSAT (Gynae)</p>
          <p class="read">
            A graduate from the college of veterinary science, GADVASU, Ludhiana
            which has been ranked the best veterinary institute of India, duly
            registered with Punjab Veterinary Council.<br /><br />The consulting
            veterinarian is the youngest veterinary doctor in India to open a
            chain of veterinary clinics. He has been actively participating in
            and organizing free camps and seminars in various institutions for
            raising awareness about the pet and public health.
          </p>
        </div>
        <form action="#form">
          <input type="submit" value="Book Now" />
        </form>
      </div>
    </div>

    <div class="vets_head">
      <p>Our Expert Veterinarians</p>
    </div>

    <div class="vets">
      <div class="doctors">
        <img src="images/doctor1.jpg" alt="doctor" />
        <div class="doctor_text"><p>B.V.Sc & A.H.</p></div>
      </div>
      <div class="doctors">
        <img src="images/doctor2.jpg" alt="doctor" />
        <div class="doctor_text"><p>B.V.Sc & A.H, M.V.Sc (Medicine)</p></div>
      </div>
      <div class="doctors">
        <img src="images/doctor3.jfif" alt="doctor" />
        <div class="doctor_text"><p>B.V.Sc & A.H.</p></div>
      </div>
    </div>

    <!-- Booking an Appointment -->
    <form id="form" method="post" action="doctors_form.php" enctype="multipart/form-data>
      <div class="form_wrapper">
        <p class="appointment_text">Book an Appointment</p>
        <div class="appointment_form">
          <div class="left">
            <table>
              <tr>
                <td>
                  <label>Name</label>
                </td>
                <td><input type="text" name="Name" required/></td>
              </tr>
              <tr>
                <td>
                  <label>Pet</label>
                </td>
                <td>
                  <select name="pet_type" required>
                    <option value="Not-Selected">Select</option>
                    <option value="Dog">Dog</option>
                    <option value="Cat">Cat</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>
                  <label>Date</label>
                </td>
                <td>
                  <input type="date" name="date" required/>
                </td>
              </tr>
            </table>
          </div>

          <div class="right">
            <table>
              <tr>
                <td>
                  <label>Contact</label>
                </td>
                <td>
                  <input type="text" name="Number" required/>
                </td>
              </tr>
              <tr>
                <td>
                  <label>Pet's Gender</label>
                </td>
                <td>
                  <select name="pet_gender" required>
                    <option value="Not-Selected">Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>
                  <label>Slot</label>
                </td>
                <td>
                  <select name="slots" required>
                    <option value="">Select</option>
                    <option value="1:00 PM">1:00 PM</option>
                    <option value="3:00 PM">3:00 PM</option>
                    <option value="5:00 PM">5:00 PM</option>
                    <option value="7:00 PM">7:00 PM</option>
                  </select>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <input type="submit" value="Submit">
      <input type="reset" value="Clear">
    </form>

   
    <?php
 include('footer.php');
 ?>