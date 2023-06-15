<?php 
session_start();
$SESSION =[];
session_unset();
session_destroy();



header("Location: login_form.php");
exit;


?>