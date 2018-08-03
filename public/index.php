<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="./css/style.css" rel="stylesheet">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#"><img class="mb-4" src="./images/Logo.png" title="Monkedia Logo" alt="Monkedia Logo" width="172" height="50"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#monkediaNav" aria-controls="monkediaNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="monkediaNav">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.linkedin.com/in/javierlona/" target="_blank">Meet Javier</a>
            </li>
        </div>
      </div>
    </nav>

    <header>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Dashboard</h1>
          </div>
        </div>
      </div>
    </header>

    <section>
      <div class="container">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <!-- <li class="breadcrumb-item active"><a href="#">Dashboard</a></li> -->
            <!-- <li class="breadcrumb-item"><a href="#">Clients</a></li> -->
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
          </ol>
        </nav>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="#" class="list-group-item list-group-item-action main-colors">Dashboard</a>
              <a href="#" class="list-group-item list-group-item-action">Clients</a>
              <a href="https://www.linkedin.com/in/javierlona/" target="_blank" class="list-group-item list-group-item-action">Meet Javier</a>
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
                    <input type="text" class="form-control" placeholder="Filter Clients...">
                  </div>
                </div>

                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th scope="col">ID #</th>
                      <th scope="col" colspan="2">Client Name</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td><a class="btn btn-outline-warning" href="#" role="button">View</a></td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td><a class="btn btn-outline-warning" href="#" role="button">View</a></td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Larry</td>
                      <td><a class="btn btn-outline-warning" href="#" role="button">View</a></td>
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


    <script src="./js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
