<?php
$link=mysql_connect('localhost:3306','root','root');
if(!$link){
	die('database server connection failed');
}
$check=mysql_select_db('eccrue',$link);
if(!$check){
	die('database couldnt be reached');
}
?>