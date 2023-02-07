<html>
<head>
<title>Activity 1</title>
</head>
<body>
<h1> Activity 1 Jan 20</h1>

<?php
    $school = "GGC"; 
    echo "I like ".$school."! <br/>";
    echo "I like ".$school."! <br/>";



?>
<hr>

<?php
    $n = 123.45678;
    echo "This number n = ".$n."<br/>";
    printf("The number in float is: %f<br/>",$n);
    printf("The number in decimal is: %d<br/>",$n);
    printf("The number in string is: %s<br/>",$n);
    printf("The number in float with 3 digit decimal is: %.3f<br/>",$n);
    echo "The number in float with 3 dicimals is: ".round($n,3)."<br/>";
?>

</body>
</html>