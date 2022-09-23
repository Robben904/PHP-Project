<?php
require('components/head.inc.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Courses</title>
</head>

<body>
    <H3>Course List</H3>

    <div class="container my-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Course</th>
                    <th scope="col">Duration</th>


                </tr>
            </thead>
            <tbody>

                <?php

                //configuring the connection
                require 'config.php';

                //select query for corses
                $sql = "select * from `Courses`";
                $result = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_assoc($result)) {


                    // array to store the response
                    $id = $row['id'];
                    $course_name = $row['Course_Name'];
                    $duration = $row['Duration'];



                    echo ' <tr>
        <th scope="row">' . $id . '</th>
        <td>' . $course_name . '</td>
        <td>' . $duration . '</td>

        </tr>';
                }
                ?>
</body>

<?php
require('components/footer.php');
?>

</html>