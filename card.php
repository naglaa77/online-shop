<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>your purchases </title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    .main table {
        width: 100%;
        font-size: 1.5rem;
    }

    .main table thead {
        background-color: #4d9beb;
        color: white;
    }

    .main table thead th {
        padding: 1rem;
    }
</style>

<body>
    <div class="main">
        <table class="table">
            <thead>
                <tr>
                    <th scope='col'>Product name</th>
                    <th scope='col'>Product price</th>
                    <th scope='col'>Delete product</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td><a href="del_card.php? id=$row[id]" class="delet">Delete</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>