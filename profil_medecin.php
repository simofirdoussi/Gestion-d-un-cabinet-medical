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
    <script src="js/index.js"></script>




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
                            <li class="name">nom du Médecin
                            </li>
                        </ul>
                    </div>
                <nav class="side-menu">
                <ul class="nav">
                  <li class="active"><a href="#"><span class="fa fa-user"></span> Profile</a></li> 
                  <li><a href="#"><span class="fa fa-clock-o"></span> Voir la liste des rendez-vous</a>
                  </li>
                  <li><a href="#"><span class="fa fa-credit-card"></span> Ajouter une Ordonnance</a></li>
                  
                </ul>
              </nav>
                </div>
                <div class="content-panel">
                    <h2 class="title">Profile<span class="pro-label label label-warning"></span></h2>
                    <form class="form-horizontal">
                        <fieldset class="fieldset">
                            <h3 class="fieldset-title">Personal Info</h3>
                            <div class="form-group avatar">
                                
                            <div class="col-sm-12">
                        <input type="text" id="firstName" placeholder="Nom" class="form-control" name="nom" autofocus>
                    </div>
                </div>
                <div class="form-group">

                    <div class="col-sm-12">
                        <input type="text" id="lastName" placeholder="Prénom" class="form-control" name="prénom" >
                    </div>
                </div>
                <div class="form-group">

                    <div class="col-sm-12">
                        <input type="email" id="email" placeholder="Email" class="form-control" name= "email">
                    </div>
                </div> 
                <div class="form-group"> 

                    <div class="col-sm-12">
                        <input type="text" id="speciality" placeholder="Spécialité" class="form-control" name="Spécialité" >
                    </div>
                </div>
                <div class="form-group">

                    <div class="col-sm-12">
                        <input type="text" id="department" placeholder="département" class="form-control" name="département" >
                    </div>
                </div>
                <div class="form-group">



                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-6">
                                <label class="radio-inline">
                                    <input type="password" name="password" id="password" placeholder="Nouveau Mot de passe" class="form-control" >
                                </label>
                            </div>
                            <div class="col-sm-6">
                                <label class="radio-inline">
                                    <input type="password" name="password" id="password" placeholder="Confirmer mot de passe " class="form-control" >
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                


                    <div class="col-sm-12">
                        <input type="phoneNumber" id="phoneNumber" name="numeroTel" placeholder="Numéro de téléphone" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                        </fieldset>
                        <hr>
                        <div class="form-group">
                            <div class="col-md-10 col-sm-9 col-xs-12 col-md-push-2 col-sm-push-3 col-xs-push-0">
                                <input class="btn btn-primary" type="submit" value="Update Profile">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
<body>
</div> 
</html>