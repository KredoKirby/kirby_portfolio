<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card mx-auto w-50 my-5 border border-0">
            <div class="card-header bg-white border-0 text-danger">
                <h1 class="text-center">REGISTRATION</h1>
            </div>

            <div class="card-body">
                <form action="../action/user-action.php" method="post">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <input type="text" name="first_name" placeholder="First Name" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="last_name" placeholder="Last Name" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <input type="text" name="address" placeholder="Address" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <input type="email" name="email" placeholder="Email" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <input type="text" name="contact_number" placeholder="Contact Number" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <input type="text" name="username" placeholder="Username" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <input type="password" name="password" placeholder="Password" class="form-control" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" value="Register" name="register" class="form-control btn btn-danger">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>