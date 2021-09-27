<?php
    require_once "Database.php";

    class Picture extends Database{
        public function insertToTable($picture){
            $sql = "UPDATE users SET user_picture = '$picture' WHERE user_id = '2'";

            if($this->conn->query($sql)){
                return true;
            }else{
                return false;
            }
        }

        public function displayAllImages(){
            $sql = "SELECT user_picture FROM users";

            $result = $this->conn->query($sql);

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $rows[] = $row;
                } 
                return $rows;
            }
        }

        public function displaySpecificImage($id){
            $sql = "SELECT user_picture FROM users WHERE user_id = '$id'";

            $result = $this->conn->query($sql);

            return $result->fetch_assoc();
        }
    }

?>