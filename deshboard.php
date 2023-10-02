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



    <a href="logout.php" class="btn btn-danger d-block position-absolute my-5 top-0 fs-5 fw-bold text-dark"
        style="width:150px ;right:60px">Logout</a>

    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-xl-12">
                <div class="routine-box bg-body  rounded shadow">
                    <table class="table">


                        <thead>
                            <tr>
                                <th class="bg-dark text-white" scope="col">Number</th>
                                <th class="bg-dark text-white" scope="col">Work Name</th>
                                <th class="bg-dark text-white" scope="col">Subject</th>
                                <th class="bg-dark text-white" scope="col">Day</th>
                                <th class="bg-dark text-white" scope="col">Date</th>
                                <th class="bg-dark text-white" scope="col">Time</th>
                                <th class="bg-dark text-white" scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $sql = 'select*from routine_table';
                            $result = $connection->query($sql);
                            $serial=1;
                            while ($row = $result->fetch_assoc()) {

                                ?>

                            
                                <tr>
                                    
                                    <th class="ps-4 border-1 border-dark bg-warning" ><?php echo $serial++;?></th>
                                    <td class="border-1 border-dark fw-bold" style="background-color:coral"><?php echo $row['name']?></td>
                                    <td class="border-1 border-dark fw-bold" style="background-color:coral"><?php echo $row['subject']?></td>
                                    <td class="border-1 border-dark fw-bold" style="background-color:coral"><?php echo $row['day']?></td>
                                    <td class="border-1 border-dark fw-bold bg-info"><?php echo $row['date']?></td>
                                    <td class="border-1 border-dark fw-bold bg-info"><?php echo $row['time']?></td>
                                    <td class="bg-info" >
                                        <a href="edit.php?id=<?php echo $row['id'];?>" class="btn btn-primary px-4 fw-bold ">Edit</a>
                                        <a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger px-4 fw-bold ">Delete</a>
                                        <a href="add.php?id=<?php echo $row['id'];?>" class="btn btn-warning px-4 fw-bold ">Add</a>
                                    </td>
                                    
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap.bundle.min.js"></script>
</body>

</html>