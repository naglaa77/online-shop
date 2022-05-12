<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    nav {
        height: 10%;
        background-color: black;
        padding: 5rem 9%;
    }

    nav a {
        color: white;
    }

    .gallery.shop a {
        display: inline-block;
        background-color: #1d9715;
    }
</style>

<body>
    <nav>
        <a href="card.php"><i class="fa-solid fa-cart-shopping"></i></a>
    </nav>
    <section class="gallery shop">
        <h1>products available</h1>
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
                        <a href='val.php? id=$row[id]'>add to cart</a>
                    </div>
                </div>
            

                ";
            }
            ?>
        </div>
    </section>
</body>

</html>