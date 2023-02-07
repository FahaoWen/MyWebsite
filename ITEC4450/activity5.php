<html>
<head>
<title>Activity 5</title>
</head>

<body>

<h1>Activity 5 January 30</h1>
<p>Created by Nick Wen</p>
<h2>Variable Scope</h2>

<?php

    $x=5; // gobal variable

    function myFunction(){
        echo"The value of variable of x is ".$x;
        echo"<p>When accessing global varibale x inside a function, we got a warning</p>";
        global $x;
        echo"The value of variable of x is: ".$x;
        $a =10; // local variable
        echo"<br> The value of variable inside the function is: ".$a."<br>" ;
    }

    myFunction();
    echo"The value of variable x outside of the function is: ".$x;
    echo"<br>The value of local variable  outside function is".$a;
    echo"<br>Accessing local variable outside of a function will generate a warning.";
?>


<h2>How to Create Tables with PHP</h2>

<?php

    echo"<h3>table 1 </h3>";
    $SIZE=8;
    $alternate=1;
    echo"<table border='1' style='width:20%;margin:auto;'>";
    for($row=0; $row<$SIZE; $row++){
        echo"<tr>";
        
        for($col=0;$col<$SIZE;$col++){
            if($col %2 ==$alternate){
                echo"<td style='background-color:black;'>";
            }
            else{
                echo"<td style = 'background-color: white;'>";
            }
            echo"&nbsp</td>";
        }

        echo"</tr>";
        $alternate = !$alternate;
    }
    echo"</table>";
    


    echo"<h3>table 2 </h3>";

    echo"<table border='1' style='width:20%;margin:auto;'>";
    for($row=0; $row<$SIZE; $row++){
        echo"<tr>";
        
        for($col=0;$col<$SIZE;$col++){
            if($col %2 ==$alternate){
                echo"<td style='background-color:white;'>";
            }
            else{
                echo"<td style = 'background-color: black;'>";
            }
            echo"&nbsp</td>";
        }

        echo"</tr>";
        $alternate = !$alternate;
    }
    echo"</table>";
    


    echo"<h3>table 3 </h3>";
    $SIZE=18;

    echo"<table border='1' style='width:40%;margin:auto;'>";
    for($row=0; $row<$SIZE; $row++){
        echo"<tr>";
        
        for($col=0;$col<$SIZE;$col++){
            if(($row+$col) %3 ==0){
                echo"<td style='background-color:red;'>";
            }
            elseif(($row+$col)%3==1){
                echo"<td style = 'background-color: green;'>";
            }
            elseif(($row+$col)%3==2){
                echo"<td style ='background-color:blue'>";
            }
            echo"&nbsp</td>";
        }

        echo"</tr>";
    
    }
    echo"</table>";
    

    echo"<h3>table 4 </h3>";
    $n =4;
    $color=array("red","green","blue","pink");
    echo"<table border='1' style='width:40%;margin:auto;'>";
        for($row=0;$row<$SIZE;$row++){
            echo"<tr>";
            for($col=0;$col<$SIZE;$col++){
                for($i=0;$i<$n;$i++){
                    if(($row+$col)%$n == $i){
                       echo"<td style ='background-color: ".$color[$i].";' >";     
                    }
                    echo"&nbsp</td>";
                }
                echo"</td>";
            }
            
            echo"</tr>";
        }

    echo"</table>";


?>

</body>

</html>