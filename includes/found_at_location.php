<?php
    $query="select city from cities where city_code='{$_POST['city']}'";
    $result=  mysql_query($query);
    $row = mysql_fetch_array($result);
    $city = $row['city'];
    $city_code=$_POST['city'];
    $query = "select name,hotel_code from hotels where city_code = '{$city_code}'";
    $result = mysql_query($query);
?>
<h3>Hotels found at location: <?php echo"$city";?></h3>
<?php
    if(mysql_affected_rows ()>0){
        include_once 'found_hotels.php';
    }
    else echo "<br><br><br><p>currently no hotels at selected location</p>";

    echo "<br><a href=\"book.php\">New Search</a>";
 ?>