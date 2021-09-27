<?php
    include "../action/user-action.php";
    $user_list = $user->displayAllUsers();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="display-3">Hello, <?php echo $_SESSION['username'];?></h1>
        <table class="table table-hover table-striped table-borderless mx-auto text-center my-5">
            <thead class="table-dark text-uppercase">
                <th>User ID</th>
                <th>Full Name</th>
                <th>Address</th>
                <th>Contact Number</th>
                <th>Email</th>
                <th>Username</th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                <?php
                    if($user_list == false){
                ?>
                       <tr>
                           <td colspan="8" class="text-danger">NO RECORDS FOUND</td>
                       </tr> 
                <?php
                    }else{
                        foreach($user_list as $user){
                ?>
                            <tr>
                                <td><?php echo $user['user_id'];?></td>
                                <td><?php echo $user['first_name']." ".$user['last_name'];?></td>
                                <td><?php echo $user['address'];?></td>
                                <td><?php echo $user['contact_number'];?></td>
                                <td><?php echo $user['email'];?></td>
                                <td><?php echo $user['username'];?></td>
                                <td><a href="editUser.php?user_id=<?php echo $user['user_id'];  ?>" class="btn btn-warning">UPDATE</a></td>
                                <td><a href="deleteUser.php?user_id=<?php echo $user['user_id'];  ?>" class="btn btn-danger">DELETE</a></td>
                            </tr>
                <?php
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>