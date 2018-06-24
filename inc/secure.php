<?
session_start();
if(!isset($_SESSION['u']))
{
	include 'inc/login_form.php';
	exit();
}
else
{
	$uname = $_SESSION['u'];
}
?>

