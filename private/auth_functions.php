<?php
  // Performs all actions necessary to log in an admin
  function log_in_admin($admin) {
    // Renerating the ID protects the admin from session fixation.
    session_regenerate_id();
    $_SESSION['admin_id'] = $admin['admin_id'];
    $_SESSION['username'] = $admin['username'];
    return true;
  }

  // Performs all actions necessary to log out an admin
  function log_out_admin() {
    unset($_SESSION['admin_id']);
    unset($_SESSION['username']);
    session_destroy(); // destroys the whole session
    return true;
  }

  // is_logged_in() contains all the logic for determining if a
  // request should be considered a "logged in" request or not.
  function is_logged_in() {
    // Having a admin_id in the session serves a dual-purpose:
    // - Its presence indicates the admin is logged in.
    // - Its value tells which admin for looking up their record.
    return isset($_SESSION['admin_id']);
  }

  // Call require_login() at the top of any page which needs to
  // require a valid login before granting acccess to the page.
  function require_login() {
    if(!is_logged_in()) {
      header("Location: " . WWW_ROOT . "/login.php");
    } else {
      // Do nothing, let the rest of the page proceed
    }
  }

?>
