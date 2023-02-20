<html>
<head>
<title>Lab 2</title>
</head>

<body>
<h1 style="text-align: center"> Lab 2 </h1>

<p style="text-align: center">Created by Nick Wen</p>
<h2 style="text-align: center"> Lab2 display a multiplication table of random size from 5*5 to 20*20</h2>
<?php

$num = rand(5,20);
echo"<p style='text-align: center ; font-weight:bold;'>This is a multiplication table of ".$num."*".$num."</p>";
echo"<table border='1' style='width:40%;margin:auto;'>";
    for($i =0; $i<$num; $i++){
        echo "<tr>";

        for($j=0;$j<$num;$j++){

            if($i%2==1){
                echo"<td style='background-color:aqua;'>";
            }
            
            else{
             echo"<td style = 'background-color: pink;'>";  
            }
             echo"<p style='text-align: center '>".($i+1)*($j+1)."</p>";

            echo"</td>";

        }


        echo"</tr>";
    }


echo"</table>";


?>



</body>



</html>