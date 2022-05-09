<?php
//when click submit button will be go here
include('config.php');

if (isset($_POST['upload'])) {

    $NAME = $_POST['name'];
    $PRICE = $_POST['price'];
    $IMAGE = $_FILES['image'];
    $image_location = $_FILES['image']['tem_name'];
    $image_name     = $_FILES['image']['name']; // name of image
    $image_up       = "images/" . $image_name; // save images here aftre save in database

    $insert = "INSERT INTO prod (name , price , image) VALUES ('$NAME' , '$PRICE' ,'$image_up')";
    mysqli_query($con,  $insert); // order to connect to database and isert the info 
    if (move_uploaded_file($image_location, 'images/' . $image_name)) {

        echo "<script>alert('produt is upload')</script>";
    } else {
        echo "<script>alert('produt is not upload')</script>";
    }
}
