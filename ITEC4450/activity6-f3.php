<html>
<head>
<title>Activity 6 - form 3</title>
</head>

<body>
<?php 
    $name = $email = $phone= $comment= "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $phone = test_input($_POST["phone"]);
    $comment = test_input($_POST["comment"]);
    $gender = test_input($_POST["gender"]);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }

?>

<h1>Activity 6 February 3</h1>
<p>Created by Nick Wen</p>
<h2>Form 3</h2>
<p>This is a simple form using POST method and PHP SELF</p>


<form action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"method ="post">
Name: <input type ="text" name= "name"><br><br>
Email: <input type ="text" name= "email"><br><br>   
Phone: <input type ="text" name= "phone"><br><br>

Comment: <textarea name ="comment" rows ="5" cols="40"></textarea> <br><br>
Gender:
<input type="radio" name="gender" value="female"> Female
<input type="radio" name="gender" value="male"> Male
<input type="radio" name="gender" value="other"> Other
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
echo"Your gender is: ".$gender."<br>";
?>
</body>
</html>