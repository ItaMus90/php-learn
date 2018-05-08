
<?php
    if(isset($_POST['submit'])){
        $min = 5;
        $max = 10;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $names = array("Itamar","Chen","Adi","Shacked","Shani");
        if(strlen($username) < $min){
            echo "Username has to be longer than 5";
        }

        if(strlen($username) > $max){
            echo "Username cannot be longer than 10";
        }

        if(!in_array($username, $names)){
            echo "Sorry you are not allowed";
        }else{
            echo "Welcome";
        }
        //echo $password. " " .$username; 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
</head>
<body>
    <form action="form.php" method="post">
        <input type="text" placeholder="Enter Usernmae" name="username">
        <input type="password" placeholder="Enter Password" name="password">
        <br>
        <input type="submit" name="submit" value="submit"/>
    </form>
</body>
</html>