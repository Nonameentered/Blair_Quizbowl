<?
session_start();
if(!isset($_POST['passthru']))
	$_POST['passthru'] = '/';
if(isset($_SESSION['u'])) 
	die("<script>window.location = '".$_POST['passthru']."'</script>");
if(pam_auth2($_POST['u'],$_POST['p'], $err)) 
	$_SESSION['u'] = $_POST['u'];
else
{ 
	$err = "You could not be logged in! Your username and password do not match.";
	include 'login_form.php';
	exit();
}
unset($_POST['p']);
echo "<script>window.location = '".$_POST['passthru']."'</script>";

function pam_auth2($username, $password, &$error) 
{
	$dspec = array(0 => array("pipe", "r"), 2 => array("pipe", "w"));
	$helper = proc_open('/usr/local/bin/pam_auth ' . escapeshellarg($username) . ' 0 ""', $dspec, &$pipes);
	if(!is_resource($helper)) 
	{
		$error = "Could not execute pam_auth helper.";
		return FALSE;
	}
	fwrite($pipes[0], $password . "\n");
	fclose($pipes[0]);
	$msg = fread($pipes[2], 128);
	fclose($pipes[2]);
	if(proc_close($helper) == 0)
		return TRUE;
	return FALSE;
}
?>

