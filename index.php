<?php

include ('./controller/db.php');

// Our database object
$db = new DB();

// Quote and escape form submitted values
//$email = $db -> db_quote($_POST['email']);
//$password = $db -> db_quote($_POST['password']);

// Insert the values into the database
//$result = $db -> db_query("INSERT INTO `user` (`email`, `password`) VALUES (" . $email .", " . $password . ")");
$result = $db -> db_query("INSERT INTO `user` (`Name`, `Surname`, `Password`, `Email`, `AusbildungYear`, `AusbildungType`) VALUES (`Victor`, `Dias`, `diasito`, `elmisterioso@gmail.com`, `1`, `IT`)");

// A select query
//$rows = $db -> db_select("SELECT `name`, `email` FROM `user` WHERE ID = 1");



?>