<?php
$con=mysqli_connect("localhost","root","","net_banking");
if(ISSET($_POST['submit'])){
$login=$_POST['admin_uname'];
$mopass=$_POST['admin_psw'];
$sql=$con -> query("SELECT pwd FROM admin WHERE uname= '$login'")or die('Erreur');
	if($ligne=mysqli_fetch_array($sql))
 {
 if($mopass==$ligne['pwd'])
 {
	 $_SESSION['uname']=$login;
 header("location: admin_home.php");
 }
 else
 {
	echo "Mot de passe invalide";
 exit();
 }
 }
 else{
	 echo "Nom d'administrateur introuvable";
 }
}
?>