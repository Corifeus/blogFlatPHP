<?php
//nuevo index.php
error_reporting(0);//ponemos esto para evitar los errores notice

if ($_GET['id'] == true) {
	require 'detalle.php';
}else{
	require 'todo.php';
}
?>