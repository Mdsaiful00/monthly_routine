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





    <div class="container-fluid">
        <div class="row mt-5 d-flex justify-content-center">
            <div class="col-xl-5">
                <div class="routine-box bg-body p-5 rounded shadow">
                 <?php 
                    session_start();
                    session_destroy();
                    if(isset($_SESSION['msg'])){
                        ?>

                        <h1><?php echo $_SESSION['msg']?></h1>
                    <?php }
                 ?>



                    <form action="login2.php" method="POST">
                        <div class="">
                            <label class="fs-6 fw-bold text-dark" for="">Username</label>
                            <input type="text" name="username" class="form-control bg-secondary bg-opacity-10" required>
                        </div>
                   
                        <div class="mt-4">
                            <label class="fs-6 fw-bolder text-dark" for="">password</label>
                            <input type="password" name="password" class="form-control bg-secondary bg-opacity-10" required>
                        </div>
                        <input type="submit" value="Login" class="btn btn-info px-4 d-block m-auto fs-5 fw-bold mt-4 text-body" style="width:10rem">
                    </form>
                </div>
            </div>
        </div>
    </div>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap.bundle.min.js"></script>
</body>

</html>