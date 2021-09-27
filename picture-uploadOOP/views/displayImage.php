<?php
    include '../action/pictureAction.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Image</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <div class="container w-50 mx-auto text-center mt-5">
        <h2 class="display-4">DISPLAY ALL IMAGES FROM THE DATABASE</h2>
        <div class="container">
            <?php
                $result = $picture_object->displayAllImages();
                foreach($result as $image){
            ?>
                    <img src="../uploads/<?php echo $image['user_picture'];?>" alt="Image not found" class="w-50 img-thumbnail">
            <?php
                }
            ?>
        </div>

        <h2 class="display-4">DISPLAY SPECIFIC IMAGES FROM THE DATABASE</h2>
        <div class="container">
            <?php
                $id = 2;

                $result = $picture_object->displaySpecificImage($id);

                $image = $result['user_picture'];
            ?>

            <img src="../uploads/<?php echo $image;?>" alt="Image Not Found" class="img-thumbnail w-50">
        </div>
    </div>    
</body>
</html>