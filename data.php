<!DOCTYPE html>
<html>
<head>
<title></title>
<body>
<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["textarea"])){
  $textarea=$_POST["textarea"];
$createxml = fopen("data.xml","w");
  fwrite($createxml,$textarea); 
  fclose($createxml);
}}
?>
HI <?php echo $_POST["name"]; ?><br>
YOUR NUMBER IS : <?php echo $_POST["textfield"];
?>
</body>
</html>



