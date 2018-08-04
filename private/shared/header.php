<?php
  isset($pageTitle) ? $pageTitle : '';
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
  <meta charset="utf-8">
  <title>Jungle Area | <?php echo $pageTitle; ?></title>
  <link rel="icon" href="<?php echo WWW_ROOT . "/images/favicon.ico"; ?>">
  <!-- Bootstrap core CSS -->
  <link crossorigin="anonymous" href=
  "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity=
  "sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="<?php echo WWW_ROOT . "/css/style.css"; ?>" rel="stylesheet">
  <!-- AJAX script -->
  <script src="<?php echo WWW_ROOT . "/js/script.js"; ?>"></script>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="#"><img alt="Monkedia Logo" class="mb-4" height="50" src=
      "./../images/Logo.png" title="Monkedia Logo" width="172"></a> <button aria-controls=
      "monkediaNav" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"
      data-target="#monkediaNav" data-toggle="collapse" type="button"><span class=
      "navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="monkediaNav">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Clients</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.linkedin.com/in/javierlona/" target="_blank">Meet
            Javier</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Welcome, <?php echo $_SESSION['username']; ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo WWW_ROOT . '/logout.php'; ?>">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <header>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1><?php echo $pageTitle; ?></h1>
        </div>
      </div>
    </div>
  </header>
