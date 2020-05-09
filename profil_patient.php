<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>profil</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style_profil.css">
    <script src="js/custom.js"></script>
</head>
<body>
<div style="background-image: url('https://www.qare.fr/wp-content/uploads/2020/02/GettyImages-885764252-1.jpg');">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <div class="view-account">
        <section class="module">
            <div class="module-inner">
                <div class="side-bar">
                    <div class="user-info">
                        <img class="img-profile img-circle img-responsive center-block" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                        <ul class="meta list list-unstyled">
                            
                        </ul>
                    </div>
                <nav class="side-menu">
                <ul class="nav">
                  <li class="active"><a href="#"><span class="fa fa-user"></span> Profile</a></li> 
                  <li><a href="avoir_rdv.html"><span class="fa fa-clock-o"></span> Avoir rendez-vous</a></li>
                  <li><a href="#"><span class="fa fa-credit-card"></span> Voir Ordonnance</a></li>
                  <li><a href="index.php"><span class="fa fa-credit-card"></span> Accueil</a></li>

                </ul>
              </nav>
                </div>
                <div class="content-panel">
                    <h2 class="title">Profile<span class="pro-label label label-warning"></span></h2>
                    <form class="form-horizontal">
                        <fieldset class="fieldset">
                        <?php
                            if (isset($_SESSION['unserId'])) {
                                echo "<h3>".$_SESSION['unserLastname']." ". $_SESSION['unserFirstname']."</h3>";
                                echo "</fieldset><hr>";
                                echo "<h5>Email : ".$_SESSION['unserEmail']. "  </h5><br>";
                                echo "<h5>Date de naissance : ".$_SESSION['unserBirth']. "  </h5><br>";
                                echo "<h5>Genre : ".$_SESSION['unserGender']. " </h5><br>";
                            }else{
                                die("Erreur: Vous n'etes pas connecté.");
                            }
                            
                        ?>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
<body>
</div> 
</html>