<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <title>Job Portal | Free Job Portal</title>

    <!-- ***** Style Start ***** -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/font-awesome.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- ***** Style End ***** -->
</head>

<body>

    <?php
    include "../../database/Database.php";
    include "../../config/Config.php";

    $db = Database::getConnect();
    if (isset($_POST['submit'])) {
        $fname  = $_POST['first_name'];
        $lname  = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        if ($fname == '' || $lname == '' || $email == '' || $password == '') {
            $error = "Field must not be Empty !!";
        } else {
            $query = "INSERT INTO users(first_name, last_name, email, password) 
   Values('$fname', '$lname', '$email', '$password')";
            $create = $db->create($query);
        }
    }
    ?>
    <div class="container text-center">
        <div class="row align-items-center">
           <div class="col-lg-6">
           <form action="create.php" method="post">
                <table class="table align-items-center">
                    <tr>
                        <td><input type="text" name="first_name" id="firstName" placeholder="Enter First Name" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="last_name" id="lastName" placeholder="Enter Last Name" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><input type="email" name="email" id="email" placeholder="Enter Email" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><input type="password" name="password" id="password" placeholder="Enter Password" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><input type="password" name="confirm_password" id="confirmPassword" placeholder="Enter Confirm Password" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="submit" value="Submit"></td>
                    </tr>
                </table>
            </form>
           </div>
        </div>
    </div>