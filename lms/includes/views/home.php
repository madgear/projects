<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="CSRF-TOKEN" content="<?php echo $_SESSION['csrf_key']; ?>" />
    <title><?php echo $_SESSION['lms_name']; ?></title>
    <link rel="icon" type="image/x-icon" href="./assets/img/dummy-logo.png">

    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/css/animate.min.css">
    <link rel="stylesheet" href="./assets/icons/all.css">
    <link rel="stylesheet" href="./assets/css/style.css">

    <script src="./assets/icons/all.js"></script>
    <script src="./assets/jquery/jquery.js"></script>
</head>

<body>

    <!-- <a href="login">Sign In</a>
    <a href="contactus">Contact US</a> -->

    <div class="page-navbar">
        <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top" id="page_navbar">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="./assets/img/dummy-logo.png" name="branding" alt="">
                    <span><?php echo $_SESSION['lms_name']; ?></span>
                </a>

                <!-- HAMBURGER MENU -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- END OF HAMBURGER MENU -->


                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Courses
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Aliquam auctor</a></li>
                                <li><a class="dropdown-item" href="#">Phasellus dignissim eget nisi</a></li>
                                <li><a class="dropdown-item" href="#">Aliquam auctor</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                    </ul>
                    <!-- <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> -->
                </div>

                <div class="user-action">
                    <a class="btn-default btn-signup" href="signup">Sign up</a>
                    <a class="btn-default btn-login" href="login">Log in</a>
                </div>
            </div>
        </nav>
    </div>

    <div class="page-body">
        <section class="hero-section">
            <div class="container d-flex flex-row">
                <div class="d-flex flex-column justify-content-center p-5 hero-section__left-panel">.
                    <h1 class="animation animate__fadeInLeft">Lorem ipsum dolor sit amet consectetur</h1>
                    <span class="animation animate__fadeInUp">Sed blandit quam nec euismod feugiat. Quisque lobortis arcu elit, in consequat neque elementum eget.</span>
                    <button class="btn-default apply-now">Get Started</button>
                </div>
                <div class="d-flex flex-column justify-content-center align-items-end pe-2 hero-section__right-panel">
                    <img class="animation animate__fadeInRight hero-section__img" src="./assets/img/dummy-hero.png" alt="">
                </div>
            </div>
        </section>

        <section class="features-section">
            <div class="container d-flex flex-column align-items-center">
                <h2 class="animation animate__fadeInDown">Fusce sagittis vestibulum semper</h2>
                <span>Nam varius odio eget massa finibus ullamcorper ut et ipsum</span>
                <div class="d-flex justify-content-center features-list">
                    <div class="d-flex flex-column align-items-center animation animate__fadeInDown features-list__item">
                        <img src="./assets/img/features-1.png" alt="" class="item--icon">
                        <h4 class="item--title">Curabitur consequat arcu</h4>
                        <span class="item--desc">Maecenas tincidunt laoreet velit, eu interdum nibh varius at. Suspendisse nisi lacus, cursus in nisi eget</span>
                    </div>
                    <div class="d-flex flex-column align-items-center animation animate__fadeInDown features-list__item">
                        <img src="./assets/img/features-2.png" alt="" class="item--icon">
                        <h4 class="item--title">Morbi finibus mattis</h4>
                        <span class="item--desc">Sed in eleifend nisi, quis luctus dolor. Curabitur massa odio, faucibus non lorem sed, tincidunt feugiat sem</span>
                    </div>
                    <div class="d-flex flex-column align-items-center animation animate__fadeInDown features-list__item">
                        <img src="./assets/img/features-3.png" alt="" class="item--icon">
                        <h4 class="item--title">Etiam ultrices velit sit</h4>
                        <span class="item--desc">Proin erat justo, luctus at sapien vehicula, pharetra ullamcorper enim. Quisque porta ipsum eget velit dictum</span>
                    </div>
                    <div class="d-flex flex-column align-items-center animation animate__fadeInDown features-list__item">
                        <img src="./assets/img/features-4.png" alt="" class="item--icon">
                        <h4 class="item--title">In hac habitasse platea dictumst</h4>
                        <span class="item--desc">Suspendisse dapibus elementum vehicula</span>
                    </div>
                    <div class="d-flex flex-column align-items-center animation animate__fadeInDown features-list__item">
                        <img src="./assets/img/features-5.png" alt="" class="item--icon">
                        <h4 class="item--title">Vivamus et ipsum mollis, tristique nunc vel,</h4>
                        <span class="item--desc">Praesent blandit volutpat ante et vehicula. Nunc quis est mi. Sed sed dignissim tortor, ut euismod felis</span>
                    </div>
                </div>
            </div>

        </section>

        <section class="courses-section">
            <div class="container d-flex flex-column align-items-center">
                <h2>Quisque gravida blandit est nec mattis</h2>
                <!-- <span>Ut nec magna non mi posuere malesuada vitae et nulla</span> -->
                <div class="container d-flex flex-column">
                    <div class="d-flex flex-row course__item-main">
                        <div class="d-flex justify-content-end item-main__left-panel">
                            <div class="d-flex flex-column img__cover">
                                <div class="flex-grow-1 d-flex flex-column img__cover--title">
                                    <h4 class>Class aptent taciti sociosqu</h4>
                                    <span>Sed at mauris et leo consequat posuere eu eget enim</span>
                                </div>

                                <div class="d-flex flex-row justify-content-center align-items-center img__author">
                                    <span><i class="fa-solid fa-user"></i></span>
                                    <span class="">John Doe</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-column justify-content-center item-main__right-panel">
                            <h4>Class aptent taciti sociosqu ad litora torquent per conubia </h4>
                            <button class="btn-default btn-enroll">Enroll Now</button>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center course__other">
                        <div class="d-flex flex-column img__cover">
                            <div class="flex-grow-1 d-flex flex-column img__cover--title">
                                <h5 class>Duis commodo felis in diam</h5>
                                <span>Nulla tortor nisi, malesuada a just</span>
                            </div>

                            <div class="d-flex flex-row justify-content-center align-items-center img__author">
                                <span><i class="fa-solid fa-user"></i></span>
                                <span class="">John Doe</span>
                            </div>
                        </div>
                        <div class="d-flex flex-column img__cover">
                            <div class="flex-grow-1 d-flex flex-column img__cover--title">
                                <h5 class>Praesent maximus sollicitudin</h5>
                                <span>Morbi viverra, arcu sit amet porta</span>
                            </div>

                            <div class="d-flex flex-row justify-content-center align-items-center img__author">
                                <span><i class="fa-solid fa-user"></i></span>
                                <span class="">John Doe</span>
                            </div>
                        </div>
                        <div class="d-flex flex-column img__cover">
                            <div class="flex-grow-1 d-flex flex-column img__cover--title">
                                <h5 class>Nullam vel eros risus</h5>
                                <span>Nunc imperdiet blandit eros id posuere</span>
                            </div>

                            <div class="d-flex flex-row justify-content-center align-items-center img__author">
                                <span><i class="fa-solid fa-user"></i></span>
                                <span class="">John Doe</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-section">
            <div class="container d-flex flex-column align-items-center">
                <h2>Fusce quis leo aliquet, congue augue</h2>
                <span>Proin quis est sit amet dolor faucibus congue eget vel enim</span>
                <div class="d-flex container">
                    <div class="d-flex justify-content-center align-items-end pe-2 pt-5 about-section__left-panel">
                        <img class="animation animate__fadeInDown hero-section__img" src="./assets/img/dummy-ceo.png" alt="">
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center about-section__right-panel">
                        <h2>"Integer non justo hendrerit"</h2>
                        <span>Proin mollis non turpis vitae fermentum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nam iaculis, felis eu viverra convallis, nisi dui scelerisque nisi, sed scelerisque lectus ex eu magna. Curabitur tincidunt turpis eget nibh tristique, id egestas nunc tristique.</span>
                        <button class="btn-default btn-about">More About us</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-us-section">
            <div class="container d-flex flex-row align-items-center">
                <div class="d-flex flex-column contact-us__left-panel">
                    <h2>Ut facilisis cursus nisl nec sodales</h2>
                    <span>Nulla tortor nisi, malesuada a justo sit amet, auctor molestie quam</span>
                    <button class="btn-default btn-contact">Contact Us</button>
                </div>
                <div class="contact-us__right-panel">
                    <img src="./assets/img/dummy-contact.png" alt="" srcset="">
                </div>
            </div>
        </section>


    </div>

    <footer class="footer-section">
        <div class="container-fluid d-flex flex-row flex-wrap justify-content-center">
            <div class="d-flex flex-column footer__about">
                <div class="d-flex flex-row justify-content-start align-items-center about__logo">
                    <img src="./assets/img/dummy-logo.png" alt="">
                    <span><?php echo $_SESSION['lms_name']; ?></span>
                </div>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam magna erat, sagittis viverra euismod eu</span>
                <span>@2025 Copyright, All rights reserved</span>
            </div>
            <div class="d-flex flex-column footer__contact">
                <h6>Get in Touch</h6>
                <div class="contact__item">
                    <span class="contact__item-icon"><i class="fa-solid fa-location-dot"></i></span>
                    <span class="contact__item-text">Pellentesque habitant morbi tristique senectus et netus et malesuada</span>
                </div>
                <div class="contact__item">
                    <span class="contact__item-icon"><i class="fa-solid fa-at"></i></span>
                    <span class="contact__item-text">Classaptenttaciti@email.com</span>
                </div>
                <div class="contact__item">
                    <span class="contact__item-icon"><i class="fa-solid fa-phone"></i></span>
                    <span class="contact__item-text">+69123456789 / 02-123-4567</span>
                </div>
            </div>
            <div class="footer__courses">
                <h6>Courses</h6>
                <ul>
                    <li><a href="#">Fusce luctus enim ut</a></li>
                    <li><a href="#">Cras maximus ante</a></li>
                    <li><a href="#">Nulla eget ligula</a></li>
                    <li><a href="#">Phasellus rhoncus finibus</a></li>
                </ul>
            </div>
            <div class="d-flex flex-column footer__newsletter">
                <h6>Join a newsletter</h6>
                <span>Your email</span>
                <input type="text">
                <button class="btn-default btn-subscribe">Subscribe</button>
            </div>
        </div>
    </footer>

    <script src="/assets/bootstrap/js/bootstrap.js"></script>
    <script src="./assets/js/script.js"></script>

</body>

</html>