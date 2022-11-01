<?php
$file = fopen("connection.txt", "r+");
$us = fgets($file);
fseek($file, strlen($us));
$ps = fgets($file);
$msg = "";
if (isset($_POST['submit'])) {

    $user = $_POST['user'];
    $pass = $_POST['pass'];
    if ($user == trim($us) && $pass == trim($ps)) {
        $msg = '<small style="color: green; background-color: rgb(152, 255, 152);">Logged In!</small>';
    } else {
        $msg = '<small style="color: red; background-color: rgb(250, 111, 111);">Invalid Credentials!</small>';
    }
}
if (isset($_POST['reset'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $contents = file_get_contents($file);
    $contents = str_replace(trim($us), $user, $contents);
    $contents = str_replace(trim($ps), $pass, $contents);
    file_put_contents("connection.txt", $contents);
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


        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="user" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="pass" required>
            <?php echo $msg; ?>
            <button type="submit" name="submit" class="submit">Login</button>
            <button type="submit" name="reset" class="reset">Reset</button>
        </div>
    </form>

</body>

</html>