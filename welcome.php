<?php
require('components/head.inc.php');

session_start();
if (isset($_POST['admin_login'])) {
    header("Location:admin_login.php");
}
if (isset($_POST['student_register'])) {
    header("Location:student_register.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Home Page</title>
</head>

<body>



    <div style="text-align:center">
        <h3>Student Management System</h3>
    </div><br>
    <form action="" method="POST" style="text-align:center">
        <input type="submit" class="btn btn-primary" name="admin_login" value="Admin Login" required>
        <input type="submit" class="btn btn-primary" name="student_register" value="New Student" required>
    </form>




</body>

<?php
require('components/footer.php');
?>

</html>