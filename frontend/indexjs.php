<script>
    function userFormSub() {
        var userName = document.userForm.name.value;
        var userEmail = document.userForm.email.value;
        var show = "Username: " + userName + "<br> Email: " + userEmail;
        document.getElementById('output').innerHTML = show;
    }
</script>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div id="output"></div>
    <form name="userForm" id="userFormId" onmouseenter="userFormSub(); return false;">
        <table>
            <tr>
                <td>
                    <label for="name">Name: </label>
                    <input type="text" name="name" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email: </label>
                    <input type="text" name="email" required>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Submit">
                    <input type="reset" value="reset">
                </td>
            </tr>
        </table>
    </form>

</body>

</html>