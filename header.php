<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php wp_head(); ?> 
</head>

<body>
<header>
<div class=container-fullwidth>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color:white">
  <div class="navbar-brand" href="">
  <img src="<?php echo get_template_directory_uri(); ?>/photos/logo.png" alt="logo" style="padding-left: 30px">
  </div>

  <button class="navbar-toggler" style="margin-left:-100px;" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav" style="margin-left:5%;">
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/A2/wordpress/">Accueil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/A2/wordpress/catalogue/">Catalogue</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/A2/wordpress/partner/">Partenaire</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/A2/wordpress/promotion/">Promotion</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/A2/wordpress/contact/">Contact</a>
      </li>
    </ul>
  </div>
</nav>



<style>
.nav-item{
  margin-left:15%;
  margin-right:15%;
}


</style>
 
</div>
</header>
