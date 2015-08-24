<?php
include_once 'includes/header.inc.php';
if(isset($_POST['contact_form'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact_number = $_POST['contact_number'];
    $b_number = $_POST['b_number'];
    $msg = $_POST['message'];
    $to = "contact@bookmyhotel.com";
    $subject = "Book My Hotel : {$name}";
    $message="name: \n$name\n\n";
    $message.="email: \n$email\n\n";
    $message.="contact 1: \n$contact_number\n\n";
    $message.="booking number: \n$b_number\n\n";
    $message.="message: \n$msg\n\n\n";
    $headers="From: customer@bookmyhotel.com";
    if(@mail($to, $subject, $message, $headers)){
       $status = "your query has been mailed to support Staff.<br/>
                                    our staff will be revert back to you very soon.
                                    <br/>";
    }
    else
        $status = "Sorry for inconvinience. mail not been sent due to technical reasons";

}
?>

            <div id="main_content_container">
                <div id="main_content_left">
                    <img src="images/contact.gif"/>
                </div>
                <div id="main_content_right">
                        <?php
                            if(!isset($_POST['contact_form'])){
                                include_once 'includes/contact_form.php';
                            }
                            else{
                                echo $status;
                            }
                        ?>
                    </div>
                <br style="clear:both"/>
            </div>
<?php
include_once 'includes/footer.inc.php';
?>
