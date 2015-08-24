<?php
include_once 'db.php';
$test = new db_class();
//$test->city_and_codes();

         $query="select privilege from admin where username='deepak' and password='ignou'";
            $result = mysql_query($query);
            if(mysql_affected_rows ()==1){
             $row = mysql_fetch_array($result);
             $privilege = $row['privilege'];
            echo $privilege;
            }
            else
                echo "wrong query";
?>