<table id="get_hotels">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>hotel code</th>
        <th>city code</th>
        <th>address</th>
        <th>total rooms</th>
        <th>booked rooms</th>
        <th>phone</th>
        <th>manager id</th>
        <th>fare</th>
        <th>edit</th>
    </tr>
<?php
   // $manager_id = $_GET['id'];
    $query = "select * from hotels where manager_id = '{$_SESSION['id']}'";
    $result = mysql_query($query);
    if(mysql_affected_rows ()!=-1){
        while ($row = mysql_fetch_array($result)) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['hotel_code']}</td>
                    <td>{$row['city_code']}</td>
                    <td>{$row['address']}</td>
                    <td>{$row['total_rooms']}</td>
                    <td>{$row['booked_rooms']}</td>
                    <td>{$row['phone']}</td>
                    <td>{$row['manager_id']}</td>
                    <td>{$row['fare']}</td>
                    <td><a href=\"manager.php?page=edit_hotel&id={$row['id']}\">edit</a></td>
                </tr>";
        }
    }
?>
</table>