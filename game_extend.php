<!DOCTYPE html>
<html>

  <head>
    <title>Snake Game</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="website icon" type="png" href="images/LOGO.png" style="border-radius: 100%" />


    <style>
      /* ------------------------------------- */


      /* -------------------------------------- */
      canvas {
        border: 5px solid #ccc;
      }

      body {
        background-color: #ffffff;
        color: #000000;

      }

      .dark-mode body {
        background-color: #222222;
        color: #ffffff !important;
      }

      #mode-toggle {
        background-color: #ffffff;
        color: #000000;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
      }

      .dark-mode {
        background-color: #222222;
        color: #ffffff;
      }

      body {

        overflow-x: hidden;
        background-color: #ececec;
        padding-left: 20px;
      }

      nav {


        color: rgb(236, 220, 220);
        display: inline-block;
        overflow: hidden;
        min-width: 100%;
        margin-top: 20px;
        display: flex;
        justify-content: flex-end;


      }

      #header {
        position: absolute;
        top: 40px;
        left: 20px;
        font-size: 28px;
        color: rgb(15, 7, 7);
        padding: 10px 20px;
        border-radius: 10px;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);

      }

      #header:hover {
        transition: all 1s ease-in-out;
        background-color: #200d6a;
        box-shadow: 5px 5px 15px black, 10px 10px 15px #7d2c13;
        color: aliceblue;

      }

      nav ul {
        list-style-type: none;
        margin: 0px;
        padding: 0;
        float: right;
        margin-right: 20px;
        justify-content: space-around;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);


      }

      nav li {

        display: inline-block;

      }

      nav li a {
        display: block;
        color: #000000;
        margin-right: 50px;
        text-align: center;
        text-decoration: none;
        border-bottom: 2px solid transparent;
        padding: 14px 16px;



      }

      nav li a:hover {
        transition: all 1s ease-in-out;
        background-color: #200d6a;
        box-shadow: 5px 5px 15px black, 10px 10px 15px #7d2c13;
        color: aliceblue;
      }

      /* ------------------------------ */

    </style>
  </head>

  <body>
    <div id="header">Baby Care</div>
    <br />

    <!-- --------------------------------------- -->
    <nav>
      <ul>
        <button id="mode-toggle" class="btn btn-outline-dark" style="margin-left: 90px; ">Dark Mode</button>
        <li><a href="http://localhost/Org/Home.php">Home</a></li>
        <li><a href="Subject.php">Subject</a></li>
        <li><a href="game_extend.php">Games</a></li>
        <li><a href="gallary.php">Gallery</a></li>
        <li><a href="video.php">Video</a></li>
        <li><a href="#">Our Service</a></li>
        <li><a href="#About">About</a></li>
        <li><a href="http://localhost/Org/login.php" target="_blank">Login</a></li>
      </ul>
    </nav>

    <br />
    <br />
    <br />


    <div>

      <canvas id="canvas" width="1000" height="400"></canvas>
      <div id="score">Score: 0</div>
      <script src="snake.js"></script>
      <script>
        var canvas = document.getElementById("canvas");
        var ctx = canvas.getContext("2d");

        // Set up the game grid
        var gridSize = 10;
        var gridWidth = canvas.width / gridSize;
        var gridHeight = canvas.height / gridSize;

        // Initialize the snake
        var snake = [{
            x: 5,
            y: 5
          },
          {
            x: 4,
            y: 5
          },
          {
            x: 3,
            y: 5
          },
          {
            x: 2,
            y: 5
          },
          {
            x: 1,
            y: 5
          },
        ];
        var snakeSize = 5;

        // Set up the initial snake color and eye position

        var snakeColors = [
          "#333",
          "#00f",
          "#0f0",
          "#f00",
          " #009688",
          "#ffd700",
          "#cc2366",
          "#229631",
          "#7f4610",
          "#4f107f",
          "#0e504c",
        ];
        var currentColorIndex = 0;
        var snakeColor = snakeColors[currentColorIndex];
        var eyeX = 1;
        var eyeY = 3;

        // Initialize the food
        var food = {
          x: Math.floor(Math.random() * gridWidth),
          y: Math.floor(Math.random() * gridHeight),
        };
        var foodColor = "#f00";

        // Set up the game loop
        var direction = "right";
        var intervalId = setInterval(gameLoop, 100);

        // Set up the score counter
        var score = 0;
        var scoreDiv = document.getElementById("score");

        function gameLoop() {
          // Move the snake
          var headX = snake[0].x;
          var headY = snake[0].y;
          switch (direction) {
            case "up":
              headY--;
              break;
            case "down":
              headY++;
              break;
            case "left":
              headX--;
              break;
            case "right":
              headX++;
              break;
          }
          snake.unshift({
            x: headX,
            y: headY
          });
          if (headX == food.x && headY == food.y) {
            food.x = Math.floor(Math.random() * gridWidth);
            food.y = Math.floor(Math.random() * gridHeight);
            score++;
            scoreDiv.textContent = "Score: " + score;

            // Check if the snake color should be changed
            if (score % 5 === 0) {
              currentColorIndex = (currentColorIndex + 1) % snakeColors.length;
              snakeColor = snakeColors[currentColorIndex];
              eyeX = 1;
              eyeY = 2;
            }
          } else {
            snake.pop();
          }

          // Check for collision with walls or self
          if (
            headX < 0 ||
            headX >= gridWidth ||
            headY < 0 ||
            headY >= gridHeight
          ) {
            clearInterval(intervalId);
            alert("Game over! Score: " + score);
            return;
          }
          for (var i = 1; i < snake.length; i++) {
            if (headX == snake[i].x && headY == snake[i].y) {
              clearInterval(intervalId);
              alert("Game over! Score: " + score);
              return;
            }
          }

          // Draw the game board
          ctx.clearRect(0, 0, canvas.width, canvas.height);
          ctx.fillStyle = snakeColor;
          for (var i = 0; i < snake.length; i++) {
            ctx.fillRect(
              snake[i].x * gridSize,
              snake[i].y * gridSize,
              gridSize,
              gridSize
            );
          }

          // Draw the eyes
          ctx.fillStyle = "#fff";
          ctx.fillRect(
            snake[0].x * gridSize + (eyeX * gridSize) / 4,
            snake[0].y * gridSize + (eyeY * gridSize) / 4,
            gridSize / 4,
            gridSize / 4
          );
          ctx.fillRect(
            snake[0].x * gridSize + ((eyeX + 2) * gridSize) / 4,
            snake[0].y * gridSize + (eyeY * gridSize) / 4,
            gridSize / 4,
            gridSize / 4
          );

          // Draw the food
          ctx.fillStyle = foodColor;
          ctx.fillRect(food.x * gridSize, food.y * gridSize, gridSize, gridSize);
        }

        // Handle keyboard input
        document.addEventListener("keydown", function(event) {
          switch (event.keyCode) {
            case 37:
              if (direction != "right") direction = "left";
              break;
            case 38:
              if (direction != "down") direction = "up";
              break;
            case 39:
              if (direction != "left") direction = "right";
              break;
            case 40:
              if (direction != "up") direction = "down";
              break;
          }
        });

      </script>
      <script>
        const modeToggle = document.querySelector("#mode-toggle");
        modeToggle.addEventListener("click", () => {
          document.body.classList.toggle("dark-mode");
          if (document.body.classList.contains("dark-mode")) {
            modeToggle.innerHTML = "Light Mode";
          } else {
            modeToggle.innerHTML = "Dark Mode";
          }
        });

      </script>

  </body>

</html>
