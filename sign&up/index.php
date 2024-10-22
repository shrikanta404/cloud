<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up & sign in</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container" id="signup">
        <h1 class="form-title"> Register</h1>
        <form method="post" action="register.php">
            <div class="input-group" id="sign">
                <i class="fas fa-user"></i>
                <label for="fname"> First Name</label><br>
                <input type="text" name="fName" id="fName" placeholder="First name" required><br>
                <label for="lname"> Last Name</label><br>
                <input type="text" name="lName" id="fName" placeholder="Last name" required><br>
                <label for="email"> Email</label><br>
                <input type="email" name="email" id="fName" placeholder="email" required><br>
                <label for="password">Password</label><br>
                <input type="password" name="password" id="fName" placeholder="Password" required><br>
                <input type="submit" class="btn" value="SignUp" name="SignUp"><br><br>
            </div>
        </form>
        <p class="links">
            ----------------OR--------------
        </p>
        <div class="links">
            <p>Already have Account ?</p>
            <center><button> <a href="index2.php" style="font-size: 15px;" >sign up</a> </button></center>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>