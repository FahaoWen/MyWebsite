<html>
<head>
<title> Activity 4</title>
</head>
<body>
<h1> Activity 4 January 27</h1>
<p>Created by Nick Wen</p>

<h2> Functions defined in another PHP file - Library </h2>

<?php
    include "activity4lib.php";
    showMessage();

    for($i=0;$i<20;$i++){
        echo"Message ".($i+1).": ";
        showMessage();
    }
    
    for($i=0;$i<20;$i++){
        echo"<span style = 'font-size:".(2*$i+10)."; color:rgba(".(10*$i+55).",0,0,1);'>";
        echo"Message ".($i+1).": ";
        showMessage();
        echo"</span>";
    }
?>

<hr/>

<?php
    $t = rand(10,100);
    if($t<40){
        showImage("freezing");
    }elseif($t<55){
        showImage("cold");
    }elseif($t<80){
        showImage("hot");
    }else{
        showImage("warm");
    }



?>

</body>
</html>