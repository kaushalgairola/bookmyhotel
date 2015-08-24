<table>
    <form action="contact.php" method="POST" id="contact_form">
        <tr>
            <td>Name</td>
            <td><input type="text" name="name"/></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email"/></td>
        </tr>
        <tr>
            <td>Contact Number</td>
            <td><input type="text" name="contact_number"/></td>
        </tr>
        <tr>
            <td>Booking number if any</td>
            <td><input type="text" name="b_number"/></td>
        </tr>
        <tr>
            <td>Message</td>
            <td><textarea name="message"></textarea></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="contact_form" value="Submit Quote"/></td>
        </tr>

    </form>
    <script type="text/javascript">
         var frmvalidator = new Validator("contact_form");
         frmvalidator.addValidation("name","req","Please enter your Name");
         frmvalidator.addValidation("email","req","Please enter your \n email address");
         frmvalidator.addValidation("email","email");
         frmvalidator.addValidation("contact_number","req","Please enter your \n contact number");
         frmvalidator.addValidation("contact_number","numeric","Please enter numeric value");
         frmvalidator.addValidation("message","req","Please enter your \n message");
    </script>
</table>