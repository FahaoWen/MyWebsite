<html>
<head>
<title>Activity 2</title>
</head>
<body>
<h1> Activity 2 Jan 23</h1>

<h2>If Else </h2>

<?php
    $s = "PHP Coding";
    var_dump($s); // use check the type and length of the variable

    echo "<br/>";
    $time = date("H");
    var_dump($time);
    echo "<br/>";

    if($time <"10"){
        echo "Have a good morning!<br/>";
    } elseif($time<"20"){
        echo "Have a good day!<br/>";
    } else{
        echo "Have a good night<br/>";
    }
?>

<h2>While Loop</h2>

<?php
    $x = 1;
    var_dump($x);
    echo"<br/>";
    while($x <=5){
        echo "The value of variable of x is $x <br/>";
        $x++;
    }

    echo"The final value of x after the loop is $x <br/>";
?>

<h2>For Loop</h2>

<?php
    for($x=0; $x<=100; $x+=10){
        echo "The value of x is $x <br/>";
    }

    echo"A 2nd for loop:<br/>";

    for($x=0;$x<=100;$x+=1){
        echo"$x"." ";
    }
    echo"<br/>";
    
    $sum = 0;
    for($x=0; $x<=100; $x++){
        $sum+=$x;
    }
    echo"The value of sum from 0 to 100 is $sum";
?>

<h2>Nested Loop</h2>

<?php
    for($row =0; $row<10; $row++){
        for($star = 0; $star<10; $star++){
            echo"* ";
        }
        echo"<br/>";
    }
?>

<h2>Function</h2>

<?php
    function drawTrapezoid($top, $bottom, $letter){
        for($row=$top; $row<=$bottom;$row++){
            for($i=0;$i<=$row;$i++){
                echo "$letter";
            }
            echo"<br/>";
        }

    }
?>

<?php
    drawTrapezoid(3,10,"*");
    
?>

</body>
</html>
