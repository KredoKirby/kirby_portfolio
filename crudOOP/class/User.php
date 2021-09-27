<?php
    require_once 'Database.php';

    class User extends Database{
        // extends ~~ inheritance where User class can inherit the Database class properties

        public function createAccount($username, $password){
            $sql = "INSERT INTO accounts(username, password) VALUES('$username', '$password')";

            if($this->conn->query($sql) == false){
                die("CANNOT ADD INTO ACCOUNTS: ".$this->conn->error);
            }else{
                return true;
            }
        }

        public function createUser($first_name, $last_name, $address, $email, $contact_number){
            $user_account_id = $this->conn->insert_id;
            // insert_id ~~ will get the last used ID.

            $sql = "INSERT INTO users(first_name, last_name, address, email, contact_number, account_id) VALUES('$first_name', '$last_name', '$address', '$email', '$contact_number', '$user_account_id')";

            if($this->conn->query($sql)){
                header("Location: ../views/login.php");
            }else{
                die("CANNOT ADD INTO USER: ".$this->conn->error);
            }
        }

        public function login($username, $password){
            $sql = "SELECT * FROM accounts INNER JOIN users ON users.account_id = accounts.account_id WHERE username ='$username'";

            $result = $this->conn->query($sql);

            if($result->num_rows == 1){
                $row = $result->fetch_assoc();

                if(password_verify($password, $row['password'])){
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['first_name'] = $row['first_name'];
                    $_SESSION['last_name'] = $row['last_name'];
                    $_SESSION['status'] = $row['status'];

                    header("Location: ../views/dashboard.php");
                }else{
                    return "Invalid Password";
                }
            }else{
                return "Invalid Username";
            }
        }

        public function displayAllUsers(){
            $sql = "SELECT * FROM users INNER JOIN accounts ON accounts.account_id = users.account_id WHERE accounts.status = 'U'";

            $result = $this->conn->query($sql);

            if($result->num_rows > 0){
                while($user_details = $result->fetch_assoc()){
                    $rows[] = $user_details;
                }
                return $rows;
            }else{
                return false;
            }
        }

        public function displaySpecificUser($user_id){
            $sql = "SELECT * FROM users INNER JOIN accounts ON users.account_id = accounts.account_id WHERE users.user_id = '$user_id'";

            $result = $this->conn->query($sql);

            if($result->num_rows == 1){
                return $result->fetch_assoc();
            }else{
                return false;
            }
        }

        public function updateUserDetails($new_first_name, $new_last_name, $new_address, $new_contact_number, $new_email, $new_username, $password, $user_id){
            $sql = "UPDATE users INNER JOIN accounts ON accounts.account_id = users.account_id
                    SET users.first_name = '$new_first_name',
                        users.last_name = '$new_last_name',
                        users.address = '$new_address',
                        users.contact_number = '$new_contact_number',
                        users.email = '$new_email',

                        accounts.username = '$new_username',
                        accounts.password = '$password'
                    WHERE users.user_id = '$user_id';
            ";

            if($this->conn->query($sql)){
                header("Location: ../views/dashboard.php");
            }else{
                die("CANNOT UPDATE: ".$this->conn->error);
            }
        }


        public function deleteUser($user_id){
            $sql =  "DELETE users, accounts FROM users INNER JOIN accounts ON accounts.account_id = users.account_id WHERE users.user_id = '$user_id'";

            if($this->conn->query($sql)){
                header("Location: ../views/dashboard.php");
            }else{
                die("CANNOT DELETE: ".$this->conn->error);
            }
        }
    }

?>