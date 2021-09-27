<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <div class="container w-50 mt-5">
        <form action="" method="post">
            <div class="row mb-3">
                <div class="col-md-6 mt-3">
                    <input type="text" name="first_number" class="form-control" placeholder="FIRST NUMBER" required>
                </div>
                <div class="col-md-6 mt-3">
                    <input type="text" name="second_number" class="form-control" placeholder="SECOND NUMBER" required>
                </div>
            </div>
            <div class="row mb-3 text-center">
                <div class="col-md-12 mt-3">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="operator" value="addition">
                        <label class="form-check-label" for="addition">+</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="operator" value="subtraction">
                        <label class="form-check-label" for="subtraction">-</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="operator" value="multiplication">
                        <label class="form-check-label" for="multiplication">*</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="operator" value="division">
                        <label class="form-check-label" for="division">/</label>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12 mx-auto mt-3">
                    <button type="submit" name="calculate" class="btn btn-dark form-control text-uppercase">calculate</button>
                </div>
            </div>
        </form>
        <?php
            include 'Calculator.php';

            if(isset($_POST['calculate'])){
                $calculation = new Calculator();//MAKE A NEW OBJECT
                $calculation->setValues($_POST['first_number'], $_POST['second_number'], $_POST['operator']);
                
                echo "<h2 class='display-1 d-block text-center mt-5'>Result: ".$calculation->getCalculation()."</h2><br>";
                
            }
        ?>
    </div>
</body>
</html>