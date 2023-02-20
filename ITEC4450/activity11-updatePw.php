
<?php  
$email = $password =$password1 =$password2= "";


if($_SERVER["REQUEST_METHOD"] == "POST"){

    $error = array(); // this is for all the error message
    include("connection.php");
    

    
    //email field
    if(empty($_POST['email'])){
        $error[] = "Email cannot be empty";
    }
    else{
        $email = mysqli_real_escape_string($dbc,$_POST['email']);
    }


    //password
    if(empty($_POST['password'])){
        $error[] = "Password cannot be empty";
    }
    else{
        $password = mysqli_real_escape_string($dbc,$_POST['password']);
    }

     // new password
     if(empty($_POST['password1'])){
        $error[] = "New password cannot be empty";
    }
    else{
        $password1 = mysqli_real_escape_string($dbc,$_POST['password1']);
    }

    // confirm password
    if(empty($_POST['password2'])){
        $error[] = "Confirm password cannot be empty";
    }
    else{
        $password2 = mysqli_real_escape_string($dbc,$_POST['password2']);
    }


    // if there is no error/ no red flag 
    if(empty($error)){
        $qs = "SELECT id FROM users WHERE email = '$email' AND pw = '$password' ";
        $r = mysqli_query($dbc,$qs);
        $num = mysqli_num_rows($r);// checking how many row in the query is affected.
    
        if($num ==1){ // return one row, which is great
            // now we can check the password to see if it matches
            if($password1==$password2){ // new password == confirm password; ready to update
               $qs = "UPDATE users SET pw = '$password1' WHERE email = '$email'"; 
               $r = mysqli_query($dbc,$qs);
               $num = mysqli_affected_rows($dbc);// number of row being affected should be 1
                  
               if($num == 1){
                    echo"Password has been updated!";
               }
               else{
                    echo"Something went wrong! Please try again later.";
               }
            }
            else{
                echo "New password does not match with confirm password.<br>";
            }
        }
        else{ // return zero or more than one row, which is bad, show error
        
            echo "Sorry, something is wrong!!!!";
        }

    }
    else{ // there is error 
        foreach($error as $msg){ // foreach method will print out every index in array.
            echo $msg."<br>";
        }
    }

}



?>


<html>
<head>
<title>Activity 11 - Update Password</title>
<style>
.error{color: #FF0000;}
</style>

</head>

<body>
<h3 style = "text-align: center"> Update Password </h3>
<p style = "text-align: center"> Creatd by Nick Wen</p>

<form action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"method ="post">
Email <input type = "text" name = "email" size="20" maxlength="50" value ="<?php echo $email;?>">
<br><br>


Current Password <input type = "text" name = "password" size="20" maxlength="50" value ="<?php echo $password;?>">
<br><br>

New Password <input type = "text" name = "password1" size="20" maxlength="50" value ="<?php echo $password1;?>">
<br><br>

Confirm Password <input type = "text" name = "password2" size="20" maxlength="50" value ="<?php echo $password2;?>">
<br><br>

<input type="submit" value ="Update Password">
</form>

</body>

</html>