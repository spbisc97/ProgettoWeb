<?php
/**
 * @format
 */

session_start();
$id = $_SESSION['id']; /* userid of the user al momento */

($dbconn = pg_connect(
	"host=dumbo.db.elephantsql.com
port=5432 dbname=putfahxs user=putfahxs password=yj6L-sA-nVPEpp4PJPpjvHLb6KbZJXsL"
)) or die("Could not connect: " . preg_last_error());
/*if (!isset($_POST['submit'])) {
    header("Location: ../index.php");
}else {*/

$newnick = $_POST['newpass'];
$q3 = pg_query($dbconn, "select * from utente where id=$id");
$arr = pg_fetch_array($q3, 0, PGSQL_NUM);

$nick = $arr[1]; // prendo l'hash dal db

$q2 = "update utente SET nick = '$newnick' where id=$id";
$result = pg_query($dbconn, $q2);
if ($result) {
	echo "nick cambiato con successo";
} else {
	echo "qualcosa è andato storto, riprova";
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
