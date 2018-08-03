<?php
  require_once('../../private/initialize.php');
  require_login();
  $pageTitle = 'Selected Client';
  include(SHARED_PATH . '/header.php');

  /* Check and see if there's a value passed via GET.
     If there is, use it. If not, then use this
     second value as a default instead.
  */
  $clientName = isset($_GET['company_name']) ? $_GET['company_name'] : '';
  // Find the specified client
  $client = find_client_by_name($clientName);

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
          <li aria-current="page" class="breadcrumb-item active"><?php echo htmlspecialchars($client['company_name']); ?></li>
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
                    <td scope="row"><?php echo htmlspecialchars($client['id']); ?></td>
                    <td><?php echo htmlspecialchars($client['company_name']); ?></td>
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
