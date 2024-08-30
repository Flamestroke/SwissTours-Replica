<?php
session_start();

// Logic

$showError = false;

if (isset($_POST['check_availability'])) {
    include 'components/_dbconnect.php';
    $city = $_POST["shitty"];

    $sql = "SELECT * FROM destination WHERE `name`=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $city);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($data = mysqli_fetch_assoc($result)) {
        $did = $data['did'];
    }

    $day1 = strtotime($_POST["start_date"]);
    $start_date = date('m-d-Y', $day1);
    // echo $start_date;
    // $start_date = $_POST["start_date"];


    $sql = "SELECT * FROM itineraries WHERE `start_date`< ? AND destination_id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $start_date, $did);
    $stmt->execute();
    $result = $stmt->get_result();
    $num = mysqli_num_rows($result);

    if ($num == 1) {
        $_SESSION['did'] = $did;
        $showError = false;
        header("location: iti.php");
    } else {
        $showError = "invalid error";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home</title>
    <link rel="icon" type="image/x-icon" href="assets/img/logo/swisslogo.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i&amp;display=swap">
    <script src="https://kit.fontawesome.com/8ab5402ffb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/css/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/vanilla-zoom.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.0/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/ui/1.14.0/jquery-ui.js"></script>
</head>

<body>
    <!-- Header -->
    <?php require 'components/_nav.php' ?>

    <div class="main-content" id="itinerary_search">
        <div class="container-fluid" style="position: relative; padding-top: 110px; z-index: 9;">
            <div class="mt-5">
                <div>
                    <section style="position: relative; min-height: 500px;">
                        <!-- Carousel -->
                        <div class="caro">
                            <div class="slider dark ">
                                <div class="carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000" id="carousel-1">
                                    <div class="carousel-inner" style="height: 500px;">
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
                                </div>
                            </div>
                        </div>
                        <!-- Itinerary Form -->
                        <div class="formrow container-fluid maxwidth">
                            <div class="formouter mlr container-fluid" style="z-index: 99;">
                                <div>
                                    <h2>Fully Automated Swiss Itinerary</h2>
                                    <?php
                                    echo $city ." ". $start_date ." ". $did;
                                    ?>
                                    <span class="text1_border"></span>
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="form">
                                            <div class="row" style="margin:auto;">
                                                <!-- Check-In -->
                                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                    <div class="input" data-date="" data-date-format="dd MM yyyy">
                                                        <span style="background: #fff;border: none;opacity:1">
                                                            <img src="https://www.swisstours.com/images/Itinerary/calender-ico.svg" alt="Calendar" />
                                                        </span>
                                                        <input class="inputs" type="text" id="start_date" name="start_date" placeholder="Check In" aria-describedby="check-in" readonly="" />
                                                    </div>
                                                </div>
                                                <!-- Check-Out -->
                                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                    <div class="input">
                                                        <span style="background: #fff;border: none;opacity:1">
                                                            <img src="https://www.swisstours.com/images/Itinerary/calender-ico.svg" alt="Calendar" />
                                                        </span>
                                                        <input class="inputs" type="text" id="end_date" name="end_date" placeholder="Check Out" aria-describedby="check-out" readonly="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Nearest City -->
                                            <div class="row" style="margin:auto;">
                                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                    <p class="w-100 input_head">Nearest City</p>
                                                    <div class="input mr_b10">
                                                        <span style="background: #fff;border: none;opacity:1">
                                                            <img src="https://www.swisstours.com/images/Itinerary/location-ico.svg" alt="Calendar" />
                                                        </span>
                                                        <select class="input" name="shitty" id="shitty">
                                                            <optgroup label="Select Nearest City">
                                                                <option value="NearestCity" selected="">Nearest City</option>
                                                                <option value="Ahemdabad">Ahmedabad</option>
                                                                <option value="Bangalore">Bangalore</option>
                                                                <option value="Chennai">Chennai</option>
                                                                <option value="Delhi&amp;Gurgaon">Delhi&amp;Gurgaon</option>
                                                                <option value="Kolkata">Kolkata</option>
                                                                <option value="Mumbai">Mumbai</option>
                                                                <option value="Pune">Pune</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- Duration -->
                                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                    <p class="w-100 input_head">Duration</p>
                                                    <div class="input mr_b10">
                                                        <span style="background: #fff;border: none;opacity:1">
                                                            <img style="margin: auto;" src="https://www.swisstours.com/images/Itinerary/nights-ico.svg" alt="Calendar" />
                                                        </span>
                                                        <input class="input" type="text" name="Duration" id="Duration" placeholder="Nights" readonly="">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- No of Adults -->
                                            <div class="row" style="margin:auto;">
                                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                    <p class="w-100 input_head">Occupancy</p>
                                                    <div class="input mr_b10">
                                                        <span style="background: #fff;border: none;opacity:1">
                                                            <img src="https://www.swisstours.com/images/Itinerary/adults-ico.svg" alt="Calendar" />
                                                        </span>
                                                        <select class="input" name="nearest_city" id="nearest_city">
                                                            <optgroup label="Select Number of Adults">
                                                                <option value="1">1 Adult</option>
                                                                <option value="2" selected="">2 Adults</option>
                                                                <option value="3">3 Adults</option>
                                                                <option value="4">4 Adults</option>
                                                                <option value="5">5 Adults</option>
                                                                <option value="6">6 Adults</option>
                                                                <option value="7">7 Adults</option>
                                                                <option value="8">8 Adults</option>
                                                                <option value="9">9 Adults</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- No of Children -->
                                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                    <p class="w-100 input_head"></p>
                                                    <div class="input mr_b10">
                                                        <span style="background: #fff;border: none;opacity:1">
                                                            <img src="https://www.swisstours.com/images/Itinerary/child-ico.svg" alt="Calendar" />
                                                        </span>
                                                        <select class="input" name="nearest_city" id="nearest_city">
                                                            <optgroup label="Select Number of Children">
                                                                <option value="0" selected="">0 Child</option>
                                                                <option value="1">1 Child</option>
                                                                <option value="2">2 Children</option>
                                                                <option value="3">3 Children</option>
                                                                <option value="4">4 Children</option>
                                                                <option value="5">5 Children</option>
                                                                <option value="6">6 Children</option>
                                                                <option value="7">7 Children</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row" style="margin:auto;">
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <div class="input">
                                                        <button class="btn btn-primary shadow d-block w-100" type="submit" name="check_availability" id="check_availability" readonly="">Check Availability</button>
                                                    </div>
                                                </div>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                </div>
                </section>

                <!-- Features -->
                <section class="features">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-5 feature-box">
                                <div class="features">
                                    <i class="fas fa-sack-dollar" style="font-size: 30px;color:orange;text-shadow:2px 2px 4px #000000;"></i>
                                    <p> Live Dynamic Pricing </p>
                                </div>
                            </div>
                            <div class="col-md-5 feature-box">
                                <div class="features">
                                    <i class="fas fa-credit-card" style="font-size:30px;color:orange;text-shadow:2px 2px 4px #000000;"></i>
                                    <p>Contactless Booking</p>
                                </div>
                            </div>
                            <div class="col-md-5 feature-box">
                                <div class="features">
                                    <i class="fas fa-circle-info" style="font-size:30px;color:orange;text-shadow:2px 2px 4px #000000;"></i>
                                    <p>In-Depth Itinerary Information</p>
                                </div>
                            </div>
                            <div class="col-md-5 feature-box">
                                <div class="features">
                                    <i class="fas fa-ticket" style="font-size:30px;color:orange;text-shadow:2px 2px 4px #000000;"></i>
                                    <p>Instant e-Voucher</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    </div>

    <!-- Mid-Nav -->
    <div id="sticky-anchor"></div>
    <section class="scrollstick">
        <div class="row mid-nav">
            <ul class="nav mid-nav">
                <li>
                    <a href="#itinerary_search">Itinerary Search</a>
                </li>
                <li>
                    <a href="#benefits">Benefits</a>
                </li>
                <li>
                    <a href="#FAQ">F.A.Q's</a>
                </li>
            </ul>
        </div>
    </section>

    <!-- Benefits -->
    <div id="benefits"></div>
    <section class="clean-block about-us">
        <div class="container">
            <div class="block-heading">
                <h2 class="text1">Complete Switzerland Package</h2>
                <span class="text1_border"></span>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-sm-12 itinerary_package_grid-item package_grid_item-1">
                    <a href="#" class="itinerary_grid-item-box" style="cursor: unset;">
                        <div class="itinerary_pacakge_grid-item-info">
                            <h3 class="itinerary_package_grid_item-title">Swiss travel pass</h3>
                            <p class="itinerary_package_grid_item-subtitle">Access to unlimited travel across Switzerland by train, bus, and boat - whether you vacation for 3, 4, 8 or 15 days.</p>

                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 itinerary_package_grid-item package_grid_item-2">
                    <a href="#" class="itinerary_grid-item-box" style="cursor: unset;">
                        <div class="itinerary_pacakge_grid-item-info">
                            <h3 class="itinerary_package_grid_item-title">Self Drive</h3>
                            <p class="itinerary_package_grid_item-subtitle">From quaint mesmerizing villages to the hustle & bustle of city life, experience it all with a self drive in this alpine paradise. </p>

                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 itinerary_package_grid-item package_grid_item-3">
                    <a href="#" class="itinerary_grid-item-box" style="cursor: unset;">
                        <div class="itinerary_pacakge_grid-item-info">
                            <h3 class="itinerary_package_grid_item-title">Accomodation</h3>
                            <p class="itinerary_package_grid_item-subtitle">Stay at a central location in the heart of Switzerland, all chosen by our sophisticated algorithm.</p>

                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 itinerary_package_grid-item package_grid_item-4">
                    <a href="#" class="itinerary_grid-item-box" style="cursor: unset;">
                        <div class="itinerary_pacakge_grid-item-info">
                            <h3 class="itinerary_package_grid_item-title">Visa assistance</h3>
                            <p class="itinerary_package_grid_item-subtitle">Overwhelmed by the visa process? Don't be. Our Swiss Travel Experts assist you throughout the visa application.</p>

                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 itinerary_package_grid-item package_grid_item-5">
                    <a href="#" class="itinerary_grid-item-box" style="cursor: unset;">
                        <div class="itinerary_pacakge_grid-item-info">
                            <h3 class="itinerary_package_grid_item-title">Excursions & Sightseeing</h3>
                            <p class="itinerary_package_grid_item-subtitle">Conquer Jungfrau, the top of Europe or take pictures with world's most photographed mountain - Matterhorn. Also, add more excursions!</p>

                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- FAQS -->
    <section id="FAQ">
        <div class="container">
            <div class="faq" style="text-align: center;">FAQs on A.I. Swiss Itinerary</div>
            <div class="quest">
                <div class="accordion w-100" id="basicAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <div class="accordButton collapsed review" type="button" data-bs-toggle="collapse" data-bs-target="#basicAccordionCollapseOne" aria-expanded="false" aria-controls="collapseOne">
                                What if I don't travel due to Covid 19 related reason?
                            </div>
                            <span></span>
                        </h2>
                        <div id="basicAccordionCollapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#basicAccordion">
                            <div class="accordion-body ">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php require 'components/_footer.php' ?>



    <!-- Scripts -->
    <!-- Sticky-Anchor Script -->
    <script type="text/javascript">
        function sticky_relocate() {
            var window_top = $(window).scrollTop();
            var div_top = $('#sticky-anchor').offset().top;
            if (window_top > div_top) {
                $('.scrollstick').addClass('stickytitle');
            } else {
                $('.scrollstick').removeClass('stickytitle');
            }
        }

        $(function() {
            $(window).scroll(sticky_relocate);
        });
    </script>

    <!-- Date-Picker Script -->
    <script>
        $(function() {
            var currentDate = new Date();

            $("#start_date").datepicker({
                minDate: currentDate,
                onSelect: function(selectedDate) {
                    var minEndDate = new Date(selectedDate);
                    minEndDate.setDate(minEndDate.getDate() + 3);

                    $("#end_date").datepicker("option", "minDate", minEndDate);
                    var endDate = $("#end_date").datepicker("getDate");
                    if (endDate) {
                        displayDaysDifference(selectedDate, endDate);
                    }
                }
            });

            $("#end_date").datepicker({
                minDate: currentDate,
                onSelect: function(selectedDate) {
                    var startDate = $("#start_date").datepicker("getDate");

                    if (startDate) {
                        displayDaysDifference(startDate, selectedDate);
                    }
                }
            });

            function displayDaysDifference(startDate, endDate) {
                var start = new Date(startDate);
                var end = new Date(endDate);

                var timeDiff = end.getTime() - start.getTime();

                var daysDiff = Math.floor(timeDiff / (1000 * 3600 * 24));

                $("#Duration").val(daysDiff + " Nights");
            }
        });
    </script>


    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/baguetteBox.min.js"></script>
    <script src="assets/js/vanilla-zoom.js"></script>
    <script src="assets/js/theme.js"></script>

    <!-- DELETE -->
    <script>
        function hehe() {
            // var email = jQuery('#refid').val();
            var pls = <?php echo $sql; ?>;
            // console.log(email);
            console.log(pls);

            // jQuery.ajax({
            //     success: function(result) {
            //         if (result == 'yes') {
            //             console.log(email);
            //             console.log("mailsent");
            //         }
            //         if (result == 'not_exist') {
            //             console.log(email);
            //             console.log("mailNOTsent");
            //         }
            //     }
            // });
        }
    </script>
</body>

</html>