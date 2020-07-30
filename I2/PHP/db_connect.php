<?php
/*Making the connection to the database*/
$db_Connect = new mysqli('localhost', "root", "", "newCars");

/*If the connection fails inform the user that something has gone wrong by displaying the error*/
if($db_Connect->connect_error)
{
  echo "<p>Connection Failed: " . $db_Connect->connect_error . "</p>\n";
  exit;
}

?>
