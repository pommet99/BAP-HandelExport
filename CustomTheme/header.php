<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
    <?php wp_head(); ?> 
</head>

<body>
<header>
<container-fluid>

<nav class="navbar navbar-light" style="margin-top:4%;">
  <div class="navbar-brand" href="">
  <img src="<?php echo get_template_directory_uri(); ?>/photos/logo.png" alt="logo">
  </div>
  <form class="form-inline my-2 my-lg-0" style="margin-left:-8%;">
      <input class="form-control mr-sm-2" type="search" placeholder="Chercher un article">
     <!-- <button class="btn btn-outline-success" type="submit">Rechercher</button> -->
    </form>
  <select class="selectpicker" data-width="fit" style="border:none;">
    <option data-content='<span class="flag-icon flag-icon-us"></span> English'>English</option>
  <option  data-content='<span class="flag-icon flag-icon-fr"></span> French'>Français</option>
</select>
</nav>

<nav class="navbar navbar-expand-lg navbar-light bg-light"> 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav justify-content-center">
      <li class="nav-item">
        <a class="nav-link" href="#">Présentation</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Catalogue</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Partenaire</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Promotion</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul>
  </div>
</nav>
 
</container-fluid>
</header>
