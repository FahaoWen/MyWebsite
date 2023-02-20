<?php
$email=$password="";
// when user click login
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include("connection.php");

    // get email and password from form
    $email = $_POST["email"];
    $password = $_POST["password"];

    // check if email is already in the database
    $query = mysqli_query($dbc,"SELECT * FROM users WHERE email ='$email'");
    $num_email = mysqli_num_rows($query);

    //indicate email exists in the database
    if($num_email !=0){
        while($row = mysqli_fetch_array($query)){
            $dbemail = $row['email'];
            $dbphone = $row['phone'];
            $dbpassword = $row['pw'];
            $dbname = $row['name'];
        }

        if($email == $dbemail){
            if($dbpassword==$password){
                echo"Congratulation! You logged in successfully!";
                header("Location:onlineQuiz.php");
                exit();
            }
            else{
                echo"Sorry your password is not correct! ";
            }
        }

    }
    else{
        echo"Sorry, we don't have your information. Please register first!";// email does not exist in the database
    }
        
    

}


?>



<html>
<head>
<title>Activity 10 - form 7 - login</title>
<style>
.error{color: #FF0000;}
</style>

</head>
<h3>Log in</h3>
<p> Created by Nick Wen </p>
<body>
<form action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"method ="post">


Email: <input type ="text" name= "email"><br><br>
  

Password: <input type ="password" name= "password" ><br><br>



<input type="submit" name ="submit" value= "login"><br><br>
</form>

<p> if you dont have account with us, please<a href ="activity9-f6.php"> click here to register</a></p>


</body>
</html>