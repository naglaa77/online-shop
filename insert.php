<?php
//when click submit button will be go here
include('config.php');

if (isset($_POST['upload'])) {

    $NAME = $_POST['name'];
    $PRICE = $_POST['price'];
    $IMAGE = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name']; //is the path (not name) of that temporary file which will store in server
    $image_name     = $_FILES['image']['name']; //stores the original filename from the client
    $image_up       = "images/" . $image_name; // save images here aftre save in database

    $insert = "INSERT INTO prod (name , price , image) VALUES ('$NAME' , '$PRICE' ,'$image_up')";
    mysqli_query($con,  $insert); // order to connect to database and isert the info
    if (move_uploaded_file($image_location, 'images/' . $image_name)) { //  Moves an uploaded file to a images folder

        echo "<script>alert('produt is upload')</script>";
    } else {
        echo "<script>alert('produt is not upload')</script>";
    }
    header('location: index.php');
}
