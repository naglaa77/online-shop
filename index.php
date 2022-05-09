<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop online</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>

    <div class="main">
        <form action="insert.php" method="post" enctype="multipart/form-data">
            <h2>Oline shop</h2>
            <img src="images/logo.jpg" alt="logo" width="450px">
            <input type="text" name="name">
            <input type="text" name="price">
            <input type="file" name="image" id="file" style="display: none;">
            <label for="file">upload image</label>
            <button name="upload">upload product</button>
            <a href="product.php">show all products</a>
        </form>
    </div>
    <p>Developer By naglaa</p>

</body>

</html>