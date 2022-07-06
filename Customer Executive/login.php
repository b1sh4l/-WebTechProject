<?php require("login.class.php") ?>
<!DOCTYPE html>
<html>
    <title>Executive Login</title>
    <body>
        <div class="center">
            <h1 style="font-family: Arial, Helvetica, sans-serif;">Welcome to Executive Login</h1>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
            <div class="text-field">
            <label>Username</label><br>
                <input type="text" id="username" name="username" value="<?php if(isset($_COOKIE['uname'])) {echo $_COOKIE['uname'];} ?>"><br>
                <span style="color:red">
                <?php
                if($usernameError!=""){
                    echo $usernameError;
                }
                ?>
                </span>
            </div>
			<br>
            <div class="text-field">
                <label>Password</label><br>
            <input type="password" id="pass" name="password" value="<?php if(isset($_COOKIE['c_pass'])) {echo $_COOKIE['c_pass'];} ?>">
            
            <br> 
            
            <span>
                <?php
                if($passwordError!=""){
                    echo $passwordError;
                }
                ?>
             </span>
             <script>
            function myFunction() {
            var x = document.getElementById("pass");
            if (x.type === "password") {
            x.type = "text";
            } else {
            x.type = "password";
            }
            }
           </script>

            </div>
			<br>
            <div>
            <input type="checkbox" onclick="myFunction()"> Show Password <br>
                <input type="checkbox" id="remember" name="remember"> Remember Password
            </div><br><br>
            <!--<a href="forgot_password.php" style="text-decoration: none;"><div class="pass">Forgot Password?</div></a>!-->
            <input type="submit" name="login" value="Login"><br><br>
            <span style="color:red">
                <?php
                if($ErrorMessage!=""){
                    echo $ErrorMessage;
					header("Location:dashboard.php");
                }
                ?>
            </span><br><br>
            <div class="sign-up">Not a Member Yet? <a href="register.php">Sign Up</a></div>
      </form>
      </div>
      <button onclick="history.back()" >Homepage</button>

    </body>
</html>