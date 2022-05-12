<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <?php

    include('config.php');
    $ID = $_GET['id'];
    $up = mysqli_query($con, "SELECT * FROM prod WHERE id=$ID");
    $data = mysqli_fetch_array($up);
    ?>
    <div class="main">
        <form action="up.php" method="post" enctype="multipart/form-data">
            <h2>update product</h2>
            <input type="text" name="id" value='<?php echo $data['id'] ?>'>
            <input type="text" name="name" value='<?php echo $data['name'] ?>'>
            <input type="text" name="price" value='<?php echo $data['price'] ?>'>
            <input type="file" name="image" id="file" style="display: none;">
            <label for="file">update image</label>
            <button name="update" type="submit">modify</button>
            <a href="products.php">show all products</a>
        </form>
    </div>
    <p>Developer By naglaa</p>

</body>

</html>