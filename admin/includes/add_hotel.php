<table border="0" cellspacing="0" cellpadding="0">
    <form action ="admin.php?page=hotels" method="POST">
    <tr>
        <td>id</td>
        <td>auto generated</td>
    </tr>
    <tr>
        <td>name</td>
        <td><input type="text" name="name" value=""/></td>
    </tr>
    <tr>
        <td>hotel code</td>
        <td><input type="text" name="hotel_code" value=""/></td>
    </tr>
    <tr>
        <td>city</td>
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
        <td>address</td>
        <td><input type="text" name="address" value=""/></td>
    </tr>
    <tr>
        <td>total rooms</td>
        <td><input type="text" name="total_rooms" value=""/></td>
    </tr>
    <tr>
        <td>booked rooms</td>
        <td><input type="text" name="booked_rooms" value=""/></td>
    </tr>
    <tr>
        <td>phone</td>
        <td><input type="text" name="phone" value=""/></td>
    </tr>
    <tr>
        <td>Manager Id</td>
        <td>
             <select name="manager_id">
             <option>assign manager</option>
            <?php 
                $m_query = "select id, first_name,last_name from admin";
                $m_result = mysql_query($m_query);
                while ($m_row = mysql_fetch_array($m_result)){
                    echo "<option value={$m_row['id']}>";
                    echo "{$m_row['first_name']} {$m_row['last_name']}</option>";
                }
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>Hotel Fare</td>
        <td><input type="text" name="fare" value="1000"/></td>
    </tr>
    <tr>
        <td colspan="2">
            <input type="submit" name="add_hotel" value="add hotel"/>
        </td>
    </tr>
    </form>
</table>
