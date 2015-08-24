<?php
    include_once('includes/db.php');
    if(isset($_POST['hotels'])){
        echo "hello";
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlnasdfds="http://www.w3.org/1999/xhtml">
    <head>
        <title>Book My Hotel</title>
        <link  rel="stylesheet" type="text/css" href="css/style.css" />
	<script src="jquery.js" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript" src="coin-slider.min.js"></script>
        <script type="text/javascript" src="js/gen_validatorv4.js"></script>
    </head>
    <body>
        <div id="container">
            <div id="menubar_container">
                <div id="menubar">
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="book.php">BOOKING</a></li>
                        <li><a href="status.php">STATUS</a></li>
                        <li><a href="contact.php">CONTACT</a></li>
                        <br style="clear: both"/>
                    </ul>
                </div>
            </div>