<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link rel="stylesheet" href="project.css?=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100;400&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/ccd77ee0d5.js"></script>
</head>

<body>
    <section class="sub-header">
        <nav>
            <div class="nav-links">
                <ul>
                    <li><a href="index.php"><i class="fa fa-home"></i> HOME</a></li>
                    <li><a href="books.php"><i class="fa fa-book"></i> BOOKS</a></li>
                    <li><a href="login.php"><i class="fa fa-sign-in"></i> SIGN</a> </li>
                    <li><a href="contact.php"><i class="fa fa-comments"></i> CONTACT US</a></li>

                </ul>
            </div>
        </nav>
        <h1>Contact</h1>
    </section>

    <section class="contact">
        <div class="row1">
            <div class="feed1">Contact Details<hr></div>
            
            <div class="feed2">
                <h1>
                    Feedback
                </h1>
                <p>Write us message below<hr> </p>
            </div>
        </div>
        <div class="row">

            <div class="contact-co">
                <div>
                    <i class="fa fa-home"></i>
                    <span>

                        <h5>
                            XYZ road, PQR Building
                        </h5>
                        <p>Chandigarh,IN</p>
                    </span>
                </div>

                <div>
                    <i class="fa fa-phone"></i>
                    <span>
                        <h5>
                            9876543210
                        </h5>
                        <p>Monday to Saturday,9am to 4pm</p>
                    </span>
                </div>


                <div>
                    <i class="fa fa-envelope-o"></i>
                    <span>
                        <h5>
                            </i> libarycons14@gmail.com
                        </h5>
                        <p>For any query, Contact us</p>
                    </span>
                </div>

            </div>
            <div class="contact-co">
                <form action="form.php" method="POST">
                    <input type="text" name="name" placeholder="Enter Your Name" required>
                    <input type="email" name="email" placeholder="Enter Email" required>
                    <input type="text" name="subject" placeholder="Enter Your Subject" required>
                    <textarea type="text" name="message" rows="8" placeholder="Message"></textarea>
                    <button type="submit" class="button1">Send message</button>
                </form>

            </div>
        </div>
    </section>
</body>

</html>