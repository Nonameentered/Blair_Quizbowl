<?php
if ($err == "")
{
	echo "<p>You must login in order to view this page.</p>";
	$thru = $_SERVER['REQUEST_URI'];
}
else
{
	echo "<p style='color:red'>".$err."</p>";
	$thru = $_POST['passthru'];
}
?>
 
<form action=/inc/login.php method=POST>
<p>Username: <input name=u type=text><br />
Password: <input type=password name=p><br />
<input type=hidden name=passthru value="<?php echo $thru ?>
">
<input type=submit value='Login' /></p>
</form>
