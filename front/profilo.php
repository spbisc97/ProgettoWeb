
<?php
session_start();
$id = $_SESSION['id'];/* userid of the user */
/*$idd=$_SESSION['idd'];
echo $_SESSION["id"];
echo $id;*/

echo "per cambiare password clicca qua";
echo "<a href=reset/reset_password/reset_password1.php> Premi qui </a>"; 
echo "per cambiare nick clicca qua";
echo "<a href=reset/reset_nick/reset_nickform.php> Premi qui </a>"; 
echo "per cambiare email clicca qua";
echo "<a href=reset/reset_email/reset_emailform.php> > Premi qui </a>"; 



?>