<?php
include('secure.inc.php');
include('header.inc.php');
?>

<p>You are logged in as <?php echo $uname ?>
. <a href='logout.php'>Log Out</a></p>
<p>You can download the practice program <a href="Academic_Team_Practice.zip">here</a>.</p>
<applet code="AppletWrapper.class"
        archive="Academic_Team_Practice.jar"
        width=500 height=300></applet>
<?php
include('footer.inc.php');
?>

