<?php
    require_once "../class/User.php";
    session_start();
    $user = new User();

    if(isset($_POST['register'])){
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $contact_number = $_POST['contact_number'];

        $create_account_result = $user->createAccount($username , $password);

        if($create_account_result == true){
            $user->createUser($first_name, $last_name, $address, $email, $contact_number);
        }
    }elseif(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $user->login($username, $password);
    }elseif(isset($_POST['update'])){
        $new_first_name = $_POST['new_first_name'];
        $new_last_name = $_POST['new_last_name'];
        $new_address = $_POST['new_address'];
        $new_contact_number = $_POST['new_contact_number'];
        $new_email = $_POST['new_email'];
        $new_username = $_POST['new_username'];
        $user_id = $_POST['user_id'];

        if(empty($_POST['new_password'])){
            $password = $_POST['old_password'];
        }else{
            $password = password_hash($_POST['new_password'], PASSWORD_DEFAULT);
        }

        $user->updateUserDetails($new_first_name, $new_last_name, $new_address, $new_contact_number, $new_email, $new_username, $password, $user_id);

    }

?>