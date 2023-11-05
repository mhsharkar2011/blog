

<body>
    <form action="" method="post" enctype="multipart/form-data" name="userForm" id="userFormId">
        <table>
            <tr>
                <td>
                    <label for="name">Username: </label>
                    <input type="text" name="username" required placeholder="Enter Username here" value="Monir">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email: </label>
                    <input type="text" name="email" required placeholder="Enter Email here" value="monir@gmail.com">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="radio" name="gender" value="Male"> Male
                    <input type="radio" name="gender" value="Female"> Female
                    <input type="radio" name="gender" value="Others"> Others
                </td>
            </tr>
            <tr>
                <td>
                    <select class="form-group" name="city" id="city">
                        <option value="">Select City</option>
                        <option value="dhaka">Dhaka</option>
                        <option value="khulna">Khulna</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <button name="submit">Submit</button>
                    <input type="reset" value="reset">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>


<?php
echo "<br />";

if (isset($_POST['submit'])) {
    $userName = $_POST['username'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    echo "Username:" . $userName;
    echo "<br> Email:" . $email;
    if ($gender == 'Male') {
        echo "<br /> You are a:" . $gender;
    } elseif ($gender == "Female") {
        echo "<br /> You are a:" . $gender;
    } else {
        echo "<br/>" . $gender;
    }
}
?>