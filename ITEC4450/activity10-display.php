<html>
<head>

<title>Display from database</title>
</head>
<body>

<h3 style ="text-align: center"> Display Information From The Database </h3>
<p style ="text-align: center">Created by Nick Wen </p>

</body>


</html>


<?php
include("connection.php");
 $query = "SELECT * FROM users";
 $q = mysqli_query($dbc,$query);
 
echo"<table border ='2' align = 'center' cellspacing='3' width='75%'>";

    echo"<tr style='font-weight:bold; font-size:1.1em; text-align: center; background-color:pink'> <td> id </td> <td> name </td> <td> email </td> <td> phone </td>        </tr>";

    while($row = mysqli_fetch_array($q)){
        echo"<tr style = 'text-align: center; background-color:#90FFF0'>";
        echo"<td>".$row['id']."</td>";
        echo"<td>".$row['name']."</td>";
        echo"<td>".$row['email']."</td>";
        echo"<td>".$row['phone']."</td>";
        echo"</tr>";
    
    }


echo"</table>";




?>