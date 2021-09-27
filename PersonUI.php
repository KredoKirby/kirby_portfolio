<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PERSON DIRECTORY</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <div class="container w-50 mt-5 mx-auto">
        <form action="" method="post">
            <div class="row g-3 mb-3">
                <div class="col-md-6">
                    <input type="text" name="first_name" placeholder="First Name" class="form-control">
                </div>

                <div class="col-md-6">
                    <input type="text" name="last_name" placeholder="Last Name" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-12">
                    <input type="text" name="address" placeholder="Address" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-12">
                    <input type="number" name="contact_number" placeholder="Contact Number" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <input type="submit" value="Submit" name="submit" class="form-control btn btn-primary">
                </div>
            </div>
        </form>

        <?php
            if(isset($_POST['submit'])){
                include 'Person.php';

                $first_name = $_POST['first_name'];
                $last_name = $_POST['last_name'];
                $address = $_POST['address'];
                $contact_number = $_POST['contact_number'];

                $person = new Person();
                $person->setPerson($first_name, $last_name, $address, $contact_number);
        ?>
                <h1 class="display-4">Full Name: <?php echo $person->getFirstName()." ".$person->getLastName();?></h1>
                <h1 class="display-4">Address: <?php echo $person->getAddress();?></h1>
                <h1 class="display-4">Contact Number: <?php echo $person->getContactNumber();?></h1>
        <?php
            }

        ?>


    </div>
</body>
</html>