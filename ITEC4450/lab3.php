<html>
<head>
<title>Lab 3 </title>
<style>
.error{color: #FF0000;}
</style>
</head>
<body>

<?php 
    $lnameErr = $fnameErr= $emailErr = $genderErr = $fmailyErr=$returnErr= $levelErr= $majorErr= $phoneErr = $emialErr= 
    $unameErr = $pw1Err = $pw2Err= $attentionErr="";

    $lname = $fname = $ename = $gender = $bringfamily = $firtTime=$school=$major=$email=$phone=$wechat= $faset
    = $vacine = $uname=$pw1=$pw2= $anycomment=$admincomment="";
    $flag =0;
if($_SERVER["REQUEST_METHOD"] == "POST"){

 // lname field
 if(empty($_POST["lname"])){ // if empty
    $lnameErr = "Last name is required"; 
    $flag=1;
}
else{
    $lname = test_input($_POST["lname"]);

    if(!preg_match("/^[a-zA-Z-' ]*$/",$lname)){
        $lnameErr = "Only letters and white space allowed";
        $flag =1;
        // make sure only letter and white space allow
    }
}

// fname field
if(empty($_POST["fname"])){ // if empty
    $fnameErr = "First name is required"; 
    $flag=1;
}
else{
    $fname = test_input($_POST["fname"]);

    if(!preg_match("/^[a-zA-Z-' ]*$/",$fname)){
        $lnameErr = "Only letters and white space allowed";
        $flag =1;
        // make sure only letter and white space allow
    }
}

// english name

$ename = test_input($_POST["ename"]);

// gender filed

if(empty($_POST["gender"])){ // if empty
    $genderErr = "Gender is required"; 
    $flag=1;
}
else{
    $gender = test_input($_POST["gender"]);

}


// family field
if(empty($_POST["bringfamily"])){ // if empty
    $fmailyErr = "This field is required"; 
    $flag=1;
}
else{
    $bringfamily = test_input($_POST["bringfamily"]);

}

//return field

if(empty($_POST["firtTime"])){ // if empty
    $returnErr = "This field is required"; 
    $flag=1;
}
else{
    $firtTime= test_input($_POST["firtTime"]);

}

// level field

if($_POST["level"]=="blank"){
    $levelErr ="Please select a academic level";
    $flag=1;
}

else{
    $level = test_input($_POST["level"]);

    $flag=0;
    }   


// faset field

$faset = test_input($_POST["faset"]);



// major field

if(empty($_POST["major"])){ // if empty
    $majorErr = "Major  is required"; 
    $flag=1;
}
else{
    $major = test_input($_POST["major"]);

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

// user name field

if(empty($_POST["uname"])){ // if empty
    $unameErr = "This field is required"; 
    $flag=1;
}
else{
    $uname = test_input($_POST["uname"]);

}


    //password field
   
    $pw1= $_POST["password1"];
    $pw2= $_POST["password2"];
   if(empty($_POST["password1"])){
    $pw1Err ="password is required";
    $flag=1;
}

else{
   
    if($pw1!=$pw2){
    $pw1Err="Password does not match!";    
    $flag=1;
    } 
    
}


    // attention filed

if(empty($_POST["attention"])){ // if empty
    $attentionErr = "This filed is required"; 
    $flag=1;
}
else{
    $attention = test_input($_POST["attention"]);

}

// special attention

if(empty($_POST["attention"])){ // if empty
    $attentionErr = "This field is required"; 
    $flag=1;
}
else{
    $attention = test_input($_POST["attention"]);

}

// any comment and admin comment
$anycomment = test_input($_POST["anycomment"]);
$admincomment = test_input($_POST["admincomment"]);
$phone = test_input($_POST["phone"]);
$vacine = test_input($_POST["vacine"]);
$wechat = test_input($_POST["wc"]);

$school = test_input($_POST["school"]);



}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }

?>



<h1 style ="text-align: center"> Lab 3 </h1>
<p style ="text-align: center"> Created by Nick Wen </p>

<h2 style= "color: blue"> Student Registration Inforation</h2>



<div style ="border :solid;padding:1.1em">
<form action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"method ="post" >
Last Name: <span class = "error">*</span><input type ="text" name= "lname" value = "<?php echo$lname;?>">
<span class = "error">
    <?php  echo $lnameErr;  ?>
</span><br>

First Name: <span class = "error">*</span><input type ="text" name= "fname" value = "<?php echo$fname;?>">
<span class = "error">
    <?php  echo $fnameErr;  ?>
</span>
<br>
English Name(if you have one): <input type = "text" name = "ename" value = "<?php echo$ename; ?>">
<br>
Gender:<span class = "error">*</span>
<input type="radio" name="gender" <?php if (isset($gender)&& $gender =="female") echo"checked";?> value="female" > Female
<input type="radio" name="gender" <?php if (isset($gender)&& $gender =="male") echo"checked";?> value="male" > Male
<input type="radio" name="gender" <?php if (isset($gender)&& $gender =="other") echo"checked";?> value="other" > Other
<span class = "error">
    <?php  echo $genderErr;  ?>
</span>
<br>

Brining family/relatives or not:<span class = "error">*</span>
<input type="radio" name="bringfamily" <?php if (isset($bringfamily)&& $bringfamily =="yes") echo"checked";?> value="yes" > Yes
<input type="radio" name="bringfamily" <?php if (isset($bringfamily)&& $bringfamily =="no") echo"checked";?> value="no" > No
<span class = "error">
    <?php  echo $fmailyErr;  ?>
</span>
<br>

Are you a returnings student or first-time student?<span class = "error">*</span>
<input type="radio" name="firtTime" <?php if (isset($firtTime)&& $firtTime =="Returning") echo"checked";?> value="Returning" > Returning
<input type="radio" name="firtTime" <?php if (isset($firtTime)&& $firtTime =="FirstTime") echo"checked";?> value="FirstTime" > FirstTime
<span class = "error">
    <?php  echo $returnErr;  ?>
</span>
<br>


I am comming to the US to be a <span class = "error">*</span>
<select name = "level">
<option <?php if(isset($level)&&$level =="blank") echo "selected = 'selected'";?> value = "blank"> -- Select --</option>
<option <?php if(isset($level)&&$level =="ud") echo "selected = 'selected'";?> value = "ud"> undergraduate student</option>
<option <?php if(isset($level)&&$level =="gd") echo "selected = 'selected'";?> value = "gd"> graduate student</option>
<option <?php if(isset($level)&&$level =="vs") echo "selected = 'selected'";?> value = "vs"> visiting scholar</option>
<option <?php if(isset($level)&&$level =="ot") echo "selected = 'selected'";?> value = "ot"> other</option>
</select>


Are you attending FASET? If you will attend on 08/16, please choose FASET6
<select name = "faset">
<option <?php if(isset($faset)&&$faset =="na") echo "selected = 'selected'";?> value = "na">Not attending </option>
<option <?php if(isset($faset)&&$faset =="f6") echo "selected = 'selected'";?> value = "f6">FASET 6</option>
</select>
<span class ="error">*
    <?php echo $levelErr?>
</span> 
<br>

School you are graduated from: <input type ="text" name= "school" value = "<?php echo$school;?>"><br>
Major: <span class = "error">*</span><input type ="text" name= "major" value = "<?php echo$major;?>">
<span class ="error">*
    <?php echo $majorErr?>
</span> 
<br>
Email: <span class = "error">*</span><input type ="text" name= "email" value = "<?php echo$email;?>">
<span class = "error">* 
    <?php  echo $emailErr;  ?>
</span>
</span> 
<br>
Phone in case of emergency: <input type ="text" name= "phone" value = "<?php echo$phone;?>"><br>

WeChat ID: <input type ="text" name= "wc" value = "<?php echo$wechat;?>"><br>
Did you already get COVID Vaccination: <input type ="text" name= "vacine" value = "<?php echo$vacine;?>"><br>
Choose a user Name:<span class = "error">*</span> <input type ="text" name= "uname" value = "<?php echo$uname;?>">
<span class ="error">
    <?php echo $unameErr?>
</span> 
<br>
Password:<span class = "error">*</span><input type ="password" name ="password1" value = "<?php echo $pw1 ?>">
<span class ="error">*
    <?php echo $pw1Err?>
</span> 
<br>
Confirm password:<span class = "error">*</span><input type ="password" name ="password2" value = "<?php echo $pw2 ?>">
<span class ="error">*
<?php echo $pw1Err?>
</span>
<br>

Special Attention:<span class = "error">*</span>
<input type="radio" name="attention" <?php if (isset($attention)&& $attention =="Yes") echo"checked";?> value="Yes" > Yes
<input type="radio" name="attention" <?php if (isset($attention)&& $attention =="No") echo"checked";?> value="No" > No
<span class ="error">*
    <?php echo $attentionErr?>
</span> 
<br>
</div>
Any Comment:<br> <textarea name ="anycomment" rows ="5" cols="40"> <?php echo $anycomment;?></textarea> <br><br>

Admin Comment: <br><textarea name ="admincomment" rows ="5" cols="40"> <?php echo $admincomment;?></textarea> <br><br>
<input type = "submit" name = "submit" value="submit"> <input type = "submit" name = "cancel" value="cancel"> 

</form>
</body>
</html>