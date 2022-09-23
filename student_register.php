<?php
require('components/head.inc.php');

include 'config.php';


if (isset($_POST['submit'])) {
    if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['course'])) {

        // array to store the response
        $firstname = $_POST['firstname'];
        $lastname =  $_POST['lastname'];
        $email = $_POST['email'];
        $course = $_POST['course'];

        //insert into the database
        $query = "insert into students (first_name, last_name, email, course) values (Upper('$firstname'), Upper('$lastname'), '$email', '$course')";

        $run = mysqli_query($conn, $query);

        if ($run) {
            echo "Form submitted successfully";
        } else {
            echo "Error";
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Student Register</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card mt-5">
                    <div style="text-align: center;">
                        <h3>Student Register</h3>
                        <form action="" method="post">




                            First Name:<input type="text" name="firstname" class="text" required><br><br>
                            Last Name:<input type="text" name="lastname" class="text" required><br><br>
                            E-mail:<input type="text" name="email" class="text" required><br><br>
                            <!-- Course:<input type="text" name="course" class="text" required><br><br>  -->
                            <div style="width:fit-content; text-align: Center">
                                <select name="course" class="form-control">
                                    <option value="">--Select Course--</option>
                                    <option value="BIT">BIT</option>
                                    <option value="BBA">BBA</option>
                                    <option value="BBS">BBS</option>
                                    <option value="BSW">BSW</option>
                                    <option value="BIM">BIM</option>


                                </select>

                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="text-align: center;">
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>

        </div>



        </form>
    </div>


</body>

<?php
require('components/footer.php');
?>

</html>