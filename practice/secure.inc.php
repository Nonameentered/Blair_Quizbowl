<?
session_start();
if(!isset($_SESSION['u']))
{
	include 'login.inc.php';
	exit();
}
else
{
	$uname = $_SESSION['u'];
}
?>

