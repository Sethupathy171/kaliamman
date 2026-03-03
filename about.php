<?php include("lang.php"); ?>
<!DOCTYPE html>
<html lang="ta">
<head>
  <meta charset="UTF-8">
  <title><?= $lang["about"]; ?> - <?= $lang["temple_name"]; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #fff8f0;
    }

    .navbar {
      background-color: #800000;
      color: white;
      padding: 12px 0;
      text-align: center;
      position: relative;
    }

    .navbar h1 {
      margin: 0;
      font-size: 26px;
    }

    .navbar p {
      margin: 0;
    }

    .language-switch {
      position: absolute;
      top: 10px;
      right: 20px;
    }

    .language-switch a {
      color: yellow;
      font-weight: bold;
      margin-left: 10px;
      text-decoration: none;
    }

    .nav-menu {
      background-color: #b22222;
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
    }

    .nav-menu a {
      color: white;
      text-decoration: none;
      padding: 12px 20px;
      font-weight: bold;
      font-size: 15px;
    }

    .nav-menu a:hover {
      background-color: #e04444;
    }

    .banner {
      background: url('assets/images/about_kali.jpg') no-repeat center;
      background-size: cover;
      height: 250px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-shadow: 1px 1px 4px black;
    }

    .banner h2 {
      font-size: 32px;
    }

    .content {
      padding: 30px;
      max-width: 900px;
      margin: auto;
      line-height: 1.8;
      color: #333;
    }

    .content h3 {
      color: #8a1d0e;
      font-size: 24px;
    }

    .footer {
      background-color: #800000;
      color: white;
      text-align: center;
      padding: 15px;
      font-size: 14px;
    }

    .back a {
      text-decoration: none;
      background-color: #800000;
      color: white;
      padding: 10px 20px;
      border-radius: 5px;
    }

    .back {
      text-align: center;
      margin-top: 30px;
    }
  </style>
</head>
<body>

  <!-- Header -->
  <div class="navbar">
    <h1><?= $lang["temple_name"]; ?></h1>
    <p><?= $lang["slogan"]; ?></p>
    <div class="language-switch">
      <a href="?lang=en">English</a> | <a href="?lang=ta">தமிழ்</a>
    </div>
  </div>

  <!-- Navigation -->
  <div class="nav-menu">
    <a href="index.php"><?= $lang["home"]; ?></a>
    <!--a href="about.php"><?= $lang["about"]; ?></a-->
    <a href="pooja_details.php"><?= $lang["pooja_details"]; ?></a>
    <a href="event.php"><?= $lang["events"]; ?></a>
    <!--a href="donate.php"><?= $lang["donate"]; ?></a-->
    <a href="contact.php"><?= $lang["contact"]; ?></a>
  </div>

  <!-- Banner -->
  <div class="banner">
    <h2><?= $lang["about"]; ?> <?= $lang["temple_name"]; ?></h2>
  </div>

  <!-- Main Content -->
  <div class="content">
    <h3><?= $lang["history_heading"]; ?></h3>
    <p><?= $lang["history_content"]; ?></p>

    <h3><?= $lang["spiritual_heading"]; ?></h3>
    <p><?= $lang["spiritual_content"]; ?></p>

    <h3><?= $lang["community_heading"]; ?></h3>
    <p><?= $lang["community_content"]; ?></p>

    <div class="back">
      <a href="index.php">← <?= $lang["home"]; ?></a>
    </div>
  </div>

  <!-- Footer -->
  <div class="footer">
    © 2025 <?= $lang["temple_name"]; ?>. <?= $lang["rights_reserved"]; ?>
  </div>

</body>
</html>
