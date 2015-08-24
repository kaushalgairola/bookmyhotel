<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>contact no</th>
        <th>email</th>
        <th>check in</th>
        <th>check out</th>
        <th>booking</th>
        <th>guest ord</th>
        <th>room ord</th>
        <th>hotel code</th>
        <th>booking no</th>
        <th>edit</th>
    </tr>
<?php
     $query = "select * from customers";
     $result = mysql_query($query);
     while ($row = mysql_fetch_array($result)) {
        echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['contact_number']}</td>
            <td>{$row['email']}</td>
            <td>{$row['check_in_date']}</td>
            <td>{$row['check_out_date']}</td>
            <td>{$row['booking_date']}</td>
            <td>{$row['guest_ordered']}</td>
            <td>{$row['room_ordered']}</td>
            <td>{$row['hotel_code']}</td>
            <td>{$row['booking_no']}</td>
            <td><a href=\"admin.php?page=edit_customer&id={$row['id']}\"/>edit</a></td>
        </tr>";
    }
?>

</table>