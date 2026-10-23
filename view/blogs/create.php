<?php
// ─────────────────────────────────────────────
// 1. START SESSION & LOAD DEPENDENCIES FIRST
// ─────────────────────────────────────────────
session_start();

include "../../database/Database.php";
include "../../config/Config.php";

// ─────────────────────────────────────────────
// 2. HANDLE FORM SUBMISSION
// ─────────────────────────────────────────────
$error   = '';
$success = '';

if (isset($_POST['submit'])) {

    // Trim inputs so whitespace-only fields are caught
    $fname    = trim($_POST['first_name'] ?? '');
    $lname    = trim($_POST['last_name']  ?? '');
    $email    = trim($_POST['email']      ?? '');
    $password = $_POST['password']         ?? '';
    $confirm  = $_POST['confirm_password'] ?? '';

    // ── Validation ──
    if ($fname === '' || $lname === '' || $email === '' || $password === '') {
        $error = "All fields are required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Please enter a valid email address.";
    } elseif (strlen($password) < 8) {
        $error = "Password must be at least 8 characters.";
    } elseif ($password !== $confirm) {
        $error = "Passwords do not match.";
    } else {
        try {
            $db = Database::getConnect();

            // ── Check for duplicate email (prepared statement) ──
            $check = $db->prepare("SELECT id FROM users WHERE email = ? LIMIT 1");
            $check->execute([$email]);

            if ($check->fetch()) {
                $error = "That email is already registered.";
            } else {
                // ── Hash the password (NEVER store plaintext) ──
                $hash = password_hash($password, PASSWORD_DEFAULT);

                // ── Insert with prepared statement (prevents SQL injection) ──
                $stmt = $db->prepare(
                    "INSERT INTO users (first_name, last_name, email, password)
                     VALUES (?, ?, ?, ?)"
                );
                $stmt->execute([$fname, $lname, $email, $hash]);

                $success = "Account created successfully!";
                // Clear POST so refresh doesn't resubmit
                $_POST = [];
            }
        } catch (PDOException $e) {
            // Log real error, show generic message to user
            error_log("Registration failed: " . $e->getMessage());
            $error = "Something went wrong. Please try again.";
        }
    }
}
?>
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

    <div class="container text-center mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6">

                <h2 class="mb-4">Create an Account</h2>

                <?php if ($error): ?>
                    <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
                <?php endif; ?>

                <?php if ($success): ?>
                    <div class="alert alert-success"><?= htmlspecialchars($success) ?></div>
                <?php endif; ?>

                <form action="" method="post" novalidate>
                    <table class="table align-items-center">
                        <tr>
                            <td><input type="text" name="first_name" id="firstName" placeholder="Enter First Name"
                                       class="form-control" required
                                       value="<?= htmlspecialchars($_POST['first_name'] ?? '') ?>"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="last_name" id="lastName" placeholder="Enter Last Name"
                                       class="form-control" required
                                       value="<?= htmlspecialchars($_POST['last_name'] ?? '') ?>"></td>
                        </tr>
                        <tr>
                            <td><input type="email" name="email" id="email" placeholder="Enter Email"
                                       class="form-control" required
                                       value="<?= htmlspecialchars($_POST['email'] ?? '') ?>"></td>
                        </tr>
                        <tr>
                            <td><input type="password" name="password" id="password" placeholder="Enter Password"
                                       class="form-control" required minlength="8"></td>
                        </tr>
                        <tr>
                            <td><input type="password" name="confirm_password" id="confirmPassword"
                                       placeholder="Enter Confirm Password" class="form-control" required minlength="8"></td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="submit" value="Submit" class="btn btn-primary w-100"></td>
                        </tr>
                    </table>
                </form>

            </div>
        </div>
    </div>

</body>
</html>