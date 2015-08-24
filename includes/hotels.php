<?php
            require_once('db.php');
            $current_city=$_GET['city_code'];
            $query = "SELECT name, hotel_code from hotels where city_code='{$current_city}' order by name asc";
            $result = mysql_query($query);
            if(mysql_affected_rows ()==0){
                echo "no hotels found";
            }
            else{
                echo "<select name=\"hotel\">
                    <option>select hotel</option>";
                while ($row  = mysql_fetch_array($result)){
                    echo "<option vlaue='{$row['hotel_code']}'>{$row['name']}</option>";
                }
                echo "</select>";
            }
?>
