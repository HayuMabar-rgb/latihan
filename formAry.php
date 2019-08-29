<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <center>
    <p>Form Array<p>
    </center>
    <fieldset>
    <legend>Form Array</legend>
    </fieldset>
    <<FORM action=" " method ="POST">
</body>
</html>
</form>
<?php
if(isset($_GET['submit'])){
    $jml_form = $_GET['jml'];
    for ($i=0; $i <= $_jml_form ; $i++) { 
?> 
<FORM action ="outary.php" method ="POST">
<label for="">nama</label>
<input type="text" name ="nama[]" required>
<label for ="">Kelas</label>
<input type="text" name="kelas[]" required><br><br>
   <?php }?>
   <input type ="submit" name="sbm" value="simpan">
   <input type ="reset" name ="reset">
   </FORM>
        <?php }
        ?>
