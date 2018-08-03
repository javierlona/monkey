<?php
  // Performs all actions necessary to log in an admin
  function log_in_admin($admin) {
    // Renerating the ID protects the admin from session fixation.
    session_regenerate_id();
    $_SESSION['admin_id'] = $admin['admin_id'];
    $_SESSION['last_login'] = time();
    $_SESSION['username'] = $admin['username'];
    return true;
  }

  // Performs all actions necessary to log out an admin
  function log_out_admin() {
    unset($_SESSION['admin_id']);
    unset($_SESSION['last_login']);
    unset($_SESSION['username']);
    session_destroy(); // destroys the whole session
    return true;
  }

  // Call require_login() at the top of any page which needs to
  // require a valid login before granting acccess to the page.
  function require_login() {
    if(!is_logged_in()) {
      header("Location: ./login.php");
    } else {
      // Do nothing, let the rest of the page proceed
    }
  }

?>
