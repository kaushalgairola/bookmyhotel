<?php
require_once 'includes/session.php';
require_once '../includes/db.php';
    //require_once '../includes/functions.php';
    if(isset($_POST['submit'])){
       $privilege = $db->login($_POST['username'],$_POST['password']);
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>admin/book my hotel</title>
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
    <script type="text/javascript" src="../js/gen_validatorv4.js"></script>
  </head>
  <body>
      <div id="container">
          <div id="header_container">
              <div id="header">
                  <div id="header_logo">
                      <img src="images/logo.png" alt="admin" title="admin"/>
                  </div>
              </div>
          </div>
          <div id="content_container">
              <div id="content">
                  <div id="content_left">
                      <h2>Login to access your admin controls</h2>
                  </div>
                  <div id="content_middle">
                      <div id="login_table">
                          <table>
                                <form action ="login.php" method="post" id="login_form">
                                  <tr>
                                      <td>username</td>
                                      <td><input type="text" name="username" id="username"/></td>
                                  </tr>
                                  <tr>
                                      <td>password</td>
                                      <td><input type="password" name="password" id="password"/></td>
                                  </tr>
                                  <tr>
                                      <td></td>
                                      <td><input type="submit" name="submit" id="submit" value="submit"/></td>
                                  </tr>
                                </form>
                                <script type="text/javascript">
                                    var frmvalidator = new Validator("login_form");
                                    frmvalidator.addValidation("username","req","Please enter username");
                                    frmvalidator.addValidation("password","req","Please enter password");
                                </script>
                              <tr>
                                  <td colspan="2">
                                      <?php
                                        if (isset($privilege)){
                                            if($privilege==0){
                                                echo "<p style=\"color:#fff;font-weight:bold;font-size:20px;\">wrong username password</p>";
                                            }
                                        }
                                      ?>
                                  </td>
                              </tr>
                          </table>
                      </div>
                  </div>
                  <br style="clear: both"/>
              </div>
          </div>
          <div id="footer_container">
              <div id="footer">
                  <div  id="footer_text">
                      <p>copyright &copy; <?php echo date("Y");?> Deepak Sharma</p>
                  </div>
              </div>
          </div>
      </div>
  </body>
</html>
