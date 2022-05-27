<html lang="en">
<head>
    <title>Registration Form</title>
</head>
<body>
    <h2>Fill Out The Registration Form</h2>
    <form action="user_data.php" method="post">
        <h6>Name</h6>
    <input type="text" name="name" placeholder="Type in your name..."><br>
    <h6>Email</h6>
    <input type="text" name="email" placeholder="Email..."><br>
    <h6>Date of Birth</h6>
    <input type="text" name="dob" placeholder="DOB..."><br>
    <h6>Gender</h6>
    Male<input type="radio" name="gender" value="Male">
    Female<input type="radio" name="gender" value="Female"><br>
    <h6>Nationality</h6>
    <input type="text" name="country" placeholder="Nationality"><br>
    <br>
    <input type="submit" name="submit" value="SUBMIT">
    </form>
</body>
</html>