<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include_once 'session.php';
confirm_logged_in();
include_once '../includes/db.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>manager/book my hotel</title>
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
  </head>
  <body>
      <div id="container">
          <div id="header_container">
              <div id="header">
                  <div id="header_logo">
                      <a href="manager.php"><img src="images/logo.png" alt="admin" title="admin"/></a>
                  </div>
                  <div id="admin_menu">
                      <ul>
                          <li><a href="manager.php?page=hotels">hotels</a></li>
                          <li><a href="manager.php?page=customers">customers</a></li>
                          <li><a href="includes/logout.php">logout</a></li>
                      </ul>
                  </div>

                  <div id="login_name">
                    you are logged in as <b><?php echo $_SESSION['name']; ?></b>
                  </div>
              </div>
          </div>