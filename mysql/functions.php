<?php include "db.php"; ?>
<?php 

    function createUser(){
        if(isset($_POST['submit'])){
            global $connection;
            $username = $_POST['username'];
            $password = $_POST['password'];
    
            $query = "INSERT INTO users (username,password) VALUES ('$username','$password')";
    
            $result = mysqli_query($connection, $query);
    
            if(!$result){
                die('Query FAILED '.mysqli_error().'<br>');
            }else{
                echo "Recored create";
            }
        }
    }

    function getUsers(){
        global $connection;
        $query = "SELECT * FROM users";

        $result = mysqli_query($connection, $query);
    
    
        if(!$result){
            die('Query FAILED '.mysqli_error().'<br>');
        }

        while($rows = mysqli_fetch_assoc($result)){
            $id = $rows['id'];
            echo "<option value='$id'>$id</option>";
         }
    }

    function updateUser(){
        if(isset($_POST['submit'])){
            global $connection;
            $username = $_POST['username'];
            $password = $_POST['password'];
            $id = $_POST['id'];
    
            $query = "UPDATE users SET username = '$username', password = '$password' WHERE id = '$id'";
            $result = mysqli_query($connection, $query);
    
            if(!$result){
                die("QUERY FAILED". mysqli_error($connection));
            }else{
                echo "Recored update";
            }
        }
    }

    function deleteUser(){
        if(isset($_POST['submit'])){
            global $connection;
            $username = $_POST['username'];
            $password = $_POST['password'];
            $id = $_POST['id'];
    
            $query = "DELETE FROM users WHERE id = '$id'";
            $result = mysqli_query($connection, $query);
    
            if(!$result){
                die("QUERY FAILED". mysqli_error($connection));
            }else{
                echo "Recored delete";
            }
        }
    }

    function readUsers(){
        global $connection;
        if($connection){
            echo "We are connect <br>";
        }else{
            die("Database connection failed <br>");
        }

        $query = "SELECT * FROM users";

        $result = mysqli_query($connection, $query);

        if(!$result){
            die('Query FAILED '.mysqli_error().'<br>');
        }
 
        while($row = mysqli_fetch_assoc($result)){
            print_r($row);                    
        }
    }
?>