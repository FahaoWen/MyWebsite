<html>
<head>
<title>Activity 8 - form 5</title>
<style>
.error{color: #FF0000;}
</style>

</head>

<body>

<?php 
$Q1 = $Q2 = $Q3 = $Q4 = $Q5="";
$Q1Msg = $Q2Msg = $Q3Msg = $Q4Msg = $Q5Msg ="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["Q1"])){
        $Q1Msg = "Please answer this question";
    }
    else{
        $Q1 = test_input($_POST["Q1"]);
        if($Q1=="C"){
            $Q1Msg="You are correct!";
        }
        else{
            $Q1Msg="You are not correct! The answer is C.";
        }
    }

    if(empty($_POST["Q2"])){
        $Q2Msg = "Please answer this question";
    }
    else{
        $Q2 = test_input($_POST["Q2"]);
        if($Q2=="B"){
            $Q2Msg="You are correct!";
        }
        else{
            $Q2Msg="You are not correct! The answer is B.";
        }
    }

    if(empty($_POST["Q3"])){
        $Q3Msg = "Please answer this question";
    }
    else{
        $Q3 = test_input($_POST["Q3"]);
        if($Q3=="A"){
            $Q3Msg="You are correct!";
        }
        else{
            $Q3Msg="You are not correct! The answer is A.";
        }
    }

    if(empty($_POST["Q4"])){
        $Q4Msg = "Please answer this question";
    }
    else{
        $Q4 = test_input($_POST["Q4"]);
        if($Q4=="B"){
            $Q4Msg="You are correct!";
        }
        else{
            $Q4Msg="You are not correct! The answer is B.";
        }
    }

    if(empty($_POST["Q5"])){
        $Q5Msg = "Please answer this question";
    }
    else{
        $Q5 = test_input($_POST["Q5"]);
        if($Q5=="C"){
            $Q5Msg="You are correct!";
        }
        else{
            $Q5Msg="You are not correct! The answer is C.";
        }
    }

   

}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }

?>

<h1>Welcome to the free online test!</h1>
<p> This website will evalute your knowledeg in PHP</p>

<form action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"method ="post">
Question 1: How do you write "Hello World" in PHP
<br>
<input type="radio" name = "Q1"<?php  if(isset($Q1) && $Q1=="A") echo "checked";?> value ="A"> A. Document.Write("Hello World");<br>
<input type="radio" name = "Q1"<?php  if(isset($Q1) && $Q1=="B") echo "checked";?> value ="B"> B. "Hello World";<br>
<input type="radio" name = "Q1"<?php  if(isset($Q1) && $Q1=="C") echo "checked";?> value ="C"> C. echo"Hellop World";<br>
<span class="error"><?php echo $Q1Msg ?> </span><br>

Question 2: All variables in PHP start with which symbol?
<br>
<input type="radio" name = "Q2"<?php  if(isset($Q2) && $Q2=="A") echo "checked";?> value ="A"> A. &<br>
<input type="radio" name = "Q2"<?php  if(isset($Q2) && $Q2=="B") echo "checked";?> value ="B"> B. $<br>
<input type="radio" name = "Q2"<?php  if(isset($Q2) && $Q2=="C") echo "checked";?> value ="C"> C. !<br>
<span class="error"><?php echo $Q2Msg ?> </span><br>

Question 3: What is the correct way to end a PHP statement?
<br>
<input type="radio" name = "Q3"<?php  if(isset($Q3) && $Q3=="A") echo "checked";?> value ="A"> A. ;<br>
<input type="radio" name = "Q3"<?php  if(isset($Q3) && $Q3=="B") echo "checked";?> value ="B"> B. .<br>
<input type="radio" name = "Q3"<?php  if(isset($Q3) && $Q3=="C") echo "checked";?> value ="C"> C. New Line<br>
<span class="error"><?php echo $Q3Msg ?> </span><br>

Question 4: What is the correct way to create a function in PHP?
<br>
<input type="radio" name = "Q4"<?php  if(isset($Q4) && $Q4=="A") echo "checked";?> value ="A"> A. Create myFunction()<br>
<input type="radio" name = "Q4"<?php  if(isset($Q4) && $Q4=="B") echo "checked";?> value ="B"> B. function myFunction()<br>
<input type="radio" name = "Q4"<?php  if(isset($Q4) && $Q4=="C") echo "checked";?> value ="C"> C. new_function myFunction()<br>
<span class="error"><?php echo $Q4Msg ?> </span><br>

Question 5: Which one of these variables has an illegal name?
<br>
<input type="radio" name = "Q5"<?php  if(isset($Q5) && $Q5=="A") echo "checked";?> value ="A"> A. $my_Var<br>
<input type="radio" name = "Q5"<?php  if(isset($Q5) && $Q5=="B") echo "checked";?> value ="B"> B. $myVar<br>
<input type="radio" name = "Q5"<?php  if(isset($Q5) && $Q5=="C") echo "checked";?> value ="C"> C. $my-Var<br>
<span class="error"><?php echo $Q5Msg ?> </span><br>


<input type = "submit">
</form>
<br>
</body>
</html>

<!-- add five questions from PHP W3 School -->