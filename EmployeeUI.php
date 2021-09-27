<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <div class="container w-50 mx-auto my-3">
        <div class="card mx-auto w-75 my-3">
            <div class="card-header bg-danger text-white">
                <h2 class="display-4">REGISTRATION</h2>
            </div>

            <div class="card-body">
                <form action="" method="post">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="first_name">First Name</label>
                            <input type="text" name="first_name" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="last_name">Last Name</label>
                            <input type="text" name="last_name" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="civil_status">Civil Status</label>
                            <select name="civil_status" class="form-control">
                                <option hidden>Choose Civil Status:</option>
                                <option value="single">Single</option>
                                <option value="married">Married</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="position">Position</label>
                            <select name="position" class="form-control">
                                <option hidden>Choose a Position:</option>
                                <option value="staff">Staff</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="employment_status">Employment Status</label>
                            <select name="employment_status" class="form-control">
                                <option hidden>Choose Status:</option>
                                <option value="contractual">Contractual</option>
                                <option value="probationary">Probationary</option>
                                <option value="regular">Regular</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="hours_worked">Number of Hours Worked</label>
                            <input type="number" name="hours_worked" id="" class="form-control text-center">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <input type="submit" value="calculate" name="calculate" class="form-control btn btn-danger">
                        </div>
                    </div>
                </form>

                <?php

                    include "Employee.php";

                    if(isset($_POST['calculate'])){
                        $civil_status = $_POST['civil_status'];
                        $position = $_POST['position'];
                        $employment_status = $_POST['employment_status'];
                        $hours_worked = $_POST['hours_worked'];

                        $employee = new Employee();

                        $employee->setValues($civil_status, $position, $employment_status, $hours_worked);

                        echo "First Name: ".$_POST['first_name']."<br>";
                        echo "Last Name: ".$_POST['last_name']."<br>";
                        echo "Civil Status: ".$civil_status."<br>";
                        echo "Position: ".$position."<br>";
                        echo "Employment Status: ".$employment_status."<br>";
                        echo "Hours Worked: ".$hours_worked."<br>";
                        echo "Regular Pay: ".$employee->computeRegularPay()."<br>";
                        echo "Overtime Pay: ".$employee->computeOvertimePay()."<br>";
                        echo "Health Care: ".$employee->getHealthCare()."<br>";
                        echo "Gross Income: ".$employee->computeGrossIncome()."<br>";
                        echo "Tax: ".$employee->computeTax()."<br>";
                        echo "Net Income: ".$employee->computeNetIncome()."<br>";
                    }
                ?>

            </div>
        </div>
    </div>
</body>
</html>