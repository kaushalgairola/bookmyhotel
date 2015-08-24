<table>
    <form action="manager.php?page=hotels" method="POST">
    <tr>
        <td>id</td>
        <td><?php echo $row['id'];?><input type="hidden" name="id" value="<?php echo $row['id'];?>"/></td>
    </tr>
    <tr>
        <td>Hotel Name</td>
        <td><input type="text" name="name" value="<?php echo $row['name'];?>"/></td>
    </tr>
    <tr>
        <td>Hotel code</td>
        <td><input type="text" name="hotel_code" value="<?php echo $row['hotel_code'];?>"/></td>
    </tr>
    <tr>
        <td>Hotel City</td>
        <td>
            <select name ="city_code">
                <?php
                    $combo_query = "SELECT city, city_code from cities order by city asc";
                    $combo_result = mysql_query($combo_query);
                    while ($combo_row  = mysql_fetch_array($combo_result)){
                    echo "<option value=\"{$combo_row['city_code']}\">".$combo_row['city']."</option>";
                    }
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>Address</td>
        <td><input type="text" name="address" value="<?php echo $row['address'];?>"/></td>
    </tr>
    <tr>
        <td>Total Rooms</td>
        <td><input type="text" name="total_rooms" value="<?php echo $row['total_rooms'];?>"/></td>
    </tr>
    <tr>
        <td>Booked Rooms</td>
        <td><input type="text" name="booked_rooms" value="<?php echo $row['booked_rooms'];?>"/></td>
    </tr>
    <tr>
        <td>Phone</td>
        <td><input type="text" name="phone" value="<?php echo $row['phone'];?>"/></td>
    </tr>
    <tr>
        <td>Hotel Fare</td>
        <td><input type="text" name="fare" value="<?php echo $row['fare'];?>"></td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" name="edit_hotel" value="update hotel info"/>
            &nbsp;&nbsp;&nbsp;&nbsp; 
        </td>
    </tr>
    </form>
</table>
