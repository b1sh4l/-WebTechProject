<?php

$Error = "";
$Name = $Email = $Username = $Password = $Confirm_Password = $Gender = $DoB = "";
$day = $month = $year = 0;
$nameError = $emailError = $dobError = $usernameError = $genderError =  "";
$passError = $cpassError = "";

if (isset($_POST["register"])) {
    $name_words = $_POST["name"];
    $day = $_POST["day"];
    $month = $_POST["month"];
    $year = $_POST["year"];
	$email = $_POST["email"];
	$username = $_POST["username"];
	$pass = $_POST["pass"];
	
    if (empty($_POST["name"])) {
        $nameError = "Name is required";
    } 
	
    if (empty($_POST["email"])) {
        $emailError = "Email is required";
    } 
    
    if (empty($_POST["username"])) {
        $usernameError = "Username is Required";
    }
    if (empty($_POST["pass"])) {
        $passError = "Password is Required";
    }

    if (empty($_POST["cpassword"])) {
        $cpassError = "Confirm Password cannot be empty";
    } 

    if ((empty($_POST["day"])) or (empty($_POST["month"])) or (empty($_POST["year"]))) {
        $dobError = "Enter all the fields";
    } 

    if (empty($_POST["gender"])) {
        $genderError = "Gender Required";
    } 


    $Confirmation = "";
    if ($nameError == "" && $emailError == "" && $usernameError == "" && $passError == "" && $cpassError == "" && $genderError == "" && $dobError == "") {
        if (file_exists("data.json")) {
            $current_content = file_get_contents("data.json");
            $array_content = json_decode($current_content, true);
            $new_content = array(
                'Name' => $_POST["name"],
                'Email' => $_POST["email"],
                'Username' => $_POST["username"],
                'Password' => $_POST["pass"],
                'Gender' => $_POST["gender"],
                'DOB' => $DoB,
            );
            $array_content[] = $new_content;
            $final_content = json_encode($array_content, JSON_UNESCAPED_SLASHES);
            if (file_put_contents("data.json", $final_content)) {
                $Confirmation = "Registration Completed!";
            }
        } else {
            $Confirmation = "Registration Unsuccessful";
        }
    }
}

function validateInput($information)
{
    $information = trim($information);
    $information = stripslashes($information);
    $information = htmlspecialchars($information);
    return $information;
}

?>