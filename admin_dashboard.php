<?php
require('components/head.inc.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <div class="container my-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Course</th>
                    <th scope="col">Operations</th>


                </tr>
            </thead>
            <tbody>
                <?php

                require 'config.php';
                //Select query
                $query = "Select * from `students`";
                $result = mysqli_query($conn, $query);

                //Getting data "mysqli_fetch_assoc" from database
                while ($row = mysqli_fetch_assoc($result)) {



                    // array to store the response
                    $id = $row['id'];
                    $firstname = $row['first_name'];
                    $lastname = $row['last_name'];
                    $email = $row['email'];
                    $course = $row['Course'];



                    echo '    <tr>
                    <th scope="row">' . $id . '</th>
                    <td>' . $firstname . '</td>
                    <td>' . $lastname . '</td>
                    <td>' . $email . '</td>
                    <td>' . $course . '</td>
                 <td>
                 <button class="btn btn-primary">
                 <a href="update.php? update=' . $id . '" class="text-light" style="text-decoration: none;">Update</a></button>
                 <button class="btn btn-danger">
                 <a href="delete.php? delete=' . $id . '" 
                 class="text-light" style="text-decoration: none;">Delete</a></button>
                 </td>


                </tr>';
                }

                ?>

            </tbody>
        </table>
        <br><br>
        <div style="text-align:center">
            <button class="btn btn-danger">
                <a href="logout.php" class="text-light" style="text-decoration: none;">Log out</href>
            </button>
        </div>
    </div>

</body>


<?php
require('components/footer.php');
?>

</html>