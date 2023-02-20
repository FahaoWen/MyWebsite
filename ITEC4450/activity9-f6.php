<html>
<head>
<title>Activity 9 - form 6</title>
<style>
.error{color: #FF0000;}
</style>

</head>

<body>
<?php 
    $nameErr = $emailErr = $genderErr = $phoneErr= $websiteErr =$timeErr = $password1=$password2="";
    $name = $email = $phone= $website=$gender=$comment=$time=$passwordErr="";
    $flag =0;
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // name field
    if(empty($_POST["name"])){ // if empty
        $nameErr = "Name is required"; 
        $flag=1;
    }
    else{
        $name = test_input($_POST["name"]);

        if(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
            $nameErr = "Only letters and white space allowed";
            $flag =1;
            // make sure only letter and white space allow
        }
    }
    
    //emial field
    if(empty($_POST["email"])){
        $emailErr = "Email is required";
        $flag=1;
    }
    else{
        $email = test_input($_POST["email"]);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailErr = "Not a valid email address ";   
            $flag=1;
    }
}


    //phone field

    if(empty($_POST["phone"])){ // if empty
        $phoneErr = "Phone number is required"; 
        $flag=1;
    }
    else{
        $phone = test_input($_POST["phone"]);

        if(!preg_match("^[1-9]\d{2}-\d{3}-\d{4}$",$phone)){
            $phoneErr = "This phone number is not valid";
            $flag=1;
            // make sure only letter and white space allow
        }
    }

    // gender field
    if(empty($_POST["gender"])){ // if empty
        $genderErr = "Gender is required"; 
        $flag=1;
    }
    else{
        $gender = test_input($_POST["gender"]);

    }

     // time field
     if(empty($_POST["time"])){ // if empty
        $timeErr = "Appointment time is required"; 
        $flag=1;
    }
    else{
        $time = test_input($_POST["time"]);
        
    }

    //website field
    if(empty($_POST["website"])){
        $websiteErr ="";
    }

    else{
        $website = test_input($_POST["website"]);
        if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)){
        $websiteErr = "Website URL is not valid";
        $flag=1;
        }   
    }

    //time field
    if($_POST["time"]=="blank"){
        $timeErr ="Please select a appointment time";
        $flag=1;
    }

    else{
        $website = test_input($_POST["time"]);

        $flag=0;
        }   
    




    //password field


    if(empty($_POST["password1"])){
        $passwordErr ="password is required";
        $flag=1;
    }

    else{
        if($password1!=$password2){
        $passwordErr="Password does not match!";    
        $flag=1;
        } 
        else{
            $password1= $_POST["password1"];
            $password1= $_POST["password2"];
        $flag=0;    
        }  
    }

   
    $comment = test_input($_POST["comment"]);
    

if($flag==0){
    // header("Location:onlineQuiz.php");
    // exit();

    // if there is not red flag, we are ready to make connect to the database
    include("connection.php");

    // check email to see if email in database or not
    $query = mysqli_query($dbc, "SELECT * FROM users WHERE email ='$email'");
    $num_email = mysqli_num_rows($query);

    if($num_email!=0){
        echo "Email has been used! Please use another email address.<br>";
    }

    // check if phone number is unique
    $query = mysqli_query($dbc, "SELECT * FROM users WHERE phone ='$phone'");
    $num_phone = mysqli_num_rows($query);

    if($num_phone!=0){
        echo "Phone has been used! Please use another phone number.<br>";
    }

    // insert new user into table 
    if($num_email==0 && $num_phone ==0){
        mysqli_query($dbc,"INSERT INTO users(name, email,phone, gender,pw) VALUES('$name','$email','$phone','$gender','$password1')");
        $registered = mysqli_affected_rows($dbc);
        echo $registered." row has/have been affected.<br>";
        header("Location:succReg.php");
        exit();
    }
    else{
        echo"Something unexpected happened, we are not able to register you!<br>";
    }

    // mysqli_query($dbc,"INSERT INTO users(name, email,phone, gender,pw) VALUES('$name','$email','$phone','$gender','$password1')");
    // $registered = mysqli_affected_rows($dbc);
    // echo $registered." row has/have been affected. ";

}
    // else{
    //     echo"Sorry, not able to register you!";
    // }
 
}




function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }

?>

<h1>Activity 9 February 15</h1>
<p>Created by Nick Wen</p>
<h2>Form 6</h2>
<p>This is a simple form using POST method and PHP SELF</p>
<p>Update for Feb 6 : add required field and simple validation<br></p>
<p>Update on Feb 8: add dropbox; add default value to the text input; redirect to a different webpage</p>
<p>Update on Feb 13: Major update. Submit and save user information into a database</p>
<p>Update on Feb 15: submit and store user, we want to check email and phone mumber, make sure it does not exists in the database</p>
<span class="error"> * Required field</span>
<form action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"method ="post">
Name: <input type ="text" name= "name" value = "<?php echo$name;?>">
<span class = "error">*
    <?php  echo $nameErr;  ?>
</span>
<br><br>

Email: <input type ="text" name= "email" value = "<?php echo$email;?>">
<span class = "error">* 
    <?php  echo $emailErr;  ?>
</span><br><br>   
Phone: <input type ="text" name= "phone" value = "<?php echo$phone;?>">
<span class = "error">* 
    <?php  echo $phoneErr;  ?>
</span><br><br>
Website: <input type ="text" name= "website" value = "<?php echo$website;?>">
<span class = "error">
    <?php  echo $websiteErr;  ?>
</span>
<br><br>
Comment: <textarea name ="comment" rows ="5" cols="40"> <?php echo $comment;?></textarea> <br><br>
Gender:
<input type="radio" name="gender" <?php if (isset($gender)&& $gender =="female") echo"checked";?> value="female" > Female
<input type="radio" name="gender" <?php if (isset($gender)&& $gender =="male") echo"checked";?> value="male"> Male
<input type="radio" name="gender" <?php if (isset($gender)&& $gender =="other") echo"checked";?> value="other"> Other
<span class = "error">* 
    <?php  echo $genderErr;  ?>
</span>
<br><br> 


Password: <input type ="password" name= "password1" value = "<?php echo$password1;?>">
<span class = "error">* 
    <?php  echo $passwordErr;  ?>
</span><br><br>   

Confirm Password: <input type ="password" name= "password2" value = "<?php echo$password2;?>">
<span class = "error">* 
    <?php  echo $passwordErr;  ?>
</span><br><br>  


Select your preferred appointment time:
<select name ="time">
    <option  <?php if(isset($time)&&$time =="blank") echo "selected = 'selected'";?> value="blank"> -----Select-----</option>
    <option  <?php if(isset($time)&&$time =="AM") echo "selected = 'selected'";?> value="AM">  Morning at 9am</option>
    <option  <?php if(isset($time)&&$time =="PM") echo "selected = 'selected'";?> value="PM">  Afternoon at 2pm</option>
    <option  <?php if(isset($time)&&$time =="EV") echo "selected = 'selected'";?> value="EV">  Evening at 6pm </option>
</select>
<span class ="error">*
    <?php echo $timeErr?>
</span>    
<br>
<input type = "submit">

</form>
<hr>

<?php
echo"This section is for testing purpose.<br>";
echo"Your name is: ".$name."<br>";
echo"Your email is: ".$email."<br>";
echo"Your phone is: ".$phone."<br>";
echo"Your comment is: ".$comment."<br>";
echo"Your website is: ".$website."<br>";
echo"Your gender is: ".$gender."<br>";
?>
</body>
</html>