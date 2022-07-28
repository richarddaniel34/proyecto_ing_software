<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/normalize.css" type="text/css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="./assets/css/main.css" type="text/css">
</head>
<body>
    <section class="course-header">
        <nav class="course-category">
            <ul>
                <li>
                    <a href="#">
                        <picture>
                            <source srcset="./assets/images/home.png"/>
                            <img src="./assets/images/home.png" alt=" home"/>
                        </picture>
                        <div>inicio</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <picture>
                            <source srcset="./assets/images/game.png"/>
                            <img src="./assets/images/game.png" alt=" Pascal"/>
                        </picture>
                        <div>Juegos</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <picture>
                            <source srcset="./assets/images/info.png"/>
                            <img src="./assets/images/info.png" alt=" Visual Basic 6"/>
                        </picture>
                        <div>Informacion</div>
                    </a>
                </li>
            </ul>
        </nav>
    </section>

    <section class="Course-lista-container">
        <section id="CourseFilterCourse" class="Course-lista Course-lista--principal">
            <div class="group-title">
                <h1>Juegos</h1>
            </div>
            <ul>
                <li class="CourseThumbnail hasVideo" title="The Smurfs Village Cleaning">
                  <a href="naves.php">
                    <picture>
                      <source srcset="./assets/images/spaceship.png"/>
                      <img src="./assets/images/spaceship.png" width="105" height="105" class="" alt="HTML5" />
                    </picture>
                    <div class="CourseThumbnail-description">
                      <p class="Course-title" title="Html" itemprop="name">
                        Space Invaders
                      </p>
                    </div>
                  </a>
                </li>
                <li class="CourseThumbnail hasVideo" title="The Smurfs Village Cleaning">
                    <a href="#">
                      <picture>
                        <source srcset="./assets/images/tictactoe.png"/>
                        <img src="./assets/images/tictactoe.png.png" width="105" height="105" class="" alt="CSS3" />
                      </picture>
                      <div class="CourseThumbnail-description">
                        <p class="Course-title" title="Html" itemprop="name">
                            Tic Tac Toe
                        </p>
                      </div>
                    </a>
                </li>
            </ul>
        </section>

    </section>
</body>
</html>