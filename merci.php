<?php include("menu.php");?>
<?php 
    $msg = "First line of text\nSecond line of text";

    // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,70);

    // send email
    //mail($_GET['mail'],"My subject",$msg);
    mail("nicolassayssett@gmail.com", "coucou", "Bonjour");
?>
<?php include("footer.php"); ?>