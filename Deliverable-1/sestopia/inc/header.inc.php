<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= (isset($pageSubTitle) && $pageSubTitle === "") ? "" : "$pageSubTitle - "; ?>Sestopia</title>
    <meta charset="utf-8">
    <meta name="description" content="<?= isset($pageDescription) ? $pageDescription : "" ?>"/> <!-- TODO -->
    <meta name="keywords" content="Software, Quality, Maintenance, Design, Process Measurement, System Requirements, Testing, Engineering, Computing Foundations"/> <!-- TODO -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="icons/favicon.png"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Font Awesome -->
	<script
      src="https://kit.fontawesome.com/5a1816f9ba.js"
      crossorigin="anonymous"
    ></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/software_maintenance.css">
</head>

<body>

<nav class="navbar navbar-inverse navbar-dark bg-dark">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="index.php" class="navbar-brand" title="Home Page"><strong>Sestopia</strong></a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="about-us.php" class="text-light" title="About Us"><strong>About Us</strong></a></li>
        </ul>
    </div>
</nav>

<header class="jumbotron text-center">
    <h1 class="text-capitalize pb-5">A Repository Of Skills</h1>
    <form class="search-form" action="search.php" method="post">
        <label for="search-query" class="visuallyhidden">Search:</label>
        <input type="text" placeholder="Search about a skill..." name="search" id="search-query">
        <button type="submit" id="search-button"><i title="search" class="fa fa-search">
                <strong> Search</strong></i>
        </button>
    </form>
</header>

<main class="container-fluid">
    <div class="row justify-content-center pt-5 pb-5" id="main">