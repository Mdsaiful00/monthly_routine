<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

</head>

<body style="background-color: moccasin;">


    <?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'routine_db';

    $connection = mysqli_connect($hostname, $username, $password, $dbname);
    ?>


    <div class="d-flex   algin-items center justify-content-center flex-column" style="margin-top:150px">
        <h1 class='text-center mt-5'>WELLCOME MONTHLLY ROUTINE</h1>

        <a href="login.php" class="btn btn-info fs-2 px-5 py-3 d-block  mt-5  m-auto fw-bold text-dark" style="width:300px ;">Login</a>
    </div>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap.bundle.min.js"></script>
</body>

</html>