<?php
    require_once '../class/Picture.php';
    $picture_object = new Picture();

    if(isset($_POST['upload'])){
        $picture = $_FILES['picture']['name'];

        $target_dir = "../uploads/"; //FOLDER in your computer/project where you will place all the uploaded pictures

        $target_file = $target_dir . basename($_FILES['picture']['name']);

        $result = $picture_object->insertToTable($picture);

        if($result == true){
            // COPY AND MOVE THE FILE to uploads folder
            move_uploaded_file($_FILES['picture']['tmp_name'], $target_file);
            // move_uploaded_file ~~ to transfer the picture from one location to another location.

            header("Location: ../views/index.php");
        }else{
            echo "ERROR IN UPLOADING PICTURE";
        }
    }
?>