<html>
<head>
<title> Activity 3</title>
</head>
<body>
<h1> Activity 3 January 25</h1>
<h2>Nested Loop</h2>

<?php
    $nstars = 8;

    for($row =0; $row<$nstars; $row++){
        for($x = 0; $x<$nstars; $x++){
            echo"* ";
        }
        echo"<br/>";
    }

    echo"<hr>";

 
    for($row =0; $row<$nstars; $row++){
        for($x = 0; $x<$row+1; $x++){
            echo"* ";
        }
        echo"<br/>";
    }

    for($row =0; $row<$nstars; $row++){
        for($x = 0; $x<$nstars-$row; $x++){
            echo"* ";
        }
        echo"<br/>";
    }
?>
<hr>

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

    drawTrapezoid(5,10,"*");

    echo"<hr><hr>";

    echo"<div style='width:50%;margin:auto;background-color:blue;text-align:center;color:red;'>";
    drawTrapezoid(0,10,"*");
    echo"</div><hr/>";
    
    echo"<table style='background-color:blue;color:red;width:50%;margin:auto;'>";
    echo"<tr>";
    echo"<td>";
    echo"<div style ='width:50%; margin: auto; background-color:blue;text-align: center; color:red; line-height:0.5'>";
    drawTrapezoid(0,10,"*");
    echo"</div>";
    echo"</td>";
    echo"</tr>";
    echo"</table>";
    echo"<hr/>";
?>

    <table style='background-color:blue;color:red;width:50%;margin:auto;'>
        <tr>
            <td>
                <div style ='width:50%; margin: auto; background-color:blue;text-align: right; color:red;'>
                <?php   drawTrapezoid(3,10,"*");  ?>
                </div>
            </td>

            <td>
                <div style ='width:50%; margin: auto; background-color:blue;text-align: left; color:red;'>
                <?php   drawTrapezoid(3,10,"*");  ?>
                </div>
            </td>
        </tr>
    </table>

</body>

</html>