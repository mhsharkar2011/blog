<script>
    function userFormSub() {
        var userName = document.userForm.name.value;
        var userEmail = document.userForm.email.value;
        var genderLeng = document.userForm.gender.length;
        // var userGender = document.userForm.gender.value;
        for(i=0; i<genderLeng; i++){
            var checkValue = document.userForm.gender[i].checked;
            if(checkValue){
                var checkResult = document.userForm.gender.value;
                console.log(checkResult)
            }
        }
        
        var show = "Username: " + userName + "<br> Email: " + userEmail + "<br/> Gender: " + checkResult;
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
    <form name="userForm" id="userFormId" onsubmit="userFormSub(); return false;">
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
                    <input type="radio" name="gender" value="Male">Male
                    <input type="radio" name="gender" value="Female">Female
                    <input type="radio" name="gender" value="Others">Others
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="submit" id="submit">Submit</button>
                    <input type="reset" value="reset">
                </td>
            </tr>
        </table>
    </form>

</body>

</html>