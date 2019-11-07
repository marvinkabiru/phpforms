<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="forms.css"> 
</head>
<body>
    <div>
    <h1>REGISTER</h1>
    <form action="form2.php" method="POST">
        First name:<span style="color:red">*</span> <br><input type="text" name="Enter first name" id="" required><br><br>
        Second name:<span style="color:red">*</span> <br><input type="text" name="Enter second name" id="" required><br><br>
        Phone number:<span style="color:red">*</span> <br><input type="number" name="Enter phone number" id="" required><br><br>
        <label for="Date of Birth">Date of Birth:<span style="color:red">*</span></label><br>
        <input type="date" name="dob" id=""><br><br>
        Gender:<br>
        <input type="radio" name="Gender" id="" value="Male">Male
        <input type="radio" name="Gender" id="" value="Female">Female<br><br>
        Languages:<br>
        <input type="checkbox" name="Languages" id="" value="HTML">HTML
        <input type="checkbox" name="Languages" id="" value="CSS">CSS<br>
        <input type="checkbox" name="Languages" id="" value="php">php
        <input type="checkbox" name="Languages" id="" value="js">js<br>
        <input type="checkbox" name="Languages" id="" value="GO">GO
        <input type="checkbox" name="Languages" id="" value="jquery">jquery<br><br>
        Hobbies and Talents:<br>
        <select name="" id=""><br>
            <option value="none">none</option>
            <option value="swimming">Swimming</option>
            <option value="traveling">Travelling</option>
            <option value="dancing">Dancing</option>
            <option value="singing">Singing</option>
            <option value="reading">Reading</option>
            <option value="gaming">Gaming</option>
        </select><br><br>
        E-mail:<span style="color:red">*</span> <br><input type="email" name="Enter E-mail adress" id="" required><br><br>
        Password:<span style="color:red">*</span> <br><input type="password" name="Enter Password" id="" required><br><br>
        Retype Password:<span style="color:red">*</span> <br><input type="password" name="Enter Paaword" id="" required><br><br>
        Additional info:<br>
        <textarea name="info" id="" cols="30" rows="10"></textarea><br><br>
        <input type="checkbox" id="info" name="terms and conditions">Terms and conditions<br><br>
        <input type="submit" disabled name="submit" class="btn" value="Register">
        </form>
        <script
            src="https://code.jquery.com/jquery-3.4.1.js"
            integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
            crossorigin="anonymous">
        </script>
        <script>
            $('#info').click(function(){
                $('.btn').removeAttr('disabled');
            })
        </script>
        </div>
</body>
</html>