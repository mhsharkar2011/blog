<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="container mt-5 justify-content-center">
    <div style="display: flex; justify-content:center">
        <h1>This is User input Form</h1>
    </div>
    <div class="form-row col-md-6 needs-validation mt-5" style="float: left;">
        <form action="" method="post">
            <label for="validationTooltip01">First name</label>
            <input type="text" name="first_name" class="form-control" id="validationTooltip01" placeholder="First name" value="Mark" required>
            <div class="valid-tooltip">
                Looks good!
            </div>
            <label for="validationTooltip02">Last name</label>
            <input type="text" name="last_name" class="form-control" id="validationTooltip02" placeholder="Last name" value="Otto" required>
            <div class="valid-tooltip">
                Looks good!
            </div>
            <div class="mb-3">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="Email" value="monir@gmail.com" required>
                <div class="invalid-tooltip">
                    Please provide a valid email
                </div>
            </div>
            <div class="mb-3">
                <select name="country" class="custom-select">
                    <option selected>Select Country</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="India">India</option>
                    <option value="Japan">Japan</option>
                </select>
            </div>
            <div class="mb-3">
                Select Gender
                <input class="mx-1" type="radio" id="gender" name="gender" value="Male"> Male
                <input class="mx-1" type="radio" id="gender" name="gender" value="Female"> Female
            </div>
            <div class="mb-3">
                Select Subjects
                <input class="mx-2" type="checkbox" name="subject" value="Bangla"> Bangla
                <input class="mx-2" type="checkbox" name="subject" value="English"> English
                <input class="mx-2" type="checkbox" name="subject" value="Math"> Math
                <input class="mx-2" type="checkbox" name="subject" value="Science"> Science
            </div>
            <button class="btn btn-primary" type="submit" name="submit">Submit</button>
        </form>
    </div>

    <!-- Data Table -->
    <?php
    if (isset($_POST['submit'])) {
        $fname = $_POST['first_name'];
        $lname = $_POST['last_name'];
        $email = $_POST['email'];
        $country = $_POST['country'];
        
        $gender = $_POST['gender'];
        $subject = $_POST['subject'];
    ?>
         <div class="form-row col-md-6 needs-validation mt-5" style="float: left;">
            <table class="table table-responsive table-sm">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Country</th>
                        <th>Gender</th>
                        <th>Subject</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $fname ?></td>
                        <td><?php echo $lname ?></td>
                        <td><?php echo $email ?></td>
                        <td><?php echo $country ?></td>
                        <td><?php echo $gender ?></td>
                        <td><?php echo $subject ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    <?php } ?>

</div>