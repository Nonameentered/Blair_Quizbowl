<?php
session_start();
if(isset($_SESSION['u']))
	unset($_SESSION['u']);
?>

<script>window.location='/';</script>
