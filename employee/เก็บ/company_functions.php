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

        public function insert($id_company, $name_company, $tel_company, $provinces, $amphures, $districts, $address_company, $zip_code, $email_company) {
            $result = mysqli_query($this->dbcon, "INSERT INTO company(id_company, name_company, tel_company, provinces, amphures, districts, zip_code, address_code) VALUES('$id_company', '$name_company', '$tel_company', '$provinces', '$amphures', '$districts', '$address_company', '$zip_code', '$address_company')");
            return $result;
        }

        public function fetchdata() {
            $result = mysqli_query($this->dbcon, "SELECT * FROM company");
            return $result;
        }

        public function fetchonerecord($userid) {
            $result = mysqli_query($this->dbcon, "SELECT * FROM company WHERE id_company = '$userid'");
            return $result;
        }

        public function update($name_company, $tel_company, $provinces, $amphures, $districts, $zip_code, $address_company, $email_company, $userid) {
            $result = mysqli_query($this->dbcon, "UPDATE company SET  
			name_company='$name_company' , 
			tel_company='$tel_company' ,
			id_provinces='$provinces' ,
			id_amphures='$amphures',
            id_districts='$districts',
            zip_code='$zip_code',
            address_company='$address_company',
            email_company='$email_company'   
			WHERE id_company='$userid'
            ");
            return $result;
        }

        public function delete($userid) {
            $deleterecord = mysqli_query($this->dbcon, "DELETE FROM company WHERE id_company = '$userid'");
            return $deleterecord;
        }

    }
    

?>