<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content='width=device-width' initial-scale=1.0>
        <title>contact</title>
        <link rel="stylesheet" type="text/css" href="/docapp/stf/css/contact.css">
        <script type="module" src="/docapp/stf/js/contact.js" defer></script>
    </head>
    <body>
    <?php include '/xampp/htdocs/docapp/ext/head.php';?>
        <!-- Contact Page -->
        <div class="contacts">
          <h4>CONTACT</h4>
          <div class="contact">
            <div class="appointment">
              <p>Book an Appointment</p>
            </div>

            <div class="message">
              <p>Write Message to Us</p>
            </div>
          </div>
        </div>

        <!-- Contact Form (box that contain the form for both appointment setting and message setting)-->
      <div class="contact_box">
          <div class="appointment_box">
            <p>Book an Appointment</p>
            <form action="" method="get">
              <div class="tag">
                <label for="title">Title: </label><br>
                <input id="title" list="titles" name="title">
                <datalist id="titles">
                  <option value="Mr.">
                  <option value="Mrs.">
                  <option value="Dr">
                  <option value="Miss">
                  <option value="Professor">
                  <option value="ESV">
                </datalist>
              </div>

              <div class="tag">
                <label for="name">Name: </label><br>
                <input id="name" placeholder="first and last name"> <br>
              </div>

              <div class="tag">
                <label for="email">Email: </label><br>
                <input id="email" placeholder="example@xmail.com">
              </div>

              <div class="tag">
                <label for="tel">Phone Number: </label><br>
                <input id="Phone" placeholder="+xxx phone">
              </div>

              <div class="tag">
                <label for="time">Choose Time:</label>
                  <select id="time"><br>
                    <option value=""></option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="1">1</option>
                    <option value="3">3</option>
                    <option value="5">5</option>
                  </select>
              </div>
                
                <br>
                <div class="submit_btn">
                  <input type="submit" value="Submit">
                </div>
                
            </form>
          </div>

          <div class="message_box">
            <p>Message</p>
            <form action="" method="">
              
              <div class="tag">
                <label for="title">Title: </label><br>
                <input id="title" list="titles" name="title">
                <datalist id="titles">
                  <option value="Mr.">
                  <option value="Mrs.">
                  <option value="Dr">
                  <option value="Miss">
                  <option value="Professor">
                  <option value="ESV">
                </datalist>
              </div>

              <div class="tag">
                <label for="name">Name: </label><br>
                <input id="name" placeholder="first and last name"> <br>
              </div>

              <div class="tag">
                <label for="email">Email: </label><br>
                <input id="email" placeholder="example@xmail.com">
              </div>

              <div class="tag">
                <label for="tel">Phone Number: </label><br>
                <input id="Phone" placeholder="+xxx phone">
              </div>

              <div class="subject">
                <label for="subject">Subject: </label><br>
                <input id="subject" type="text">
              </div>

              <div class="messages">
                <textarea class="textarea" type="text" rows="7" maxlength="1500"></textarea>
              </div>
              <br>
              <div class="submit_btn">
                <input type="submit" value="Submit">
              </div>
            </form>
          </div>
      </div>
      

      <br><br>
      <!-- Other Contacts-->
      <div class="other_contacts">
        <h5>CLICK FOR QUICK ACTION</h5>
        <p><img src="../stf/img/mail.svg">info@dapookeowoandco.com</p><br>
        <p><img src="../stf/img/tel.svg">08081904865, 090100084002</p><br>
        <p><img src="../stf/img/twitter.svg">dapookeowoandco</p><br>
        <p><img src="../stf/img/instagram.svg">@dapookeowoandco</p>
      </div>



        <!-- Footer base information -->

<?php include '/xampp/htdocs/docapp/ext/base.php';?>
    </body>
</html>