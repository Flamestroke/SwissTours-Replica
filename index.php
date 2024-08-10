<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i&amp;display=swap">
    <script src="https://kit.fontawesome.com/8ab5402ffb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/css/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/vanilla-zoom.min.css">
</head>

<body>
    <?php require 'components/_nav.php' ?>

    <!-- <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="image-gradient">
                    <img src="assets/img/scenery/1.png" class="d-block w-100" alt="..." />
                </div>
            </div>
            <div class="carousel-item">
                <div class="image-gradient">
                    <img src="assets/img/scenery/2.png" class="d-block w-100" alt="..." />
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div> -->




    <main class="page landing-page">

        <section class="clean-block slider dark">
            <!-- <div class="container"> -->
            <div class="carousel slide" data-bs-ride="carousel" id="carousel-1">
                <div class="carousel-inner">
                    <div class="carousel-item active"><img class="w-100 d-block" src="assets/img/scenery/1.png" alt="Slide Image"></div>
                    <div class="carousel-item"><img class="w-100 d-block" src="assets/img/scenery/2.png" alt="Slide Image"></div>
                </div>
                <div>
                    <a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carousel-1" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#carousel-1" data-bs-slide-to="1"></button>
                </div>
            </div>
            <!-- </div> -->
        </section>

        <section class="clean-block features">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5 feature-box">
                        <div class="row">
                            <i class="fa-solid fa-dollar-sign col-md-" style="font-size: 60px;color:orange;text-shadow:2px 2px 4px #000000;"></i>
                            <h4 class="col">Bootstrap 5</h4>
                        </div>
                    </div>
                    <div class="col-md-5 feature-box">
                        <i class="fas fa-clock" style="font-size:60px;color:orange;text-shadow:2px 2px 4px #000000;"></i>
                        <h4>Customizable</h4>
                    </div>
                    <div class="col-md-5 feature-box">
                        <i class="fas fa-clock" style="font-size:60px;color:orange;text-shadow:2px 2px 4px #000000;"></i>
                        <h4>Responsive</h4>
                    </div>
                    <div class="col-md-5 feature-box">
                        <i class="fas fa-clock" style="font-size:60px;color:orange;text-shadow:2px 2px 4px #000000;"></i>
                        <h4>All Browser Compatibility</h4>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="row mid-nav">
                <div class="col mid-nav-text"><a class="mid-nav-text" href="">
                        <h4>Itinerary Search</h4>
                    </a></div>
                <div class="col mid-nav-text"><a class="mid-nav-text" href="">
                        <h4>Benefits</h4>
                    </a></div>
                <div class="col mid-nav-text"><a class="mid-nav-text" href="">
                        <h4>Why Us?</h4>
                    </a></div>
                <div class="col mid-nav-text"><a class="mid-nav-text" href="">
                        <h4>F.A.Q's</h4>
                    </a></div>
            </div>
        </section>

        <section class="clean-block about-us">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">About Us</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-lg">
                        <div class="card text-center clean-card"><img class="card-img-top w-100 d-block" src="assets/img/avatars/avatar1.jpg">
                            <div class="card-body info">
                                <h4 class="card-title">John Smith</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg">
                        <div class="card text-center clean-card"><img class="card-img-top w-100 d-block" src="assets/img/avatars/avatar2.jpg">
                            <div class="card-body info">
                                <h4 class="card-title">Robert Downturn</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg">
                        <div class="card text-center clean-card"><img class="card-img-top w-100 d-block" src="assets/img/avatars/avatar3.jpg">
                            <div class="card-body info">
                                <h4 class="card-title">Ally Sanders</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg">
                        <div class="card text-center clean-card"><img class="card-img-top w-100 d-block" src="assets/img/avatars/avatar3.jpg">
                            <div class="card-body info">
                                <h4 class="card-title">Ally Sanders</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>







        <section>
            <div class="container" id="FAQ">
                <br />
                <div class="row">
                    <div class="col-sm faq">Frequently <br />Asked <br />Questions</div>
                    <div class="col-sm quest">
                        <div class="accordion w-100" id="basicAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button
                                        class="accordion-button collapsed review"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#basicAccordionCollapseOne"
                                        aria-expanded="false"
                                        aria-controls="collapseOne">
                                        What if I don't travel due to Covid 19 related reason?
                                    </button>
                                </h2>
                                <div
                                    id="basicAccordionCollapseOne"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingOne"
                                    data-bs-parent="#basicAccordion">
                                    <div class="accordion-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                        irure dolor in reprehenderit in voluptate velit esse cillum
                                        dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                        cupidatat non proident, sunt in culpa qui officia deserunt
                                        mollit anim id est laborum.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button
                                        class="accordion-button collapsed review"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#basicAccordionCollapseTwo"
                                        aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        Are these individual packages or group packages?
                                    </button>
                                </h2>
                                <div
                                    id="basicAccordionCollapseTwo"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingTwo"
                                    data-bs-parent="#basicAccordion">
                                    <div class="accordion-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                        irure dolor in reprehenderit in voluptate velit esse cillum
                                        dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                        cupidatat non proident, sunt in culpa qui officia deserunt
                                        mollit anim id est laborum.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button
                                        class="accordion-button collapsed review"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#basicAccordionCollapseThree"
                                        aria-expanded="false"
                                        aria-controls="collapseThree">
                                        How do I get in touch with your travel planner for expert advice?
                                    </button>
                                </h2>
                                <div
                                    id="basicAccordionCollapseThree"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingThree"
                                    data-bs-parent="#basicAccordion">
                                    <div class="accordion-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                        irure dolor in reprehenderit in voluptate velit esse cillum
                                        dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                        cupidatat non proident, sunt in culpa qui officia deserunt
                                        mollit anim id est laborum.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button
                                        class="accordion-button collapsed review"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#basicAccordionCollapseFour"
                                        aria-expanded="false"
                                        aria-controls="collapseFour">
                                        Is the accommodation in hotels or apartments?
                                    </button>
                                </h2>
                                <div
                                    id="basicAccordionCollapseFour"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingFour"
                                    data-bs-parent="#basicAccordion">
                                    <div class="accordion-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                        irure dolor in reprehenderit in voluptate velit esse cillum
                                        dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                        cupidatat non proident, sunt in culpa qui officia deserunt
                                        mollit anim id est laborum.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button
                                        class="accordion-button collapsed review"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#basicAccordionCollapseFive"
                                        aria-expanded="false"
                                        aria-controls="collapseFive">
                                        How does one travel between the cities in the itinerary?
                                    </button>
                                </h2>
                                <div
                                    id="basicAccordionCollapseFive"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingFive"
                                    data-bs-parent="#basicAccordion">
                                    <div class="accordion-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                        irure dolor in reprehenderit in voluptate velit esse cillum
                                        dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                        cupidatat non proident, sunt in culpa qui officia deserunt
                                        mollit anim id est laborum.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button
                                        class="accordion-button collapsed review"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#basicAccordionCollapseSix"
                                        aria-expanded="false"
                                        aria-controls="collapseSix">
                                        Are transfers to and from the accommodation points included in the booking?
                                    </button>
                                </h2>
                                <div
                                    id="basicAccordionCollapseSix"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingSix"
                                    data-bs-parent="#basicAccordion">
                                    <div class="accordion-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                        irure dolor in reprehenderit in voluptate velit esse cillum
                                        dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                        cupidatat non proident, sunt in culpa qui officia deserunt
                                        mollit anim id est laborum.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSeven">
                                    <button
                                        class="accordion-button collapsed review"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#basicAccordionCollapseSeven"
                                        aria-expanded="false"
                                        aria-controls="collapseSeven">
                                        Is visa cost included in the itinerary?
                                    </button>
                                </h2>
                                <div
                                    id="basicAccordionCollapseSeven"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingSeven"
                                    data-bs-parent="#basicAccordion">
                                    <div class="accordion-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                        irure dolor in reprehenderit in voluptate velit esse cillum
                                        dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                        cupidatat non proident, sunt in culpa qui officia deserunt
                                        mollit anim id est laborum.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br />
            </div>
        </section>



    </main>
    <footer class="page-footer dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Sign up</a></li>
                        <li><a href="#">Downloads</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="#">Company Information</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Legal</h5>
                    <ul>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2024 Copyright Text</p>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/baguetteBox.min.js"></script>
    <script src="assets/js/vanilla-zoom.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>