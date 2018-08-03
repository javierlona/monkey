<?php
  require_once('../../private/initialize.php');
  require_login();
  $pageTitle = 'Clients';
  include(SHARED_PATH . '/header.php');

  // Query for all clients in DB
  $clientSet = find_all_clients();
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
                  <input class="form-control" placeholder="Search Clients..." type="text">
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
                  <?php while($client = mysqli_fetch_assoc($clientSet)) : ?>
                  <tr>
                    <td scope="row"><?php echo htmlspecialchars($client['id']); ?></td>
                    <td><?php echo htmlspecialchars($client['company_name']); ?></td>
                    <td>
                      <a class="btn btn-outline-warning" href="<?php echo './show.php?id=' . htmlspecialchars(urlencode($client['id'])); ?>" role="button">View</a>
                    </td>
                  </tr>
                <?php endwhile; ?>
                </tbody>
              </table>
              <?php mysqli_free_result($clientSet); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include(SHARED_PATH . '/footer.php'); ?>
