
<?php
session_start();
if (isset($_POST['Login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    if ($user == "kemal" && $pass= "123") {
        $_SESSION['login'] = $user;

        echo"<h1> Anda berhasil login</h1>";
      
    }
}else {
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <form action="" method ="post"></form>
   <h2> Login Here </h2>
   username :<input type = "text" name = "user"><br>
   password :<input type = "password" name ="pw"><br>
   <input type="submit" name ="Login" value ="log in">      
    </body>
    </html>
<?php }


?>