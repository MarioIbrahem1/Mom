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
    <meta charset="UTF-8" />
    <title id="tit">Login</title>
    <link rel="stylesheet" href="loginfi.css" />
    <link rel="website icon" type="png" href="images/LOGO.png" style="border-radius: 100%" />
    <style>
      .update {
        border: 5px solid rgba(154, 60, 60, 0.416);
        border-radius: 20px;
        margin-left: 1100px;
        font-size: 20px;
        font-family: cursive;


      }

      .update:hover {
        color: rgb(175, 175, 115);
      }

    </style>
  </head>

  <body>
    <div class="background-image-container"></div>
    <div id="tit">
      <h1>Hello there</h1>
    </div>
    <button id="flip-card-btn" style=" margin-left: 70px;">Login & Signup</button>
    <a href="http://localhost/Org/flipx.php" target="_blank">
      <button type="submit" class="update" style="margin-right : 10px">Update & Delete</button>
    </a>



    <div class="im">
      <div class="card">
        <div class="card-inner">
          <div class="card-front" id="front">
            <!-- المحتوى الأمامي للكارت -->
            <form action="http://localhost/Org/logincode.php" method="POST" id="form_log">
              <h1 style=" font-family: cursive ;">Login</h1>
              <label for="phone">Phone :</label>
              <input type="tel" placeholder="ex : 012********" id="phone"  name = "phone"/>

              <label for="password">Password:</label>
              <input type="password" placeholder="Enter your password" name ="password" />

              <a href="" target="_blank" class="Forgot_password" id="link">
                <label for="link">Forgot password</label>
              </a>

              <input type="checkbox" id="ch" />
              <label for="ch">Remember Me </label>
              <br />
              <lable style="color: #777">Don't have an account?</lable>
              <br />
              <a href="" target="_blank" class="create_acc" id="create">
                Create account
                <label for="create"></label>
              </a>
              <br />
              <br />

              <button type="submit" class="btn btn-outline-danger"> login</button>



              <b>Try another ways for login</b>

              <a href="https://www.facebook.com/" target="_blank" id="face">
                <img src="faca.png" width="35" height="35" id="face" />
                <label for="face"></label>
              </a>
              &nbsp;
              <a href="https://accounts.google.com/signin/v2/identifier?service=accountsettings&continue=https%3A%2F%2Fmyaccount.google.com%2F%3Futm_source%3Dsign_in_no_continue%26pli%3D1&ec=GAlAwAE&flowName=GlifWebSignIn&flowEntry=AddSession" target="_blank" id="google">
                <img src="google.png" width="35" height="35" id="google" />
                <label for="google"></label>
              </a>

            </form>
          </div>
          <div class="card-back">
            <!-- المحتوى الخلفي للكارت -->
            <form action="http://localhost/Org/insert.php" method="POST" id="form_sign">
              <h1 style=" font-family: cursive ;">Create Account</h1>
              <label for="email">Email:</label>
              <input type="email" placeholder="your email " name="email" id="email" required style="width: 100%;padding: 12px 20px;border: none;border-radius: 4px;box-sizing: border-box;background-color: #e7e7e7; color: #333;" />

              <label>Phone number :</label> <br />
              <input type="tel" pattern="01[0125][0-9]{8}" placeholder="your phone number " name="phone" id="phone" required />
              <br />
              <label>Password:</label>
              <input type="password" placeholder="password" name="password" id="password" minlength="8" required />

              <label>Confirm your password:</label> <br />
              <input type="password" placeholder="Confirm password" name="confirm_password" id="confirm_password" minlength="8" required />
              <br>
              <br>
              <label>What's your date of pregnency ?</label>
              <input type="date" name="date" id="date" min="1920-01-01" required />
              <br />
              <input type="checkbox" id="Ch" />
              <label for="Ch">Iam not a robot</label>
              <br />
              <br />
              <a href="#" target="_blank" id="signup">
                <button type="submit" class="btn btn-outline-danger"> Signup</button>
              </a>
              <b>Try anthor Ways for signup</b>
              <a href="https://www.facebook.com/" target="_blank" id="face">
                <img src="faca.png" width="35" height="35" id="face" />
                <label for="face">
                </label>
              </a>
              &nbsp; &nbsp;
              <a href="https://www.google.com/" target="_blank" id="google">
                <img src="google.png" width="35" height="35" id="google" />
                <label for="googel">
                </label>
              </a>
              <b>Have an account?</b>
              <a href="localhost/Org/login.php" target="_blank" id="flip-card-btn-">
                <button type="submit" class="btn btn-outline-danger">login</button>
              </a>
              <br />
            </form>
          </div>
        </div>
      </div>
    </div>

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
