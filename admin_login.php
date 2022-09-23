<?php
require('components/head.inc.php');


// Checking passed variable paremeters
if (isset($_POST['submit'])) {

    
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, "sms");
    $query = "select * from admin where username = '$_POST[username]'";
    $query_run = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($query_run)) {

        // check for username
        if ($row['username'] == $_POST['username']) {

            // Check for password
            if ($row['password'] == $_POST['password']) {
                header("location: admin_dashboard.php");
            } else {
                echo 'Login failed';
            }
        } else {
            "Wrong Email/password";
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

    <title>Admin Page</title>
</head>

<body>
    <div style="text-align:center">
        <h3>Admin Page</h3>
        <form action="" method="post">
            User Name:<input type="text" name="username" class="text" required><br><br>
            Password:<input type="password" name="password" class="text" required><br><br>
            <input type="Submit" class="btn btn-primary" name="submit" id="sub">
        </form>
    </div>



</body>

<?php
require('components/footer.php');
?>

</html>