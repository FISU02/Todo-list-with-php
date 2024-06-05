<?php
const HOST = 'felipeapps-server.mysql.database.azure.com';
const USERNAME = 'enqtjhopuc';
const PASSWORD = 'Filip123';
const DBNAME = 'felipeapps-database';
$dbcon = new mysqli(HOST, USERNAME, PASSWORD, DBNAME);

if ($dbcon->connect_error) {
  die("connect error: " . $dbcon->connect_error);
}

?>
