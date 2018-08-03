<?php
  require_once('../../private/initialize.php');
  include(SHARED_PATH . '/header.php');
?>
  <section>
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item">
            <a href="index.php">Clients</a>
          </li>
          <li aria-current="page" class="breadcrumb-item active">John Doe</li>
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
            <a class="list-group-item list-group-item-action" href="#">Clients</a> <a class=
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
