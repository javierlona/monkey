<?php
  require_once('../../private/initialize.php');
  $pageTitle = 'Clients';
  include(SHARED_PATH . '/header.php');

?>
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
        <?php include(SHARED_PATH . '/sidebar.php'); ?>
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
  <?php include(SHARED_PATH . '/footer.php'); ?>
