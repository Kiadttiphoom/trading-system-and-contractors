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

        public function insert($id_unit,$name_unit) {
            $result = mysqli_query($this->dbcon, "INSERT INTO unit(id_unit, name_unit) VALUES('$id_unit', '$name_unit')");
            return $result;
       }

        public function fetchdata() {
            $result = mysqli_query($this->dbcon, "SELECT * FROM unit");
            return $result;
        }

        public function fetchonerecord_unit($userid) {
            $result = mysqli_query($this->dbcon, "SELECT * FROM unit WHERE id_unit = '$userid'");
            return $result;
        }

        public function update_unit($name_unit, $userid) {
            $result = mysqli_query($this->dbcon, "UPDATE unit SET name_unit='$name_unit' WHERE id_unit='$userid'
            ");
            return $result;
        }

        public function delete_unit($userid) {
            $deleterecord = mysqli_query($this->dbcon, "DELETE FROM unit WHERE id_unit = '$userid'");
            return $deleterecord;
        }

    }
    

?>