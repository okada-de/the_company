<?php
 include "../classes/User.php";

//  Create an ocject
 $user = new User;

$user -> store($_POST);

?>