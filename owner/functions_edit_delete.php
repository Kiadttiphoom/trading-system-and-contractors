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

        public function fetchonerecord_company($userid) {
            $result = mysqli_query($this->dbcon, "SELECT * FROM company WHERE id_company = '$userid'");
            return $result;
        }

        public function update_company($name_company, $tel_company, $provinces, $amphures, $districts, $zip_code, $address_company, $email_company, $userid) {
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

        public function delete_company($userid) {
            $deleterecord = mysqli_query($this->dbcon, "DELETE FROM company WHERE id_company = '$userid'");
            return $deleterecord;
        }

        public function fetchonerecord_customer($userid) {
            $result = mysqli_query($this->dbcon, "SELECT * FROM customer WHERE id_customer = '$userid'");
            return $result;
        }

        public function update_customer($prefix_name, $name_customer, $tel_customer, $provinces, $amphures, $districts, $zip_code, $address_customer, $email_customer, $userid) {
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

        public function delete_customer($userid) {
            $deleterecord = mysqli_query($this->dbcon, "DELETE FROM customer WHERE id_customer = '$userid'");
            return $deleterecord;
        }

        public function fetchonerecord_employee($userid) {
            $result = mysqli_query($this->dbcon, "SELECT * FROM employee WHERE id_employee = '$userid'");
            return $result;
        }

        public function update_employee($username, $password, $prefix_name, $name_employee, $tel_employee, $provinces, $amphures, $districts, $zip_code, $address_employee, $email_employee, $userid) {
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

        public function delete_employee($userid) {
            $deleterecord = mysqli_query($this->dbcon, "DELETE FROM employee WHERE id_employee = '$userid'");
            return $deleterecord;
        }

        public function fetchonerecord_product($userid) {
            $result = mysqli_query($this->dbcon, "SELECT * FROM product WHERE id_product = '$userid'");
            return $result;
        }

        public function update_product($name_product, $id_type_product, $price_sell, $userid) {
            $result = mysqli_query($this->dbcon, "UPDATE product SET  
			name_product='$name_product' , 
            id_type_product='$id_type_product',
            price_sell='$price_sell'
			WHERE id_product='$userid'
            ");
            return $result;
        }

        public function delete_product($userid) {
            $deleterecord = mysqli_query($this->dbcon, "DELETE FROM product WHERE id_product = '$userid'");
            return $deleterecord;
        }

        public function fetchonerecord_type_product($userid) {
            $result = mysqli_query($this->dbcon, "SELECT * FROM type_product WHERE id_type_product = '$userid'");
            return $result;
        }

        public function update_type_product($name_type_product, $userid) {
            $result = mysqli_query($this->dbcon, "UPDATE type_product SET name_type_product='$name_type_product' WHERE id_type_product='$userid'
            ");
            return $result;
        }

        public function delete_type_product($userid) {
            $deleterecord = mysqli_query($this->dbcon, "DELETE FROM type_product WHERE id_type_product = '$userid'");
            return $deleterecord;
        }

        public function fetchonerecord_type_work($userid) {
            $result = mysqli_query($this->dbcon, "SELECT * FROM type_work WHERE id_type_work = '$userid'");
            return $result;
        }

        public function update_type_work($name_type_work, $userid) {
            $result = mysqli_query($this->dbcon, "UPDATE type_work SET name_type_work='$name_type_work' WHERE id_type_work='$userid'
            ");
            return $result;
        }

        public function delete_type_work($userid) {
            $deleterecord = mysqli_query($this->dbcon, "DELETE FROM type_work WHERE id_type_work = '$userid'");
            return $deleterecord;
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

        public function fetchonerecord_buy_detail($userid) {
            $result = mysqli_query($this->dbcon, "SELECT * FROM buy WHERE no_buy = '$userid'");
            return $result;
        }

        public function update_buy_detail($id_product, $buy_number, $price_buy, $total_buy, $userid) {
            $result = mysqli_query($this->dbcon, "UPDATE buy SET  
            id_product='$id_product',
			buy_number='$buy_number' , 
            price_buy='$price_buy',
            total_buy='$total_buy'
			WHERE no_buy='$userid'
            ");
            return $result;
        }

        public function delete_buy_detail($userid) {
            $deleterecord = mysqli_query($this->dbcon, "DELETE FROM buy WHERE no_buy = '$userid'");
            return $deleterecord;
        }

        public function fetchonerecord_sell_detail($userid) {
            $result = mysqli_query($this->dbcon, "SELECT * FROM sell WHERE no_sell = '$userid'");
            return $result;
        }

        public function update_sell_detail($id_product, $sell_number, $price_sell, $total_sell, $userid) {
            $result = mysqli_query($this->dbcon, "UPDATE sell SET  
            id_product='$id_product',
			sell_number='$sell_number', 
            price_sell='$price_sell',
            total_sell='$total_sell'
			WHERE no_sell='$userid'
            ");
            return $result;
        }

        public function delete_sell_detail($userid) {
            $deleterecord = mysqli_query($this->dbcon, "DELETE FROM sell WHERE no_sell = '$userid'");
            return $deleterecord;
        }

        public function fetchonerecord_delivery_detail($userid) {
            $result = mysqli_query($this->dbcon, "SELECT * FROM delivery WHERE no_delivery = '$userid'");
            return $result;
        }

        public function update_delivery_detail($id_product, $delivery_number, $price_delivery, $total_delivery, $userid) {
            $result = mysqli_query($this->dbcon, "UPDATE delivery SET  
            id_product='$id_product',
			delivery_number='$delivery_number', 
            price_delivery='$price_delivery',
            total_delivery='$total_delivery'
			WHERE no_delivery='$userid'
            ");
            return $result;
        }

        public function delete_delivery_detail($userid) {
            $deleterecord = mysqli_query($this->dbcon, "DELETE FROM delivery WHERE no_delivery = '$userid'");
            return $deleterecord;
        }

        public function delete_id_receipt_delivery($userid) {
            $deleterecord = mysqli_query($this->dbcon, "DELETE FROM receipt_delivery WHERE id_receipt_delivery = '$userid'");
            return $deleterecord;
        }

        public function fetchonerecord_contractor_detail($userid) {
            $result = mysqli_query($this->dbcon, "SELECT * FROM contractor WHERE no_contractor = '$userid'");
            return $result;
        }

        public function update_contractor_detail($id_type_work, $width_contractor, $hight_contractor, $contractor_number, $total_contractor, $userid) {
            $result = mysqli_query($this->dbcon, "UPDATE contractor SET  
            id_type_work='$id_type_work',
			width_contractor='$width_contractor', 
            hight_contractor='$hight_contractor',
            contractor_number='$contractor_number',
            total_contractor='$total_contractor'
			WHERE no_contractor='$userid'
            ");
            return $result;
        }

        public function delete_contractor_detail($userid) {
            $deleterecord = mysqli_query($this->dbcon, "DELETE FROM contractor WHERE no_contractor = '$userid'");
            return $deleterecord;
        }

        public function delete_id_receipt_contractor($userid) {
            $deleterecord = mysqli_query($this->dbcon, "DELETE FROM receipt_contractor WHERE id_receipt_contractor = '$userid'");
            return $deleterecord;
        }

    }
    

?>