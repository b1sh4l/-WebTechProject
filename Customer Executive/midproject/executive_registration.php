<?php
include "../Controller/RegistrationCheck.php";
?>

<!DOCTYPE html>
<html>
<title>Executive User Registration</title>
<body>
    <div>
    <div>
        <h1 class="heading">Ececutive Registration Form</h1>
        <h5 class="heading2">Please provide correct details to proceed</h5>
    </div>
    <div>
        <form action="#" method="post">
            <label class="labels"><B>Name</B></label><br>
            <input type="text" id="name" name="name" value="" placeholder="Name"><span style="color: red;">
                <?php
                if ($nameError != "") {
                    echo "* - " . $nameError;
                }
                ?></span><br><br>
            <label class="labels"><b>Email</b></label><br>
            <input type="text" id="email" name="email" value="" placeholder="Email"><span style="color: red;">
                <?php
                if ($emailError != "") {
                    echo "* - " . $emailError;
                }
                ?></span><br><br>
            <label class="labels"><b>Username</b></label><br>
            <input type="text" id="username" name="username" value="" placeholder="Username"><span style="color: red;">
                <?php
                if ($usernameError != "") {
                    echo "* - " . $usernameError;
                }
                ?>
            </span><br><br>
            <label class="labels"><b>Password</b></label><br>
            <input type="password" id="pass" name="pass" value="" placeholder="Password"><span style="color:red">
                <?php
                if ($passError != "") {
                    echo "* - " . $passError;
                }
                ?>
            </span><br><br>
           <label class="labels"><b>Confirm Password</b></label><br>
            <input type="password" id="cpassword" name="cpassword" value="" placeholder="Confirm Password"><span style="color: red;">
                <?php
                if ($cpassError != "") {
                    echo "* - " . $cpassError;
                }
                ?>
            </span><br><br>
            <label class="labels"><b>Gender</b></label>
            <input type="radio" id="gender" name="gender" value="Male" > Male
            <input type="radio" id="gender" name="gender" value="Female"> Female
            <input type="radio" id="gender" name="gender" value="Other"> Other &nbsp; <span style="color:red">
                <?php
                if ($genderError != "") {
                    echo "* - " . $genderError;
                }
                ?>
            </span>
            <br><br>
            <label class="labels"><b>Date of Birth</b></label><br>
            <input type="dob" id="day" name="day" value="" placeholder="dd" size="3" class="adjustbox"> -
            <input type="dob" id="month" name="month" value="" placeholder="mm" size="3" class="adjustbox"> -
            <input type="dob" id="year" name="year" value="" placeholder="yy" size="5" class="adjustbox"> <span style="color: red;">
                <?php if ($dobError != "") {
                    echo " * - ";
                    echo $dobError;
                }
                ?>
            </span><br><br>
           <input type="submit" value="Register" name="register" class="button1">
            <input type="reset" value="Clear" name="clear" class="button1">
            <a href="homepage.php" target="_self"> Go to Homepage</a>
            <br><br>
            <?php
            if (isset($Confirmation)) {
                echo "<span style='color:green'><b>" . $Confirmation . "</b></span><br>";
            }
            ?>
        </form>     
    </div>
    </div>
</body>
</html>