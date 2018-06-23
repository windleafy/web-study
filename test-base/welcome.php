
<?php
$x="";
if(isset($_POST['name'])){
echo ($_POST['name']);
$x = $_POST['name'];
}
echo ($x);
Header("Location: welcome.html"); 
?>

