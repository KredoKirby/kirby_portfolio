<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Picture Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <div class="container w-50 mx-auto mt-5">
        <form action="../action/pictureAction.php" method="post" enctype="multipart/form-data">
            <!-- enctype ~~ is important when you are using input:file -->
            <div class="row">
                <div class="col-md-6">
                    <input type="file" name="picture" class="form-control">
                </div>
                <div class="col-md-6">
                    <input type="submit" value="Upload" name="upload" class="btn btn-success form-control">
                </div>
            </div>
        </form>
    </div>
</body>
</html>