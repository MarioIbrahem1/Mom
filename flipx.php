<?php
if(isset($_POST['submit'])) {
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $date = $_POST['date'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];

  // Check if email is valid
  if(filter_var($email, FILTER_VALIDATE_EMAIL) === false || !preg_match('/@.*\.com$/', $email)) {
     echo "Invalid email address";
  }

  // Check if phone number is valid
  else if(!preg_match('/^01[0125][0-9]{8}$/', $phone)) {
     echo "Invalid phone number start with (010/011/012/015)";
  }

  // Check if date is valid
  else if(strtotime($date) >= strtotime(date('Y-m-d'))) {
     echo "Invalid date";
  }

  // Check if password is valid
  else if(strlen($password) < 8){
    echo "Password must be at least 8 characters long";
  }

  // Check if passwords match
  else if($password !== $confirm_password){
    echo "Passwords do not match";
  }

  // If all inputs are valid
  else {
     //Do something, like add the data to a database
  }
}
?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8">
    <title>Update & Delete</title>
    <link rel="stylesheet" href="flipx.css">
    <link rel="website icon" type="png" href="images/LOGO.png" style="border-radius: 100%" />
  </head>

  <body>
    <div id="tit">
      <h1>My Profile</h1>
    </div>
    <div class="background-image-container"></div>
    <button id="flip-card-btn" style="margin-left : 25px">Update & Delete</button>
    <div class="im">
      <div class="card" style="margin-bottom : 20px">
        <div class="card-inner">
          <div class="card-front">
            <!-- المحتوى الأمامي للكارت -->
            <form action="http://localhost/Org/update.php" method="POST">
              <h1>Enter your data to update:</h1>
              <label for="email">New Email:</label>
              <input type="email" placeholder="your email " name="email" id="email" required style="width: 100%;padding: 12px 20px;border: none;border-radius: 4px;box-sizing: border-box;background-color: #e7e7e7; color: #333;" />

              <label for="phone">Old Phone:</label>
              <input type="tel" pattern="01[0125][0-9]{8}" placeholder="your phone number " name="phone" id="phone" required />

              <label for="phone">New Phone:</label>
              <input type="tel" pattern="01[0125][0-9]{8}" placeholder="your phone number " name="newphone" id="phone" required />

              <label for="password">Old password:</label>
              <input type="password" placeholder="password" name="password" id="password" minlength="8" required />

              <label for="password">New password:</label>
              <input type="password" placeholder="password" name="newpassword" id="password" minlength="8" required />

              <label for="date">Date:</label>
              <input type="date" name="date" id="date" min="1920-01-01" required />
              <br /><br />
              <button type="submit" class="btn btn-outline-danger"> Save Changes</button>
            </form>
          </div>
          <div class="card-back">
            <!-- المحتوى الخلفي للكارت -->
            <form action="delete.php" method="POST">
              <label>Phone number :</label><br />
              <input type="tel" pattern="01[0125][0-9]{8}" placeholder="your phone number " name="phone" id="phone" required />

              <input type="checkbox" id="Ch" />
              <label for="Ch">I am not a robot</label>
              <br /><br />
              <button type="submit" class="btn btn-outline-danger">Delete</button>
            </form>
          </div>
        </div>
      </div>


      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script>
        const flipCardBtn = document.querySelector("#flip-card-btn");
        const card = document.querySelector(".card");
        const cardInner = document.querySelector(".card-inner");

        flipCardBtn.addEventListener("click", function() {
          cardInner.classList.toggle("is-flipped");
        });


        // للتحقق من البيانات المدخله 
        const password = document.getElementById("password");
        const confirm_password = document.getElementById("confirm_password");

        function validatePassword() {
          if (password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Passwords do not match");
          } else {
            confirm_password.setCustomValidity("");
          }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;

      </script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>

</html>
