<?php   
session_start();
if (isset($_SESSION['user'],$_SESSION['pass'])) {

    header('refresh: 4; url=news.php');
    $msg = '<small style="color: green; background-color: rgb(152, 255, 152);">User Already Logged In!</small>';
    
}else {
    $msg = "";
    if (isset($_POST['user'],$_POST['pass'],$_POST['submit'])) 
    {

        $user = $_POST['user'];
        $pass = $_POST['pass'];
        if ($user == "admin" && $pass == "admin" ) {
            $msg = '<small style="color: green; background-color: rgb(152, 255, 152);">Logged In!</small>';
            $_SESSION['user'] = $user;
            $_SESSION['pass'] = $pass;
            header("refresh: 2; url=news.php");
        }else{
            $msg = '<small style="color: red; background-color: rgb(250, 111, 111);">Invalid Credentials!</small>';

        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>


<form class="loginform" action="index.php" method="POST">
  

  <div class="container" >
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="user" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>
    <?php echo $msg ;?>
    <button type="submit" name="submit" class="submit">Login</button>
    
  </div>
</form>
    
</body>
</html>

