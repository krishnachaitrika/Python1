1  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "index.php" method = "post">
        <label> Username: </label>
        <input type = "text" name = "username"><br>
        <label> Password: </label>
        <input type = "password" name = "password"><br>
        <input type = "submit" name = "submit">
    </form> 
</body>
</html>
<?php
if (isset($_POST["submit"])) {
    $u =$_POST["username"];
    $p =$_POST["password"];
    if(empty($u)) {
        echo "Username is not entered";
    }
    elseif(empty($p)){
        echo"password is not entered ";
    }
    else{
        echo "Hello {$u}";
    }
}

?>