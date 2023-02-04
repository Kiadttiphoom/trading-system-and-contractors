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

        public function insert($id_customer, $prefix_name, $name_customer, $tel_customer, $provinces_name_th, $amphures_name_th, $districts_name_th, $address_customer, $email_customer) {
            $result = mysqli_query($this->dbcon, "INSERT INTO customer(id_customer, prefix_name, name_customer, tel_customer, provinces_name_th, amphures_name_th, districts_name_th, address_customer, email_customer) VALUES('$id_customer', '$prefix_name', '$name_customer', '$tel_customer', '$provinces_name_th', '$amphures_name_th', '$districts_name_th', '$address_customer', '$email_customer')");
            return $result;
       }

        public function fetchdata() {
            $result = mysqli_query($this->dbcon, "SELECT * FROM customer");
            return $result;
        }

        public function fetchonerecord($userid) {
            $result = mysqli_query($this->dbcon, "SELECT * FROM customer WHERE id_customer = '$userid'");
            return $result;
        }

        public function update($prefix_name, $name_customer, $tel_customer, $provinces, $amphures, $districts, $zip_code, $address_customer, $email_customer, $userid) {
            $result = mysqli_query($this->dbcon, "UPDATE customer SET  
			prefix_name='$prefix_name' ,
			name_customer='$name_customer' , 
			tel_customer='$tel_customer' ,
			id_provinces='$provinces' ,
			id_amphures='$amphures',
            id_districts='$districts',
            zip_code='$zip_code',
            address_customer='$address_customer',
            email_customer='$email_customer'   
			WHERE id_customer='$userid'
            ");
            return $result;
        }

        public function delete($userid) {
            $deleterecord = mysqli_query($this->dbcon, "DELETE FROM customer WHERE id_customer = '$userid'");
            return $deleterecord;
        }

    }
    

?>