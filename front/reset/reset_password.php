<?php
/**
 * @format
 */

session_start();
if (!isset($_SESSION['id'])) {
	header("Location: ../index.php");
}
$id = $_SESSION['id']; /* userid of the user al momento */

($dbconn = pg_connect(
	"host=dumbo.db.elephantsql.com
port=5432 dbname=putfahxs user=putfahxs password=yj6L-sA-nVPEpp4PJPpjvHLb6KbZJXsL"
)) or die("Could not connect: " . preg_last_error());

$pass = $_POST['pass'];
$newpass = $_POST['newpass'];
$Password_crypt = password_hash($newpass, PASSWORD_BCRYPT);
$q3 = pg_query($dbconn, "select * from utente where id=$id");
$arr = pg_fetch_array($q3, 0, PGSQL_NUM);

$password_hash = $arr[5]; // prendo l'hash dal db
$passcheck = password_verify($pass, $password_hash); // funzione verifica, verifica la password inserita con l'hash del db
if ($passcheck == false) {
	header("Location: ../profilo/profile.php?operazione=password errata");
	exit();
} else {
	$q2 = "update utente SET password = '$Password_crypt' where id=$id";
	$result = pg_query($dbconn, $q2);
	if ($result) {
		header("Location: ../profilo/profile.php?operazione=successo");
	} else {
		header("Location: ../profilo/profile.php?operazione=errore");
	}
	/*result = mysqli_query($con,"SELECT *from student WHERE name='" . $id . "'");
$row=mysqli_fetch_array($result);
if($_POST["currentPassword"] == $row["password"] && $_POST["newPassword"] == $row["confirmPassword"] ) {
mysqli_query($con,"UPDATE student set password='" . $_POST["newPassword"] . "' WHERE name='" . $id . "'");
$message = "Password Changed Sucessfully";
} else{
 $message = "Password is not correct";
    }*/
}

?>