<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <div class="container w-50">
        <div class="card mx-auto w-75 mt-5 border border-0">
            <div class="card-header bg-white border-0">
                <h2 class="text-center">REGISTRATION</h2>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="row mt-2 mb-3">
                        <div class="col-md-12">
                            <label for="name">NAME</label>
                            <input type="text" name="name" placeholder="Enter your Name" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="year_level">Year Level</label>
                            <select name="year_level" class="form-control">
                                <option hidden>CHOOSE YOUR YEAR LEVEL:</option>
                                <option value="1">Year 1</option>
                                <option value="2">Year 2</option>
                                <option value="3">Year 3</option>
                                <option value="4">Year 4</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="units">Total Units:</label>
                            <input type="number" name="units" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-3 text-center">
                        <div class="col-md-12">
                            <div class="form-check form-check-inline">
                                <input type="radio" name="laboratory" value="lab" class="form-check-input">
                                <label for="laboratory" class="form-check-label">LAB</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="laboratory" value="no_lab" class="form-check-input">
                                <label for="laboratory" class="form-check-label">NO LAB</label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <input type="submit" value="Submit" name="submit" class="form-control btn btn-dark">
                        </div>
                    </div>
                </form>

                <?php
                    if(isset($_POST['submit'])){
                        include 'School.php';

                        $name = $_POST['name'];
                        $year_level = $_POST['year_level'];
                        $units = $_POST['units'];
                        $laboratory = $_POST['laboratory'];

                        $school = new School();
                        $school->setValues($name, $year_level, $units, $laboratory);
                        
                        echo "Total Price: ".number_format($school->computeTotalPrice(),2);
                    }
                ?>

            </div>
        </div>
    </div>
</body>
</html>