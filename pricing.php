<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery UI Datepicker - Default functionality</title>
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
    <script>
        $(function() {
            $("#checkin").datepicker();
        });
    </script>

</head>

<body>
    <div class="formrow container-fluid maxwidth">
        <div class="formouter mlr container-fluid" style="z-index: 99;">
            <div>
                <h2>Fully Automated Swiss Itinerary</h2>
                <span class="text1_border"></span>
                <div class="form">
                    <div class="row" style="margin:auto;">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <div class="input">
                                <span style="background: #fff;border: none;opacity:1">
                                    <img src="https://www.swisstours.com/images/Itinerary/calender-ico.svg" alt="Calendar" />
                                </span>
                                <input class="inputs"  style="z-index: 9999999;" type="text" id="checkin" placeholder="Check Out" aria-describedby="check-out" readonly="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>