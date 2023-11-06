<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="container mt-5 justify-content-center">
    <div style="display: flex; justify-content:center">
        <h1>Javascript Registration Form</h1>
    </div>
    <div class="form-row col-md-6 needs-validation mt-3" style="float: left;">

        <form action="" method="post" id="regForm" name="regForm" class="border rounded p-4">
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
                    <option value="">Select Country</option>
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
            <button class="btn btn-primary" type="submit" onclick="formSubmit(); return false;" name="submit">Submit</button>
        </form>
    </div>

    <!-- Data Table -->
    <script>
        function formSubmit() {
            let fname = document.regForm.first_name.value
            document.getElementById('firstName').innerHTML = fname;
            let lname = document.regForm.last_name.value;
            document.getElementById('lastName').innerHTML = lname;
            const email = document.regForm.email.value;
            document.getElementById('result').innerHTML = email;
            // Country Select Option
            let index = document.regForm.country.selectedIndex;
            let countrySelected = document.regForm.country.options[index].value;
            if (countrySelected) {
                document.getElementById('selectedCountry').innerHTML = countrySelected;
            }
            // Gender Select option

            let gender = document.regForm.gender.value;
            document.getElementById('selectedGender').innerHTML = gender;

            let subjectLeng = document.regForm.subject.length;
            let multSub = [];
            for(i=0;i<subjectLeng;i++){
                let subjectChecked = document.regForm.subject[i].checked
                if(subjectChecked){
                    let subjectValue = document.regForm.subject[i].value;
                    multSub.push(subjectValue);
                }
            }
            let totalSub = multSub.join(', ')
            document.getElementById('subjectSelected').innerHTML = totalSub;

        }
    </script>
    <div class="form-row col-md-6 needs-validation mt-3 border rounded p-4" style="float: left;">
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
                    <td><span id="firstName"></span></td>
                    <td><span id="lastName"></span></td>
                    <td><span id="result"></span></td>
                    <td><span id="selectedCountry"></span></td>
                    <td><span id="selectedGender"></span></td>
                    <td><span id="subjectSelected"></span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>