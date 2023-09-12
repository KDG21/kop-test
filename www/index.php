<?php
echo 'Hello World';

$db_host = "host=kop.coyafpmaayqp.ap-northeast-2.rds.amazonaws.com";
$db_port = "port=5432";
$db_user = "user=kop";
$db_password = "password=12345678";
$db_name = "dbname=kop";

$conn = pg_connect("$db_host $db_port $db_user $db_password $db_name");

$query = "SELECT name FROM kop_test";
$result = pg_query($conn, $query);

$res = [];

while ($row = pg_fetch_assoc($result)) {
  $res[] = $row['name'];
}

echo $res[0];