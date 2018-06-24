<?php
include 'header.inc.php';
if ($err == "")
{
	echo "<p>You must login in order to view this page. Please use the same username and password that you use on other Blair websites, such as BILL.</p>";
	$thru = $_SERVER['REQUEST_URI'];
}
else
{
	echo "<p style='color:yellow'>".$err."</p>";
	$thru = $_POST['passthru'];
}
?>
 
<form action=login.php method=POST>
<table class="login"><tr><td><label for=u>Username:</label></td><td><input name=u type=text></td></tr>
<tr><td><label for=p>Password:</label></td><td><input type=password name=p></td></tr>
<tr><td colspan="2"><input type=hidden name=passthru value="<?php echo $thru ?>
">
<input type=submit value='Login' /></td></tr></table>
</form>
<?php
include 'footer.inc.php';
?>

