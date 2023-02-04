<?php 

    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'project');
    
    class DB_con {

        function __construct() {
            $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
            $this->dbcon = $conn;

            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL : " . mysqli_connect_error();
            }
        }

        public function insert($id_employee, $prefix_name, $name_employee, $tel_employee, $provinces_name_th, $amphures_name_th, $districts_name_th, $address_employee, $email_employee) {
            $result = mysqli_query($this->dbcon, "INSERT INTO employee(id_employee, prefix_name, name_employee, tel_employee, provinces_name_th, amphures_name_th, districts_name_th, address_employee, email_employee) VALUES('$id_employee', '$prefix_name', '$name_employee', '$tel_employee', '$provinces_name_th', '$amphures_name_th', '$districts_name_th', '$address_employee', '$email_employee')");
            return $result;
       }

        public function fetchdata() {
            $result = mysqli_query($this->dbcon, "SELECT * FROM employee");
            return $result;
        }

        public function fetchonerecord($userid) {
            $result = mysqli_query($this->dbcon, "SELECT * FROM employee WHERE id_employee = '$userid'");
            return $result;
        }

        public function update($username, $password, $prefix_name, $name_employee, $tel_employee, $provinces, $amphures, $districts, $zip_code, $address_employee, $email_employee, $userid) {
            $result = mysqli_query($this->dbcon, "UPDATE employee SET
            username='$username',
            password='$password',  
			prefix_name='$prefix_name' ,
			name_employee='$name_employee' , 
			tel_employee='$tel_employee' ,
			id_provinces='$provinces' ,
			id_amphures='$amphures',
            id_districts='$districts',
            zip_code='$zip_code',
            address_employee='$address_employee',
            email_employee='$email_employee'   
			WHERE id_employee='$userid'
            ");
            return $result;
        }

        public function delete($userid) {
            $deleterecord = mysqli_query($this->dbcon, "DELETE FROM employee WHERE id_employee = '$userid'");
            return $deleterecord;
        }

    }
    

?>