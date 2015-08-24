<table>
    <script type="text/javascript" src="date_input/jquery.date_input.js"></script>
    <link rel="stylesheet" href="date_input/date_input.css" type="text/css" />
    <script type="text/javascript">
        $(function() {
          $("#check_in_date").date_input();
          $("#check_out_date").date_input();
        });
    </script>
    <form action="book.php" method="POST" id="booking_form">
    <tr>
        <td>Select Hotel</td>
        <td>
            <select name="hotel">
                <option value="">Select Hotel</option>
                <?php
                    $query = "select name,hotel_code from hotels where city_code = '{$city_code}'";
                    $result = mysql_query($query);
                    while($row = mysql_fetch_array($result)){
                        echo "<option value=\"{$row['hotel_code']}\">{$row['name']}</option>\n";
                    }
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>Check in Date</td>
        <td><input type="text" name="check_in_date" id="check_in_date" />(dd/mm/yy)</td>
    </tr>
    <tr>
        <td>Check Out Date</td>
        <td><input type="text" name="check_out_date" id="check_out_date"/>(dd/mm/yy)</td>
    </tr>
    <tr>
        <td>Rooms Required</td>
        <td>
            <select name="rooms_required">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="0">other</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Number of Guests</td>
        <td>
            <select name="no_of_guests">
                <option value="1">1</option>
                <option value="2" selected="selected">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="0">other</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Name</td>
        <td><input type="text" name="customer_name"/></td>
    </tr>
    <tr>
        <td>Contact Number</td>
        <td><input type="text" name="contact_number"/></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input type="text" name="email"/></td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" name="book_room" value="Book Room"/></td>
    </tr>
    <tr>
        <td colspan="2"style="font-size:10px">*Note:: all the fields are mandatory</td>
    </tr>
    </form>
    
    <script type="text/javascript">
         var frmvalidator = new Validator("booking_form");
         frmvalidator.addValidation("hotel","req","please select a hotel");
         frmvalidator.addValidation("check_in_date","req","please select check in date");
         frmvalidator.addValidation("check_out_date","req","please select check out date");
         frmvalidator.addValidation("check_out_date","req","please select check out date");
         frmvalidator.addValidation("customer_name","req","please enter your name");
         frmvalidator.addValidation("contact_number","req","please enter your contact number");
         frmvalidator.addValidation("contact_number","numeric","please enter contact number in numbers");
         frmvalidator.addValidation("email","req","please enter email");
         frmvalidator.addValidation("email","email","please enter valid email");
    </script>
</table>
