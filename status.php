<?php
include_once 'includes/header.inc.php';
?>

            <div id="main_content_container">
                <div id="main_content_left">
                    <img src="images/logo.png" title="bookmyhotel.com" alt=""/>
                </div>
                <div id="main_content_right">
                    <?php
                        if(isset($_POST['get_status'])){
                            $b_code = trim($_POST['b_code']);
                            $query = "select * from customers where booking_no='{$b_code}'";
                            $result=mysql_query($query);
                            $row=mysql_fetch_array($result);
                            include_once 'includes/cust_edit.php';
                        }
                        else if(isset($_GET['b_code'])){
                            $b_code = trim($_GET['b_code']);
                            $query = "select * from customers where booking_no='{$b_code}'";
                            $result=mysql_query($query);
                            $row=mysql_fetch_array($result);
                            include_once 'includes/cust_edit.php';
                            echo "<p style='font-size:11px;color:red;'>*Please Note your Booking Number For Future Reference</p>";
                        }
                        else{
                            include_once 'includes/status_form.php';
                        }
                    ?>
                </div>
                <br style="clear:both"/>
            </div>
<?php
include_once 'includes/footer.inc.php';
?>
