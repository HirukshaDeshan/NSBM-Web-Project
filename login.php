<html>

<head>
    <title>Login Form</title>
    <link rel="stylesheet" href="loginForm/mystyle.css">
</head>

<body>



    <div>

        <div class="wrap">
            <h2> Sign in Here</h2>
            <form action="loginForum/signin.php" method="POST">
                <div>
                    <input type="text" placeholder="User Name.." id="user_name" required>
                    <input type="password" placeholder="Password.." id="pass_word" required>
                    <input type="submit" value="submit">
                    <input type="reset" value="Cancel">
                </div>
            </form>
        </div>
        <br>

        <div class="wrap">
            <h2> Sign Up Here</h2>
            <form action="signup.php" method="POST" onsubmit=" validate()">
                <div>
                    <input type="text" placeholder="First Name .." id="first_name" name="fname" required>
                    <input type="text" placeholder="Last Name .." id="last_name" name="lname" required>
                    <input type="email" placeholder="Email .." id="email" name="email" required>
                    <input type="text" placeholder="User Name .." id="user_name" name="uname" required>
                    <input type="password" placeholder="password .." id="pass_word" name="pass" required>
                    <input type="password" placeholder="Confirm password .." id="C_password" required>
                    <input type="submit" value="submit" name="signupSubmit">
                    <input type="reset" value="Cancel">
                </div>
            </form>
        </div>
    </div>


</body>

</html>