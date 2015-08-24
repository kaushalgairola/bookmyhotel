<?php
    include_once 'includes/manager_header.inc.php';
         if (isset($_POST['edit_hotel'])){
        $id=$_POST['id'];
        $name =$_POST['name'];
        $hotel_code =$_POST['hotel_code'];
        $city_code = $_POST['city_code'];
        $address=$_POST['address'];
        $total_rooms = $_POST['total_rooms'];
        $booked_rooms = $_POST['booked_rooms'];
        $phone = $_POST['phone'];
        $fare = $_POST['fare'];
        $query = "UPDATE hotels SET
            name = '{$name}',
            hotel_code = '{$hotel_code}',
            city_code = '{$city_code}',
            address = '{$address}',
            total_rooms = '{$total_rooms}',
            booked_rooms ='{$booked_rooms}',
            phone ='{$phone}',
            fare = {$fare}
            WHERE id='{$id}' limit 1";
        $result = mysql_query($query);
    }
?>
          <div id="content_container">
              <div id="content">
                  <div id="content_left">

                  </div>
                  <div id="content_middle">
                    <?php
                    if(isset($_GET['page'])){
                        $page = $_GET['page'];
                        if($page=="hotels"){
                            $db->get_manager_hotels();
                        }
                         else if($page=="edit_hotel"){
                            $db->edit_manager_hotel();
                        }
                        else if($page=="customers"){
                            $db->manager_customers();
                        }
                      }
                      else {
                          echo "<h2>Welcome to your admin manager section<br/>Mr. {$_SESSION['name']}<h2>";
                      }
                    ?>
                  </div>
                  <div id="content_right">
                      
                  </div>
                  <br style="clear: both"/>
              </div>
          </div>
<?php
    include_once 'includes/footer.inc.php';
?>
