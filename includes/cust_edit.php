<?php
    $query = "select name,address from hotels where hotel_code='{$row['hotel_code']}'";
    $result = mysql_query($query);
    $hotel_info = mysql_fetch_array($result);
?>
<table width="400">
    <tr>
        <td>Name</td>
        <td><?php echo $row['name'];?></td>
    </tr>
    <tr>
        <td>Contact Number</td>
        <td><?php echo $row['contact_number'];?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?php echo $row['email'];?></td>
    </tr>
    <tr>
        <td>Check in Date</td>
        <td><?php echo $row['check_in_date'];?></td>
    </tr>
    <tr>
        <td>Check Out Date</td>
        <td><?php echo $row['check_out_date'];?></td>
    </tr>
    <tr>
        <td>Hotel Name</td>
        <td><?php echo $hotel_info['name'];?></td>
    </tr>
    <tr>
        <td>Hotel Address</td>
        <td><?php echo $hotel_info['address'];?></td>
    </tr>
    <tr>
        <td>Booking Number</td>
        <td><b><?php echo $row['booking_no'];?></b></td>
    </tr>
</table>