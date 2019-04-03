<?php
 /*
$mysqli = mysqli_connect("example.com", "user", "password", "database");
$res = mysqli_query($mysqli, "SELECT 'Пожалуйста, не используйте ' AS _msg FROM DUAL");
$row = mysqli_fetch_assoc($res);
echo $row['_msg'];

$mysql = mysql_connect("example.com", "user", "password");
mysql_select_db("test");
$res = mysql_query("SELECT 'расширение mysql в новых проектах.' AS _msg FROM DUAL", $mysql);
$row = mysql_fetch_assoc($res);
echo $row['_msg'];*/

$My_SQL_conn = new class_My_Sql;
$My_SQL_conn->My_Sql_con_li('0','0','0','0');

?>