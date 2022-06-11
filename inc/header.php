<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>

<!DOCTYPE html>
<html lang="en">

<!--------------- === INFO === --------------->
<!-- Theme name: JackpotMC v1.0             -->
<!-- Author: Wolfhrat                       -->
<!-- Contact:                               -->
<!--    - Discord: Wolfhrat#4433            -->
<!--    - E-mail: mojpremiumsine@gmail.com  -->
<!--------------- == ------ == --------------->

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1" name="viewport">
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 160 28" id="path">
            <path d="M32.9418651,-20.6880772 C37.9418651,-20.6880772 40.9418651,-16.6880772 40.9418651,-12.6880772 C40.9418651,-8.68807717 37.9418651,-4.68807717 32.9418651,-4.68807717 C27.9418651,-4.68807717 24.9418651,-8.68807717 24.9418651,-12.6880772 C24.9418651,-16.6880772 27.9418651,-20.6880772 32.9418651,-20.6880772 L32.9418651,-29.870624 C32.9418651,-30.3676803 33.3448089,-30.770624 33.8418651,-30.770624 C34.08056,-30.770624 34.3094785,-30.6758029 34.4782612,-30.5070201 L141.371843,76.386562" transform="translate(83.156854, 22.171573) rotate(-225.000000) translate(-83.156854, -22.171573)"></path>
        </symbol>
    </svg>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.2.1/dist/sweetalert2.min.css">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/img/JackPot_MC_Logo.png">
    <title>JackpotMC</title>
</head>

<body class="dark-theme">
    <div class="body">
        <div class="preloader-wrapper">
            <img class="big-logo" src="assets/img/JackPot_MC_Logo.png"/>
            <img class="mid-logo" src="assets/img/JackPot_MC_Logo.png"/>
        </div>
        <header class="header">
            <div class="header-top clearfix">
                <div class="btns-holder" data-aos="fade-right">
                    <a class="ip-copy-btn" id="ip-copy" data-clipboard-text="play.jackpotmc.com"><i class="fas fa-play"></i> Copy IP</a>
                    <a class="grbtn dc" href="https://discord.gg/jackpotmc" target="_blank"><span><i class="fab fa-discord" aria-hidden="true"></i> Discord</span></a>
                    <a class="grbtn store" href="https://store.jackpotmc.com/" target="_blank"><span><i class="fa fa-shopping-bag" aria-hidden="true"></i> store</span></a>
                </div>
            </div>
            <div class="header-nav">
                <div class="header-logo">
                    <a href="jackpotmc.com" target="_blank"><img src="assets/img/jackpotmc.png"/></a>
                </div>
                <div class="header-menu">
                    <div class="nav navbar-nav">
                        <ul class="navigation">
                            <li class="<?= ($activePage == 'index') ? 'active':''; ?>"><a href="index.php">Home</a></li>
                            <li class="<?= ($activePage == 'voting') ? 'active':''; ?>"><a href="voting.php">Voting</a></li>
                            <li class="<?= ($activePage == 'faq') ? 'active':''; ?>"><a href="faq.php">F.A.Q</a></li>
                            <li class="<?= ($activePage == 'leaderboards') ? 'active':''; ?>"><a href="leaderboards.php">Leaderboards</a></li>
                            <li class="<?= ($activePage == 'staff') ? 'active':''; ?>"><a href="staff.php">Staff</a></li>
                            <li class="<?= ($activePage == 'rules') ? 'active':''; ?>"><a href="rules.php">Rules</a></li>
                            <li><a class="store" target="_blank" href="https://store.jackpotmc.com/">Store</a></li>
                        </ul>
                    </div>
                    <a href="javascript:void(0);" id="mobile-nav" class="icon">
                        <i id="mobile-bars" class="fa fa-bars"></i>
                    </a>
                    <nav class="navbar-nav nav mobilenav" id="nav-menu-mob">
                        <ul>
                            <li class="<?= ($activePage == 'index') ? 'active':''; ?>"><a href="index.php">Home</a></li>
                            <li class="<?= ($activePage == 'voting') ? 'active':''; ?>"><a href="voting.php">Voting</a></li>
                            <li class="<?= ($activePage == 'faq') ? 'active':''; ?>"><a href="faq.php">F.A.Q</a></li>
                            <li class="<?= ($activePage == 'leaderboards') ? 'active':''; ?>"><a href="leaderboards.php">Leaderboards</a></li>
                            <li class="<?= ($activePage == 'staff') ? 'active':''; ?>"><a href="staff.php">Staff</a></li>
                            <li class="<?= ($activePage == 'rules') ? 'active':''; ?>"><a href="rules.php">Rules</a></li>
                            <li><a class="store" target="_blank" href="https://store.jackpotmc.com/">Store</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="header-counter">
                    <div class="counter-content" data-aos="fade-down">
                        <span class="online"><i class="fa fa-play" aria-hidden="true"></i> Currently online: <span id="mc-online" class="num"></span></span>
                    </div>
                </div>
            </div>
            <div class="header-main">
                <div class="left-side" data-aos="fade-right">
                    <img src="assets/img/JackPot_MC_Logo_2.png"/>
                </div>
                <div class="right-side">
                    <div class="text" data-aos="fade-down">
                        <span class="first">Join our server</span>
                        <span class="second">and start playing</span>
                        <span class="third">right now!</span>
                    </div>
                    <button id="ip-copy-big" class="btn join-now-btn" data-aos="fade-right" data-clipboard-text="play.jackpotmc.com"><i class="fa fa-play" aria-hidden="true"></i> Join now</button>
                </div>
            </div>
        </header>