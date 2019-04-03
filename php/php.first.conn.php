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

require_once "../class/class.pass.php";
$My_SQL_conn = new class_My_Sql;
$select_mysq="SELECT  `PAss` FROM `test_1_conn`";
$my_SQ_test=$My_SQL_conn->My_Sql_con_li("localhost","id9161148_base_user","Base_user","id9161148_my_test_base",$select_mysq,'1');

$mysqli_rez_conn_row = mysqli_fetch_assoc($my_SQ_test);
echo $mysqli_rez_conn_row['PAss']

?>