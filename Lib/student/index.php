<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Library Management System</title>
    <link rel="stylesheet" href="project.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/ccd77ee0d5.js"></script>
</head>


<body>

    <?php
    if (isset($_SESSION['login_user'])) {
    ?>
        <section class="header">
            <nav>
                <div class="nav-links">
                    <ul>
                        <li><a href="index.php"><i class="fa fa-home"></i> HOME</a></li>
                        <li><a href="books.php"><i class="fa fa-book"></i> BOOKS</a></li>
                        <li><a href="profile.php"><i class="fa fa-user"></i> PROFILE</a></li>
                        <li><a href="feedback.php"><i class="fa fa-comments"></i> FEEDBACK</a></li>
                        <li class="hover"><a href="logout.php"><i class="fa fa-sign-in"></i> LOGOUT</a></li>
                    </ul>
                </div>
            </nav>
        </section>
    <?php
    } else {
    ?>
        <section class="header">
            <nav>
                <div class="nav-links">
                    <ul>
                        <li><a href="index.php"><i class="fa fa-home"></i> HOME</a></li>
                        <li><a href="books.php"><i class="fa fa-book"></i> BOOKS</a></li>
                        <li><a href="profile.php"><i class="fa fa-user"></i> PROFILE</a></li>
                        <li><a href="feedback.php"><i class="fa fa-comments"></i> FEEDBACK</a></li>
                        <li class="hover"><a href="logout.php"><i class="fa fa-sign-in"></i> LOGOUT</a></li>
                    </ul>
                </div>
            </nav>
        </section>
    <?php
    }

    ?>


    <div class="text-box">
        <h1>Online Library <br>Management</h1><br>
        <p>Checkout books, request to issue, get approved and enjoy reading..<br>
            All the hussle of going to library, <br>finding books made easy..</p>
    </div>


    <!----------------------Books-------------------------->


    <section class="books">
        <h1>Top read Books</h1>
        <p>Surely checkout these books</p>

        <div class="row">

            <a class="books-col" href="books/book1.php">
                <div class="books-col">
                    <img src="./images/wife.jpg">

                    <div class="layer">
                        <h3>The Wife Upstairs</h3>
                    </div>
                </div>
            </a>

            <a class="books-col" href="books/book2.php">
                <div class="books-col">
                    <img src="./images/nora.jpg">

                    <div class="layer">
                        <h3>NORA</h3>
                    </div>
                </div>
            </a>

            <a class="books-col" href="books/book3.php">
                <div class="books-col">
                    <img src="./images/aftershock.jpg">

                    <div class="layer">
                        <h3>AfterShocks</h3>
                    </div>
                </div>
            </a>
        </div>

    </section>



    <!----------------------footer-------------------------->

    <section class="footer">
        <h4>
            About Us
        </h4>
        <p>You can also checkout out social media platforms</p>
        <div class="icon">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-linkedin"></i>

        </div>
    </section>
    <section>

    </section>
</body>

</html>