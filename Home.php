<!DOCTYPE html>
<html lang="en">
  <meta name = "viewport" content = "width=device-width,initial-scal">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@500;700&family=Prompt:wght@500&display=swap" rel="stylesheet">
    <meta charset="UTF-8" />
    <title>Mom Am Here</title>
    <link rel="website icon" type="png" href="images/LOGO.png" style="border-radius: 100%" />
    <link rel="stylesheet" href="css/home.css" />

    <!-- بيخلي الكلام يملي الشاشه -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- ناقص حاجات  -->
    <meta name="description" content="" />
  

  </head>

  <body>


    <!-------- ----------------------------------------------------------------------------------------------------------------------------- -->
    <div class="top_header">

      <header>
        <nav>
          <div class="logo">
            <h1 class="Name">mom&nbsp;Iam&nbsp;here</h1>
            <img src="images/Mother & Baby.png" alt="logo" class="logo_img" />
          </div>
          <ul>
            <li><a href="Home.php">Home</a></li>
            <li><a href="#about_us">About Us</a></li>
            <li><a href="#">Others</a></li>
            <li><a href="http://localhost/Org/login.php" class="btn">Sign in</a></li>
          </ul>
        </nav>
      </header>
      <!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
      <section class="hero-sectio">

        <div class="hero-box">
          <div class="left-box">
            <p class="ready">Are you ready?!</p>
            <h1><span>Baby Center </span></h1>
            <p class="left-para">
              Baby Center is a website dedicated to providing parents and
              parents-to-be with information and resources related to pregnancy,
              childbirth, and parenting. The website offers a wide range of
              articles, videos, and interactive tools that cover topics such as
              pregnancy health, fetal development, baby names, parenting tips,
              and more. BabyCenter also features a community section where
              parents can connect with other parents, share experiences, and ask
              questions
            </p>
            <!-- هنا هنحط اللينك الصفحه اللي بعدها  -->
            <form action="getstarted.php" target="_blank">
              <button type="submit" class="btn1 started">Get Started</button>
            </form>
          </div>
          <div class="right-box">
            <img src="https://happy-baby.themerex.net/wp-content/uploads/2017/06/img_9.png" alt="header images" class="right-img" />
          </div>
        </div>

        <!----------------------------------------------------------------------------------------------------------------------------------------------------------------->

        <p class="About"><b>About Us</b></p>
        <div id="about_us" class="cont">
          <div class="grid-container">
            <div class="box">
              <div class="imgbox">
                <img src="images/mario Ibrahem.jpeg" alt="mario">
              </div>
              <div class="content">
                <h2 class="conten1">Mario Ibrahem<br /><span class="conten1">Team Leader</span></h2>
              </div>
            </div>

            <div class="box">
              <div class="imgbox">
                <img src="images/maria.jpg" alt="maria">
              </div>
              <div class="content">
                <h2 class="conten1">Maria Fadl</h2>
              </div>
            </div>

            <div class="box">
              <div class="imgbox">
                <img src="images/mario mina.jpeg" alt="mario">
              </div>
              <div class="content">
                <h2 class="conten1">Mario Mina</h2>
              </div>
            </div>

            <div class="box">
              <div class="imgbox">
                <img src="images/Rana.jpeg" alt="mario">
              </div>
              <div class="content">
                <h2 class="conten1">Rana Abdelrahman</h2>
              </div>
            </div>

            <div class="box">
              <div class="imgbox">
                <img src="images/Shahd.jpeg" alt="mario">
              </div>
              <div class="content">
                <h2 class="conten1">Shahd Wael</h2>
              </div>
            </div>
            <div class="box">
              <div class="imgbox">
                <img src="images/abanob.jpeg" alt="mario">
              </div>
              <div class="content">
                <h2 class="conten1">Abanoub Yousry</h2>
              </div>
            </div>
          </div>
        </div>

        <button id="bottom">^</button>
      </section>
    </div>


    <!-- ----------------------------------- -->


    <script src="js/file.js"></script>
  </body>

</html>
