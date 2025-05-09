<?php include 'auth.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NERV: Home</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <header>
        <nav class="navibar">
            <div class="navidiv">
                <ul class="nav-links">
                    <li><a href="./home.php"><img class="navLogo" src="./NERV-Logo.png" alt="NERV Logo"></a></li>
                    <li><a href="./about.php"><button type="button">About</button></a></li>
                    <li><a href="https://jadedsieger.github.io/home"><button type="button">Go to Home</button></a></li>
                    <li><a href="./logout.php"><button type="button">Log Out</button></a></li>
                </ul>
            </div>
        </nav>
    </header>

    <section class="homeSec">
        <div class="vidBG">
            <video autoplay muted loop id="myVideo">
                <source src="./Evangelion-UI.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

        <!-- Only the overlay background, without content -->
        <div class="overlay"></div>

        <!-- Move content-wrapper outside of the overlay -->
        <div class="content-wrapper">
            <div class="intro">
                <h1>Welcome to NERV Command</h1>
                <p>Welcome,Dr. <?php echo $_SESSION['first_name']; ?>! You are now part of the elite force fighting to save humanity.</p>
                <p>Explore the depths of our operations and get familiar with the most important aspects of NERV.</p>
            </div>

            <div class="lore-video">
                
                <video autoplay muted loop controls>
                    <source src="./video/Neon Genesis Evangelion - Opening (Creditless) (HD - 60 fps) (1).mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                
            </div>

            <div class="nerv-info">
                <h2>Learn About NERV</h2>
                <p>This video will guide you through the history and operations of NERV, as well as our critical missions to protect humanity.</p>
                <h2>NERV Operations</h2>
                <p>Here you will find details on the various aspects of NERV, from the development of the Evangelions to our top-secret projects.</p>
                <ul>
                    <li><a href="./mod.php">Instrumentality: Broken Bonds</a></li>
                    <li><a href="./units.php">Evangelion Units</a></li>
                    <li><a href="./facilities.php">NERV Facilities</a></li>
                    <li><a href="#">Project Yashima</a></li>
                    <li><a href="#">Operation Exodus</a></li>
                </ul>
            </div>
        </div>
    </section>
<div class="footer">
                <p>&copy; <?php echo date("Y"); ?> NERV Command. All rights reserved.</p>
</div>
</body>
</html>
