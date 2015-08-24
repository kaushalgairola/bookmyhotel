<?php
include_once 'functions.php';
    class db_class{
        public function __construct() {
            $con = mysql_connect("localhost","root","nerdix");
            if (!$con)
              {
              die('Could not connect: ' . mysql_error());
              }
              else{
                  mysql_select_db('bookmyhotel');
              }
        }
        public function city_combobox(){
            $combo_query = "SELECT city, city_code from cities order by city asc";
            $combo_result = mysql_query($combo_query);
            while ($combo_row  = mysql_fetch_array($combo_result)){
                echo "<option value=\"{$combo_row['city_code']}\">".$combo_row['city']."</option>";
            }
        }
        public function city_and_codes(){
            $query = "SELECT city, city_code from cities order by city asc";
            $result = mysql_query($query);
            echo "<table border=2 width=600>";
            while ($row  = mysql_fetch_array($result)){
                echo "<tr><td>{$row['city']}</td><td>{$row['city_code']}</td>";
            }
            echo "</table>";
        }
        public function login($username, $password){
            $query="select privilege,id,first_name, last_name from admin where username='{$username}' and password='$password'";
            $result = mysql_query($query);
            if(mysql_affected_rows ()==1){
             $row = mysql_fetch_array($result);
             $privilege =$row['privilege'];
              if ($privilege=="admin"){
                  $_SESSION['id'] = $row['id'];
                  $_SESSION['name'] = $row['first_name']." ".$row['last_name'];
                  redirect_to("admin.php");
              }
              else if($privilege == "manager"){
                  $_SESSION['id'] = $row['id'];
                  $_SESSION['name'] = $row['first_name']." ".$row['last_name'];
                  redirect_to("manager.php");
              }
              else{
                  redirect_to("login.php");
              }
            }
            else
                return 0;
        }
        public function get_users(){
            $query = "select * from admin order by id asc";
            $result = mysql_query($query);
            echo "<table border='0'>";
            echo "<tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>User Name</th>
                    <th>Password</th>
                    <th>Privilege</th>
                    <th>Contact</th>
                    <th>Edit</th>
                </tr>";
            while ($row = mysql_fetch_array($result)){
                 echo "<tr>
                     <td>{$row['id']}</td>
                     <td>{$row['first_name']}</td>
                     <td>{$row['last_name']}</td>
                     <td>{$row['username']}</td>
                     <td>{$row['password']}</td>
                     <td>{$row['privilege']}</td>
                     <td>{$row['contact']}</td>
                     <td><a href=\"admin.php?page=edit_user&id={$row['id']}\">edit</a></td>
                     </tr>";
            }
            echo "</table>";
        }
        public function edit_user(){

            $query="select * from admin where id = '{$_GET['id']}' limit 1";
            $result = mysql_query($query);
            $row = mysql_fetch_array($result);
            if (mysql_affected_rows ()==1){                
                include_once '../admin/includes/edit_user.php';
            }
            else "wrong user input";
        }
        public function add_user(){
            include_once '../admin/includes/add_user.php';
        }
        public function remove_user(){
            $query = "delete from admin where id='{$_GET['id']}'";
            $result = mysql_query($query);
            redirect_to('admin.php?page=users');
        }
        public function get_hotels(){
            include_once '../admin/includes/get_hotels.php';
        }
        public function edit_hotel(){
            $query = "select * from hotels where id = {$_GET['id']} limit 1";
            $result = mysql_query($query);
            $row = mysql_fetch_array($result);
            if(mysql_affected_rows ()==1)
            include_once '../admin/includes/edit_hotel.php';
            else
                echo "wrong hotel input";
        }
        public function add_hotel(){
            include_once '../admin/includes/add_hotel.php';
        }
        public function remove_hotel(){
        $query = "delete from hotels where id='{$_GET['id']}'";
        $result = mysql_query($query);
        redirect_to('admin.php?page=hotels');
        }
        public function get_manager_hotels(){
            include_once '../admin/includes/get_manager_hotels.php';
        }
        public function edit_manager_hotel(){
            $query = "select * from hotels where id = {$_GET['id']} limit 1";
            $result = mysql_query($query);
            $row = mysql_fetch_array($result);
            if(mysql_affected_rows ()==1)
            include_once '../admin/includes/edit_manager_hotel.php';
        }
        public function manager_customers(){
            include_once '../admin/includes/manager_customers.php';
        }
        public function admin_customers(){
            include_once '../admin/includes/admin_customers.php';
        }
    }
?>
<?php
    $db = new db_class();
?>