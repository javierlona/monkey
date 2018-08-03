<?php
  require_once('../../private/initialize.php');
  $pageTitle = 'Selected Client';
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
        <?php include(SHARED_PATH . '/sidebar.php'); ?>
        <div class="col-md-9">
          <div class="card">
            <div class="card-header main-colors">
              Client List
            </div>
            <div class="card-body">
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
