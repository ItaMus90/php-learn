<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Global Scope</title>
</head>
<body>
    <?php 
        $x = "Outside <br>"; //global
        
        function convert(){
            global $x;
            echo $x;
            $x = "inside <br>"; //local
            echo $x;
        } 

        convert();

        echo $x;
    ?>
</body>
</html>