<html>
<head>
<title >Lab 1</title>
</head>

<h1 style='text-align:center'>Lab 1</h1>
<p style='text-align:center'>Created by Nick Wen</p>



<?php  
$rand = rand(1,8);

  function drawTrapezoid($top, $bottom, $letter){
    for($row=$top; $row<=$bottom;$row++){
        for($i=0;$i<=$row;$i++){
            echo "$letter";
        }
        echo"<br/>";
    }

}

function drawsquare($top, $letter){
    for($row=0; $row<=$top;$row++){
        for($i=0;$i<=$top;$i++){
            echo "$letter";
        }
        echo"<br/>";
    }

}

echo"<div style='width:50%;margin:auto;background-color:pink;text-align:center;color:red;line-height:0.5em;line-width 0.5em;'>";
drawTrapezoid(0,4,"*");
drawTrapezoid(2,9,"*");
drawTrapezoid(4,13,"*");
drawsquare(4,"*");
echo"</div><hr/>";


echo"<table style='background-color:aqua;color:red;width:50%;margin:auto;'>";
echo "<tr>";
for($i=0;$i<4;$i++){
   
           echo "<td>";
           echo" <div style ='margin: auto; background-color:aqua;text-align: center; color:red;line-height:0.5em;line-width 0.5em;'>";
            drawTrapezoid(0,4,"*");
            drawTrapezoid(2,9,"*");
            drawTrapezoid(4,13,"*");
            drawsquare(4,"*");
    echo"</div>
        </td>";
}
echo"</tr> </table><hr/><hr/>";


echo"<table style='background-color:aqua;color:red;width:50%;margin:auto;'>";
echo "<tr>";
for($i=0;$i<$rand;$i++){
    echo "<td>";
    echo" <div style ='margin: auto; background-color:aqua;text-align: center; color:red;line-height:0.5em;line-width 0.5em;'>";
     drawTrapezoid(0,4,"*");
     drawTrapezoid(2,9,"*");
     drawTrapezoid(4,13,"*");
     drawsquare(4,"*");
}
echo"</tr> </table><hr/><hr/>";


?>


</html>