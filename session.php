<?php
/****************************************************
Nama file : session01.php
Halaman ini merupakan halaman contoh penciptaan session.
Perintah session_start() harus ditaruh di perintah pertama
tanpa spasi di depannya. Perintah session_start() harus ada
pada setiap halaman yang berhubungan dengan session
*****************************************************/

 session_start();
 if (isset($_POST['Login'])) {
     $user = $_POST['user'];
     $pass = $_POST['pass'];
    //periksa login
    if ($user == "achmatim" && $pass == "123") {
        // menciptakan session
        $_SESSION['login'] = $user;
        // menuju ke halaman pemeriksaan session
        echo "<h1>  Anda berhasil login";
        echo "<h2>klik <a href = ' session2.php '>Di Sini (session2.php)</a> untuk menuju ke halaman
        pemeriksaan session";
    }
 
}else {
    ?>
     <!DOCTYPE html>
     <html>
     <head>
         <meta charset="utf-8" />
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <title>Login Here</title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
         <script src="main.js"></script>
     </head>
     <body>
         <form action ="" method="post">
         <h2>login Here</h2>
         User Name :<input typ ="text" name ="user"><br>
         Password  :<input type ="password" name =" pass "><br> 
         <input type ="submit" name =" login " value ="Log In";
         </form>
     </body>
     </html>
     <?
}
?>