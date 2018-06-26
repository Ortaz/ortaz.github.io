<?php
require "./libs/rb-mysql.php";
R::setup('mysql:host=sql23.main-hosting.eu;dbname=u742711990_domin',
        'u742711990_ortaz', 'TCQafYVLfpc5cx3AxN' ); //for both mysql or mariaDB
if(!R::testConnection()){
	echo "Не удалось подключиться";
	exit();	
}
echo "Подключился!";	
function register_user($name){
	$user = R::dispense('users');
	$user ->name = $name;
	R::store($user);
	return "Пользователь $name зарегистрирован!";	
}
?>

