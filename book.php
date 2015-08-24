<?php
include_once 'includes/header.inc.php';
if(isset($_POST['book_room'])){
    $hotel = $_POST['hotel'];
    $check_in_date = $_POST['check_in_date'];
    $check_out_date = $_POST['check_out_date'];
    $rooms_required = $_POST['rooms_required'];
    $no_of_guests = $_POST['no_of_guests'];
    $customer_name = $_POST['customer_name'];
    $email = $_POST['email'];
    $contact_number = $_POST['contact_number'];

    if($hotel!="" && $check_in_date!="" && 
       $check_out_date!="" && $customer_name!="" && $email!="" && $contact_number!=""){
    $booking_no = "bmh".rand(1000,100000).rand(100,1000);
    $query = "INSERT INTO customers (id, name,email,check_in_date,check_out_date,room_ordered,
    booking_date,guest_ordered,hotel_code,booking_no,contact_number)
        values(NULL,'{$customer_name}','{$email}','{$check_in_date}','{$check_out_date}','{$rooms_required}',
        now(),{$no_of_guests},'{$hotel}','{$booking_no}','{$contact_number}')";
    $result = mysql_query($query);
    if(mysql_affected_rows ()==1){
        redirect_to("status.php?b_code={$booking_no}");
    }
    else echo "fail";
    }
}
?>

            <div id="main_content_container">
                <div id="main_content_left">
                    <img src="images/booking.jpg"/>
                </div>
                <div id="main_content_right">
                        <?php
                            if(!isset($_POST['location'])){
                                include_once 'includes/location.php';
                            }
                            if(isset($_POST['location'])){
                                include_once 'includes/found_at_location.php';
                            }
                        ?>
                    </div>
                <br style="clear:both"/>
            </div>
<?php
include_once 'includes/footer.inc.php';
?>
