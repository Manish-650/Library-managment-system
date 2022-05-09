<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
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
                    <li><a href="/library/admin/index.php"><i class="fa fa-home"></i> HOME</a></li>
                    <li><a href="/library/admin/books.php"><i class="fa fa-book"></i> BOOKS</a></li>
                    <li><a href="/library/admin/profile.php"><i class="fa fa-user"></i> PROFILE</a></li>
                    <li><a href="/library/admin/student.php"><i class="fa fa-users"></i> STUDENT_INFO</a></li>
                    <li><a href="/library/admin/feedback.php"><i class="fa fa-comments"></i> FEEDBACK</a></li>
                    <li><a href="/library/admin/logout.php"><i class="fa fa-sign-in"></i> LOGOUT</a></li>

                </ul>
        </nav>
        </div>

    </section>
    <section class="book">
        <div class="split">
            <div class="img_style">
                <img src="images/wife.jpg" alt="wife">
                <div class="author">
                    <div class="split">
                        <div>

                            <img src="images/rachel.jpg" alt="rachel">
                        </div>
                        <div class="about_im">
                            <h1>About Author
                                <hr>
                            </h1>
                            <h2>
                                Rachel Hawkins </h2><br>
                            <p>Rachel Hawkins is the author of Rebel Belle and the New York Times bestselling series Hex Hall. Born in Virginia and raised in Alabama, Rachel taught high school English for three years before becoming a full-time writer.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vl"></div>
            <div class="about">
                <h1>
                    The Wife Upstairs
                    <hr>
                </h1>
                <h2>by Rachel Hawkins</h2>
                <div class="para">
                    <h3>About
                        <hr>
                    </h3>
                    <p class="text">
                        A delicious twist on a Gothic classic, Rachel Hawkins's The Wife Upstairs pairs Southern charm with atmospheric domestic suspense, perfect for fans of B.A. Paris and Megan Miranda.<br><br>
                        Meet Jane. Newly arrived to Birmingham, Alabama, Jane is a broke dog-walker in Thornfield Estates—a gated community full of McMansions, shiny SUVs, and bored housewives. The kind of place where no one will notice if Jane lifts the discarded tchotchkes and jewelry off the side tables of her well-heeled clients. Where no one will think to ask if Jane is her real name.<br><br>
                        But her luck changes when she meets Eddie Rochester. Recently widowed, Eddie is Thornfield Estates’ most mysterious resident. His wife, Bea, drowned in a boating accident with her best friend, their bodies lost to the deep. Jane can’t help but see an opportunity in Eddie—not only is he rich, brooding, and handsome, he could also offer her the kind of protection she’s always yearned for.<br><br>
                        <span class="more">

                            Yet as Jane and Eddie fall for each other, Jane is increasingly haunted by the legend of Bea, an ambitious beauty with a rags-to-riches origin story, who launched a wildly successful southern lifestyle brand. How can she, plain Jane, ever measure up? And can she win Eddie’s heart before her past—or his—catches up to her?<br><br>
                            With delicious suspense, incisive wit, and a fresh, feminist sensibility, The Wife Upstairs flips the script on a timeless tale of forbidden romance, ill-advised attraction, and a wife who just won’t stay buried. In this vivid reimagining of one of literature’s most twisted love triangles, which Mrs. Rochester will get her happy ending? <br><br>
                        </span>
                    </p>

                    <button class="read_more">Read More</button>
                    <hr class="page">
                </div>
                <a href="/library/admin/books.php">
                    <button class="check">Check Availability</button>
                </a>
            </div>
        </div>

        <script src="./read.js"></script>
    </section>


</body>

</html>