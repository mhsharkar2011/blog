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
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/font-awesome.css">
    <link rel="stylesheet" href="/assets/css/login-form.css" />
</head>

<body>

    <div class="bg-img">
        <div class="content-register">
            <header>User Registration</header>
            <form action="" method="post" enctype="multipart/form-data">
            <div class="row g-3 align-items-center">
                <div class="col-lg-6">
                    <input type="text" name="firstName" id="firstName" class="form-control" placeholder="First Name">
                </div>
                <div class="col-lg-6">
                    <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Last Name">
                </div>
                <div class="col-lg-12 mt-4">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                </div>
                <div class="col-lg-6 mt-4">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                </div>
                <div class="col-lg-6 mt-4">
                    <input type="password" name="confirmPassword" id="confirmPassword" class="form-control" placeholder="Confirm Password">
                </div>
            </div>
            <button type="submit" class="btn btn-primary mb-3 mt-4">Submit</button>
            </form>
        </div>
    </div>
    </div>

    <script>
        const pass_field = document.querySelector('.pass-key');
        const showBtn = document.querySelector('.show');
        showBtn.addEventListener('click', function() {
            if (pass_field.type === "password") {
                pass_field.type = "text";
                showBtn.textContent = "HIDE";
                showBtn.style.color = "#3498db";
            } else {
                pass_field.type = "password";
                showBtn.textContent = "SHOW";
                showBtn.style.color = "#222";
            }
        });
    </script>