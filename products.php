<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <section class="gallery">
        <h1>all products</h1>
        <div class='all-prod'>
            <?php
            include('config.php');
            $result = mysqli_query($con, "SELECT * FROM prod");
            while ($row = mysqli_fetch_array($result)) {
                echo "
            
                <div class='content'>
                    <img src='$row[image]'>
                    <div class='info'>
                        <h5>$row[name]</h5>
                        <p>$row[price]</p>
                        <a href='delete.php? id=$row[id]'>delete</a>
                        <a href='update.php? id=$row[id]'>modify</a>
                    </div>
                </div>
            

                ";
            }
            ?>
        </div>
    </section>
</body>

</html>