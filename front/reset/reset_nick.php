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
/*if (!isset($_POST['submit'])) {
    header("Location: ../index.php");
}else {*/
$pass = $_POST["pass"];

$newnick = $_POST['newnick'];
$q1 = pg_query($dbconn, "select * from utente where id=$id");
$arr = pg_fetch_array($q1, 0, PGSQL_NUM);

// prendo l'hash dal db
$password_hash = $arr[5]; // prendo l'hash dal db
$passcheck = password_verify($pass, $password_hash);
if ($passcheck) {
	$q2 = "update utente SET nick = '$newnick' where id=$id";
	$result = pg_query($dbconn, $q2);
} else {
	header("Location: ../profilo/profile.php?operazione=password sbagliata");
	exit();
}

if ($result) {
	header("Location: ../profilo/profile.php?operazione=successo");
	exit();
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
?>