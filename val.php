<?php
include('config.php');
$ID = $_GET['id'];
$up = mysqli_query($con, "SELECT * FROM prod WHERE id=$ID");
$data = mysqli_fetch_array($up);
?>
<style>
    .main h2 {
        margin-bottom: 3rem;
        font-size: 2rem;
    }

    .main form {
        display: flex;
        flex-direction: row;
        align-items: center;
        gap: 3px;
    }

    .main form input,
    .main form button {
        width: 24%;
        margin: 0;
        margin-bottom: 1.5rem;
        padding: 1.5rem;
        outline: none;
        border: none;
        background: #e9edf161;
        border-radius: 5px;
        font-size: 1.5rem;
    }

    .main form input {
        display: none;
    }

    .main form button {
        background-color: #9f8c04c2;
        color: white;
        margin: auto;
    }
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>confirm buying</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="main">
        <h2>you want to add this article to your card?</h2>
        <form action="insert_card.php" method="post">
            <input type="text" name="id" value='<?php echo $data['id'] ?>'>
            <input type="text" name="name" value='<?php echo $data['name'] ?>'>
            <input type="text" name="price" value='<?php echo $data['price'] ?>'>
            <button name="add" type="submit">confirm</button>
        </form>
        <a href="shop.php">continue shopping</a>
    </div>

</body>

</html>