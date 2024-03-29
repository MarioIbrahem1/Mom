<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="video.css" />
    <title>Mom I'm Here (Baby/Video)</title>
    <link rel="website icon" type="png" href="images/LOGO.png" style="border-radius: 100%" />

  </head>

  <body>
    <div id="header">Baby Care</div>
    <br />
    <!-- --------------------------------------- -->
    <nav>
      <ul>
        <li><a href="http://localhost/Org/Home.php">Home</a></li>
        <li><a href="Subject.php">Subject</a></li>
        <li><a href="game_extend.php">Games</a></li>
        <li><a href="gallary.php">Gallery</a></li>
        <li><a href="video.php">Video</a></li>
        <li><a href="#ourservice">Our Service</a></li>
        <li><a href="#About">About</a></li>
        <li><a href="http://localhost/Org/login.php" target="_blank">Login</a></li>
      </ul>
    </nav>
    <!-- --------------------------------------- -->
    <br /><br />
    <div class="dropdown">
      <button class="btn btn-outline-dark dropdown-toggle" data-toggle="dropdown">
        Dropdown
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#coa">Colors & Animals</a>
        <a class="dropdown-item" href="#bop">Body parts</a>
        <a class="dropdown-item" href="#trans">Transports</a>
        <a class="dropdown-item" href="#car">Cartons</a>
      </div>
    </div>
    <br />
    <!-- --------------------------------------- -->
    <div class="sparks"></div>
    <div id="coa_all">
      <h3 id="coa">Colors & Animals</h3>
      <div class="col_tex_l">
        <p>
          The animal world is one of the largest worlds that includes a huge
          number of real and diverse organisms. The animal world has its own
          rules and laws that govern it, and which animals follow accurately and
          colors make all things around us is so good.
        </p>
      </div>

      <div>
        <video width="640" height="360" controls class="video_r" poster="images/Screenshot_1098.png">
          <source src="videos/الالوان .mp4" type="video/mp4" />
        </video>
      </div>
    </div>
    <!-- --------------------------------------- -->
    <br /><br />
    <div class="sparks"></div>

    <!-- --------------------------------------- -->
    <div id="bop_all">
      <h3 id="bop">Body parts</h3>

      <div class="S_tex_r">
        <p style="height: 200px">
          Our bodies are made up of many different parts that help us do things
          like move, breathe, and eat. Remember, it's important to take care of
          our bodies by eating healthy foods, getting enough rest, and
          exercising regularly. If you ever have any concerns about your body or
          health, be sure to talk to a trusted adult or healthcare provider.
        </p>
      </div>

      <div>
        <video width="640" height="360" controls>
          <source src="videos/اجزاء الجسم.mp4" type="video/mp4" />
        </video>
      </div>
    </div>
    <!-- --------------------------------------- -->
    <br /><br />
    <div class="sparks"></div>

    <!-- --------------------------------------- -->
    <div id="trans_all">
      <h3 id="trans">Transports</h3>

      <div class="S_tex_l">
        <p>
          Transportation means are the methods used by humans to move from one
          place to another or transport goods, connecting the world together.
          There are three types of transportation means: Maritime transportation
          means Land or ground transportation means Air transportation means.
        </p>
      </div>

      <div>
        <video width="640" height="360" controls class="video_r" poster="images/Screenshot_1097.png">
          <source src="videos/وسائل المواصلات2.mp4" type="video/mp4" />
        </video>
      </div>

      <!-- --------------------------------------- -->
      <div class="S_tex_r">
        <p>
          Transportation means are the methods used by humans to move from one
          place to another or transport goods, connecting the world together.
          There are three types of transportation means: Maritime transportation
          means Land or ground transportation means Air transportation means.
        </p>
      </div>

      <div>
        <video width="640" height="360" controls>
          <source src="videos/وسائل المواصلات.mp4" type="video/mp4" />
        </video>
      </div>
    </div>
    <!-- --------------------------------------- -->
    <br /><br />
    <div class="sparks"></div>
    <div id="car_all">
      <!-- --------------------------------------- -->

      <h3 id="car">cartons</h3>
      <br /><br /><br />
      <div>
        <video width="640" height="360" controls poster="images/Screenshot_1086.png" class="video_r" style="margin-top: 50px">
          <source src="videos/spongbob.mp4" type="video/mp4" />
        </video>
      </div>
      <!-- --------------------------------------- -->
      <br /><br /><br />
      <div>
        <video width="640" height="360" controls style="margin-left: 7px; margin-bottom: 8px">
          <source src="videos/tom and jerry.mp4" type="video/mp4" />
        </video>
      </div>
    </div>
    <!-- --------------------------------------- -->

    <button id="btn">^</button>
    <!-- --------------------------------------- -->

    <script>
      let btn = document.getElementById("btn");
      window.onscroll = function() {
        if (scrollY >= 400) {
          btn.style.display = "block";
        } else {
          btn.style.display = "none";
        }
      };
      btn.onclick = function() {
        scroll({
          left: 0,
          top: 0,
          behavior: "smooth",
        });
      };

    </script>
    <div class="sparks"></div>
    <div class="container mt-5" id="About">
      <h1>Welcome to Mom I'm Here</h1>
      <p>
        This is a website dedicated to helping parents teach their babies and
        toddlers. We offer a wide range of educational resources, including
        videos, music, and interactive activities. Our goal is to make learning
        fun and engaging for young children.
      </p>
      <p>
        Whether you're a new parent or an experienced caregiver, we have
        something for everyone. Explore our site to discover all the ways we can
        help you teach your little one.
      </p>
    </div>
    <div class="sparks"></div>
    <!-- Footer -->
    <footer class="bg-light text-center text-lg-start">
      <div class="container p-4">
        <div class="row">
          <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
            <h5 class="text-uppercase">Mom I'm Here</h5>
            <p>Teach your baby with ease</p>
          </div>
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Links</h5>
            <ul class="list-unstyled mb-0">
              <li><a href="http://localhost/Org/Home.php" class="text-dark">Home</a></li>
              <li><a href="Subject.php" class="text-dark">Subject</a></li>
              <li><a href="game_extend.php" class="text-dark">Games</a></li>
              <li><a href="gallary.php" class="text-dark">Gallery</a></li>
              <li><a href="video.php" class="text-dark">Video</a></li>
              <li><a href="#ourservice" class="text-dark">Our Service</a></li>
              <li><a href="#About" class="text-dark">About</a></li>

            </ul>
          </div>
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Contact</h5>
            <ul class="list-unstyled mb-0">
              <li><a href="#!" class="text-dark">Email Us</a></li>
              <li><a href="#!" class="text-dark">Call Us</a></li>
              <li><a href="#!" class="text-dark">Address</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2023 Mom I'm Here: Teach your baby with ease
      </div>
    </footer>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- --------------------------------------- -->
  </body>

</html>
