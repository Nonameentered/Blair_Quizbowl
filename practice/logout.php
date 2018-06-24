<?php
session_start();
if(isset($_SESSION['u']))
	unset($_SESSION['u']);
?>

<script>window.location='index.php';</script>
<p>You have logged out successfully. If you are not redirected in a second, please <a href='index.php'>click here</a>.</p>
