<?php
    include_once 'includes/admin_header.inc.php';
    if (isset($_POST['update_user'])){
        $id=$_POST['id'];
        $first_name =$_POST['first_name'];
        $last_name =$_POST['last_name'];
        $username = $_POST['username'];
        $password=$_POST['password'];
        $privilege = $_POST['privilege'];
        $contact = $_POST['contact'];
        $query = "UPDATE admin SET first_name = '{$first_name}', last_name = '{$last_name}',
            username = '{$username}', password = '{$password}', privilege = '{$privilege}',
            contact ='{$contact}' WHERE id='{$id}' limit 1";
        $result = mysql_query($query);
    }
    if (isset($_POST['insert_user'])
        && $_POST['first_name'] != ''
        && $_POST['last_name'] != ''
        && $_POST['username'] != ''
        && $_POST['password'] != ''
        && $_POST['privilege'] != ''
        && $_POST['contact'] != ''    ){
        $first_name =$_POST['first_name'];
        $last_name =$_POST['last_name'];
        $username = $_POST['username'];
        $password=$_POST['password'];
        $privilege = $_POST['privilege'];
        $contact = $_POST['contact'];
        $query =  "INSERT INTO admin (id, first_name, last_name, username, password, privilege, contact)
        VALUES (NULL, '{$first_name}', '{$last_name}', '{$username}', '{$password}', '{$privilege}',
        '{$contact}')";
        $result = mysql_query($query);
        }
     if (isset($_POST['edit_hotel'])){
        $id=$_POST['id'];
        $name =$_POST['name'];
        $hotel_code =$_POST['hotel_code'];
        $city_code = $_POST['city_code'];
        $address=$_POST['address'];
        $total_rooms = $_POST['total_rooms'];
        $booked_rooms = $_POST['booked_rooms'];
        $phone = $_POST['phone'];
        $manager_id = $_POST['manager_id'];
        $fare = $_POST['fare'];
        $query = "UPDATE hotels SET
            name = '{$name}',
            hotel_code = '{$hotel_code}',
            city_code = '{$city_code}',
            address = '{$address}',
            total_rooms = '{$total_rooms}',
            booked_rooms ='{$booked_rooms}',
            phone ='{$phone}',
            manager_id ='{$manager_id}',
            fare = {$fare}
            WHERE id='{$id}' limit 1";
        $result = mysql_query($query);
    }
        if (isset($_POST['add_hotel'])){
        $name =$_POST['name'];
        $hotel_code =$_POST['hotel_code'];
        $city_code = $_POST['city_code'];
        $address=$_POST['address'];
        $total_rooms = $_POST['total_rooms'];
        $booked_rooms = $_POST['booked_rooms'];
        $phone = $_POST['phone'];
        $manager_id = $_POST['manager_id'];
        $fare = $_POST['fare'];
        $query = "INSERT INTO hotels (id,
                name, hotel_code, city_code, address, total_rooms, booked_rooms,
                phone, manager_id, fare) VALUES (NULL, '{$name}', '{$hotel_code}', '{$city_code}',
                '{$address}', '{$total_rooms}', '{$booked_rooms}', '{$phone}', '{$manager_id}','{$fare}')";
        $result = mysql_query($query);
    }
?>
          <div id="content_container">
              <div id="content">
                  <div id="content_left">

                  </div>
                  <div id="content_middle">
                      <?php
                            if(isset ($_GET['page'])){
                                $page = $_GET['page'];
                                if ($page=="users"){
                                    $db->get_users();
                                }
                                else if($page=="edit_user" && isset ($_GET['id'])){
                                    $db->edit_user();
                                }
                                else if($page=="add_user"){
                                    $db->add_user();
                                }
                                else if($page =="remove_user"){
                                    $db->remove_user();
                                }
                                else if($page =="hotels"){
                                    $db->get_hotels();
                                }
                                else if($page=="edit_hotel" && isset ($_GET['id'])){
                                    $db->edit_hotel();
                                }
                                else if($page=="add_hotel"){
                                    $db->add_hotel();
                                }
                                else if($page=="remove_hotel"){
                                    $db->remove_hotel();
                                }
                                else if($page=="customers"){
                                   $db->admin_customers();
                                }                                
                            }
                            else{
                                echo "<h1>welcome to you admin section <br/>mr. {$_SESSION['name']}</h1>";
                            }
                      ?>
                  </div>
                  <div id="content_right">
                      
                  </div>
                  <br style="clear: both"/>
              </div>
          </div>
<?php
    include_once ('includes/footer.inc.php');
?>
