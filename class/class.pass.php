<?php
/*пример
 *
 * // Создаем новый класс Coor:
class Coor {
// данные (свойства):
var $name;

// методы:
 function Getname() {
 echo $this->name;
 }

 function Setname($name) {
 $this->name = $name;
 }

}

// Создаем объект класса Coor:
$object = new Coor;
// Теперь для изменения имени используем метод Setname():
$object->Setname("Nick");
// А для доступа, как и прежде, Getname():
$object->Getname();
// Сценарий выводит 'Nick'*/



Class class_My_Sql{
/*
$mysqli = mysqli_connect("example.com", "user", "password", "database");
$res = mysqli_query($mysqli, "SELECT 'Пожалуйста, не используйте ' AS _msg FROM DUAL");
$row = mysqli_fetch_assoc($res);
echo $row['_msg'];

$mysql = mysql_connect("example.com", "user", "password");
mysql_select_db("test");
$res = mysql_query("SELECT 'расширение mysql в новых проектах.' AS _msg FROM DUAL", $mysql);
$row = mysql_fetch_assoc($res);
echo $row['_msg'];
*/	
	function My_Sql_con_li($My_Sql_li_base_site, $My_Sql_li_base_name, $My_Sql_li_base_pass, $My_Sql_li_base_conn,$My_Sql_li_query,$ob_or_func){
     switch($ob_or_func){
     case "1":{
      $mysqli_rez_conn=mysqli_connect($My_Sql_li_base_site, $My_Sql_li_base_name, $My_Sql_li_base_pass, $My_Sql_li_base_conn);
      if ($mysqli_rez_conn->connect_errno) {
       echo "Не удалось подключиться к MySQL: " . $mysqli_rez_conn->connect_error;
      }
      $mysqli_rez_conn_res = mysqli_query($mysqli_rez_conn, $My_Sql_li_query);
      /*"SELECT  `PAss` FROM `test_1_conn`"*/
      return $mysqli_rez_conn_res;
      /*$mysqli_rez_conn_row = mysqli_fetch_assoc($mysqli_rez_conn_res);
      echo $mysqli_rez_conn_row['PAss'];*/
     };
             break;
     case "2":{

     };
     }




	}
}
?>