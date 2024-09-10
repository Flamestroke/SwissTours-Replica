<?php
// session_start();

?>

<header class="nav-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg ">
            <div class="w-100 flex-column align-items-start">
                <div class="d-flex justify-content-between w-100">
                    <a class="navbar-brand logo" href="index.php"><img src="https://www.swisstours.com/images/logo.svg" alt=""></a>
                    <div>
                        <!-- <form action="/action_page.php"> -->
                        <div class="navSearch-wrapper me-4">
                            <div class="navSearch-inner">
                                <input type="text" placeholder="Search.." name="search">
                            </div>
                        </div>
                        <!-- </form> -->
                    </div>
                </div>
                <div class="collapse navbar-collapse w-100" id="navcol-1">
                    <ul class="navbar-nav mr-auto mb-2 mb-lg-0 flex-grow-1 mt-4">
                        <li class="nav-item"><a class="nav-link active" href="index.php">Flights</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php">Hotels</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php">Apartments</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php">Packages</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php">Swiss Travel Pass</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php">European Rail</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php">Attractions</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php">Blog</a></li>
                        <?php
                        if (isset($_SESSION['userId']) && $_SESSION['userId'] == true) {
                            echo '<li class="nav-item"><a class="nav-link" href="logout.php">
                            <button class="btn btn-primary shadow d-block w-100" type="submit">Log out</button>
                            </a></li>';
                        } else {
                            echo '<li class="nav-item"><a class="nav-link" href="login.php">
                            <button class="btn btn-primary shadow d-block w-100" type="submit">Log in</button>
                            </a></li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>