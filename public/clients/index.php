<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
  <meta charset="utf-8">
  <title>Clients</title>
  <!-- Bootstrap core CSS -->
  <link crossorigin="anonymous" href=
  "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity=
  "sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="./../css/style.css" rel="stylesheet">
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
            <a class="nav-link" href="#">Welcome, monkey</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <header>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Clients</h1>
        </div>
      </div>
    </div>
  </header>
  <section>
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active"><a href="#">Dashboard</a></li>
          <li aria-current="page" class="breadcrumb-item active">Clients</li>
        </ol>
      </nav>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="list-group">
            <a class="list-group-item list-group-item-action main-colors" href="#">Dashboard</a>
            <a class="list-group-item list-group-item-action" href="index.php">Clients</a> <a class=
            "list-group-item list-group-item-action" href="https://www.linkedin.com/in/javierlona/"
            target="_blank">Meet Javier</a>
          </div>
        </div>
        <div class="col-md-9">
          <div class="card">
            <div class="card-header main-colors">
              Client List
            </div>
            <div class="card-body">
              <div class="row mb-3">
                <div class="col-md-12">
                  <input class="form-control" placeholder="Filter Clients..." type="text">
                </div>
              </div>
              <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th scope="col">ID #</th>
                    <th colspan="2" scope="col">Client Name</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td scope="row">1</td>
                    <td>Mark</td>
                    <td>
                      <a class="btn btn-outline-warning" href="show.php" role="button">View</a>
                    </td>
                  </tr>
                  <tr>
                    <td scope="row">2</td>
                    <td>Jacob</td>
                    <td>
                      <a class="btn btn-outline-warning" href="show.php" role="button">View</a>
                    </td>
                  </tr>
                  <tr>
                    <td scope="row">3</td>
                    <td>Larry</td>
                    <td>
                      <a class="btn btn-outline-warning" href="show.php" role="button">View</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <p>Copyright Monkedia &copy; 2018</p>
  </footer>
  <script src="./../js/script.js">
  </script>
  <script crossorigin="anonymous" integrity=
  "sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" src=
  "https://code.jquery.com/jquery-3.2.1.slim.min.js">
  </script>
  <script crossorigin="anonymous" integrity=
  "sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" src=
  "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js">
  </script>
  <script crossorigin="anonymous" integrity=
  "sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" src=
  "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">
  </script>
</body>
</html>
