<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array</title>
</head>
<body>
    <?php 
        $numberList = array(12,'Itamar',38,true,10);
        
        echo $numberList[0];
        echo "<br>";
        echo $numberList[1];
        echo "<br>";
        echo $numberList[2];
        echo "<br>";
        echo $numberList[3];
        echo "<br>";
        echo $numberList[4];
        echo "<br>";

        $list = array(45,98,100,56,111,5,8);
        echo "<br>";
        echo max($list);
        echo "<br>";
        echo min($list);
        echo "<br>";
        echo print_r($list);
        echo "<br>";
        sort($list);
        echo print_r($list);
        echo "<br>";
    ?>
</body>
</html>