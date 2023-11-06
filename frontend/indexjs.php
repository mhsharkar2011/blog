<script>
    function userFormSub() {
        // Input field value -----------------------------
        let userName = document.userForm.name.value;
        userName = "Username: " + userName;
        let userEmail = document.userForm.email.value;
        userEmail = "<br>Email: " + userEmail;
        // ------------------------------------------------
        // Radio button value -----------------------------
        let userGender = document.userForm.gender.value;
        if(userGender){
            userGender = "<br>Gender: " + userGender;
        }
        // ------------------------------------------------

        // checkbox Values --------------------------------
        let coderLeng = document.userForm.coder.length;
        let selectedLang = [];
        for (i = 0; i < coderLeng; i++) {
            let checked = document.userForm.coder[i].checked;
            if (checked) {
                let coderValue = document.userForm.coder[i].value;
                selectedLang.push(coderValue);
            }
        }
        let totalSelectedLanguage = selectedLang.join(', ');
        if(totalSelectedLanguage){
            totalSelectedLanguage = "<br>You have selected multiple language " + selectedLang
        }
        // ------------------------------------------------

        // Select Option list ----------------------------- 
        var index = document.userForm.languageMark.selectedIndex;
        var mark = document.userForm.languageMark.options[index].value;
        if(mark){
            mark = "<br>Your Mark is: " + mark;
        }
        // ------------------------------------------------

        let show = userName + userEmail + userGender + totalSelectedLanguage + mark;
        // Show All Result in HTML Dom
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
                    <input type="text" name="name" required value="Monir Hossain">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email: </label>
                    <input type="text" name="email" required value="monir@gmail.com">
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
                    <input type="checkbox" name="coder" value="PHP">PHP
                    <input type="checkbox" name="coder" value="JAVA">JAVA
                    <input type="checkbox" name="coder" value="MYSQL">MYSQL
                </td>
            </tr>
            <tr>
                <td>
                    <select name="languageMark">
                        <option value="">Select your mark</option>
                        <option value="50">50</option>
                        <option value="60">60</option>
                        <option value="70">70</option>
                    </select>
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