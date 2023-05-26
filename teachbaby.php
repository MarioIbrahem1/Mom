<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <title>Mom I'm Here (Baby)</title>

    <!-- Website icon -->
    <link rel="website icon" type="png" href="images/LOGO.png" style="border-radius: 100%" />


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="teachbaby.css" />
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>

    <!-- Bootstrap 4 -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
  </head>

  <body>
    <div id="header">Teach Baby</div>
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
    <!-- /* ------------------------------------------------------------ */ -->

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ul class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ul>
      <br><br>
      <div class="carousel-inner">
        <div class="carousel-item ">
          <img src="images/class2.jpg" />
        </div>

        <div class="carousel-item">
          <img src="images/WhatsApp Image 2023-05-04 at 18.29.02.jpg" />
        </div>

        <div class="carousel-item active">
          <img src="images/musils.jpg" />
          <div class="carousel-caption">
            <h1>Hello..!</h1>
          </div>
        </div>
      </div>

      <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>

    <!-- /* ------------------------------------------------------------ */ -->
    <div class="sparks"></div>
    <div class="features" id="features">
      <h2 class="main-heading" id="ourservice">OurService</h2>
      <div class="container">
        <div class="box quality">
          <div class="image-holder">
            <img src="images/baby (1).jpg" alt="" />
          </div>
          <h2>subject</h2>
          <p>
            There are a lot of videos to teach your children subjects and
            languages like (Arabic English ).
          </p>
          <a href="Subject.php">Go For More</a>
        </div>
        <div class="box time">
          <div class="image-holder">
            <img src="images/music.jpg" alt="" />
          </div>
          <h2>Game</h2>
          <p>
            There are a lot of funny and edcational videos <br />And songs for
            kids
          </p>
          <a href="game_extend.php">Go For More</a>
        </div>
        <div class="box passion">
          <div class="image-holder">
            <img src="images/Gallery.jpeg" alt="" />
          </div>
          <h2>Gallery</h2>
          <p>
            There are a lot of Photo for you <br />
            ex (funny, family , etc..)
            <br />
            <br />
          </p>
          <a href="gallary.php">Go For More</a>
        </div>
      </div>
    </div>

    <!-- /* ------------------------------------------------------------ */ -->
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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-AfX0SMpfvQ4zqoN7L+AGaPem1mkWbK+sRvBZVId1CBL96Y3ueHPcWUhAwNHSrT+m" crossorigin="anonymous"></script>
  </body>

</html>
