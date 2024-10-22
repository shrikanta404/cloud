<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign in &sign up</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container" id="signup">
        <h1 class="form-title"> sign in </h1>
        <form method="post" action="register.php">
            <div class="input-group" id="sign">              
                <label for="email"> Email</label><br>
                <input type="email" name="email" id="fName" placeholder="email" required><br>
                <label for="password">Password</label><br>
                <input type="password" name="password" id="fName" placeholder="Password" required><br>
                <p class="recover">
                    <a href ='#'>Recover Password</a>
                </p>
                <input type="submit" class="btn" value="Sign In" name="Sign In"><br><br>
            </div>
        </form>
        <p class="links">

            ----------------OR--------------
        </p>
        <div class="links">
            <p>You Don't have Account ?</p>
            <p>go back to Sign Up page</p>
            
            <center><button> <a href="index.php" style="font-size: 15px;" >sign up</a> </button></center>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>