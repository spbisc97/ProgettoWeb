<?php
session_start();
$id = $_SESSION['id'];/* userid of the user */
/*$idd=$_SESSION['idd'];
echo $_SESSION["id"];
echo $id;*/


echo '<form method="post" action="reset_password.php" align="center">
Current Password:<br>
<input type="password" name="oldpass"><span id="currentPassword" class="required"></span>
<br>
New Password:<br>
<input type="password" name="newpass"><span id="newPassword" class="required"></span>
<br>
Confirm Password:<br>
<input type="password" name="confirmPassword"><span id="confirmPassword" class="required"></span>
<br><br>
<input type="submit" name="submit">
</form>';

?>