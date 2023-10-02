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
                <div class="routine-box bg-body px-4 py-3 rounded shadow">

                    <form action="insert.php" method="POST">
                        <div class="">
                            <label class="fs-6 fw-bold text-dark" for="">Work Name</label>
                            <input type="text" name="name" class="form-control bg-secondary bg-opacity-10" required>
                        </div>
                        <div class="mt-4">
                            <label class="fs-6 fw-bolder text-dark" for="">Subject</label>
                            <input type="text" name="subject" class="form-control bg-secondary bg-opacity-10 " required>
                        </div>
                        <div class="mt-4">
                            <label class="fs-6 fw-bolder text-dark" for="">Day</label>
                            <input type="text" name="day" class="form-control bg-secondary bg-opacity-10" required>
                        </div>
                        <div class="mt-4">
                            <label class="fs-6 fw-bolder text-dark" for="">Date</label>
                            <input type="date" name="date" class="form-control bg-secondary bg-opacity-10" required>
                        </div>
                        <div class="mt-4">
                            <label class="fs-6 fw-bolder text-dark" for="">Time</label>
                            <input type="text" name="time" class="form-control bg-secondary bg-opacity-10" required>
                        </div>
                        <input type="submit" value="Insert" class="btn btn-info px-4 d-block m-auto fs-5 fw-bold mt-4 text-body" style="width:10rem">
                    </form>
                </div>
            </div>
        </div>
    </div>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap.bundle.min.js"></script>
</body>

</html>