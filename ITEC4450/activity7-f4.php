<html>
<head>
<title>Activity 7 - form 4</title>
<style>
.error{color: #FF0000;}
</style>

</head>

<body>
<?php 
    $nameErr = $emailErr = $genderErr = $phoneErr=$websiteErr ="";
    $name = $email = $phone= $website=$gender=$comment= "";
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // name field
    if(empty($_POST["name"])){ // if empty
        $nameErr = "Name is required"; 
    }
    else{
        $name = test_input($_POST["name"]);

        if(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
            $nameErr = "Only letters and white space allowed";
            // make sure only letter and white space allow
        }
    }
    
    //emial field
    if(empty($_POST["email"])){
        $emailErr = "Email is required";
    }
    else{
        $email = test_input($_POST["email"]);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailErr = "Not a valid email address ";   
    }
}


    //phone field

    if(empty($_POST["phone"])){ // if empty
        $phoneErr = "Phone number is required"; 
    }
    else{
        $phone = test_input($_POST["phone"]);

        if(!preg_match("/^\+?\d{1,4}?[-.\s]?\(?\d{1,3}?\)?[-.\s]?\d{1,4}[-.\s]?\d{1,4}[-.\s]?\d{1,9}$/",$phone)){
            $phoneErr = "This phone number is not valid";
            // make sure only letter and white space allow
        }
    }

    // gender field
    if(empty($_POST["gender"])){ // if empty
        $genderErr = "Gender is required"; 
    }
    else{
        $gender = test_input($_POST["gender"]);

    }

    //website field
    if(empty($_POST["website"])){
        $websiteErr ="";
    }

    else{
        $website = test_input($_POST["website"]);
        if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)){
        $websiteErr = "Website URL is not valid";
        }

        
    }
   
    $comment = test_input($_POST["comment"]);
    
}


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }

?>

<h1>Activity 7 February 6</h1>
<p>Created by Nick Wen</p>
<h2>Form 4</h2>
<p>This is a simple form using POST method and PHP SELF</p>
<p>Update for Feb 6 : add required field and simple validation<br></p>

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