<?php
session_start();
include 'components/_dbconnect.php';
$date = date_default_timezone_set('Asia/Kolkata');

$did = $_SESSION['did'];

$sql = "SELECT `name`,`description` FROM `itineraries` WHERE `destination_id` = '$did'";
$result = mysqli_query($conn, $sql);
?>




<?php
function displayItineraryFromDescription($title, $description)
{
    echo "<h2>" . htmlspecialchars($title) . "</h2>";

    // Split the description into days using the "Day" delimiter
    $days = explode('Day ', $description);

    foreach ($days as $day) {
        if (!empty(trim($day))) {
            // Split the day's activities by the pipe (|) delimiter
            $day_parts = explode('|', $day);
            echo "<h3>Day " . htmlspecialchars(array_shift($day_parts)) . "</h3>";
            echo "<ul>";
            foreach ($day_parts as $activity) {
                echo "<li>" . htmlspecialchars($activity) . "</li>";
            }
            echo "</ul>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Travel Itinerary</title>
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
    <style>
        body {
            font-family: Arial, sans-serif;
            margin-top: 150px;
            padding-left: 50px;
        }

        h2 {
            color: #2F4F4F;
        }

        ul {
            list-style-type: none;
            padding-left: 0;
        }

        li {
            padding: 5px 0;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <?php require 'components/_nav.php' ?>

    <h1>Available Itineraries</h1>

    <?php
    if (mysqli_num_rows($result) > 0) {
        // Loop through each row and display the itinerary
        while ($itinerary = mysqli_fetch_assoc($result)) {
            displayItineraryFromDescription($itinerary['name'], $itinerary['description']);
        }
    } else {
        echo "No itineraries found.";
    }
    // Close the database connection
    mysqli_close($conn);
    ?>

</body>

</html>