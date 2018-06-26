<?php
echo "1!1";	
require "./libs/rb-mysql.php";
echo "2!2";	
R::setup('mysql:host=sql23.main-hosting.eu;dbname=u742711990_domin',
        'u742711990_ortaz', 'TCQafYVLfpc5cx3AxN'); //for both mysql or mariaDB
echo "3!3";	
if(!R::testConnection()){
	echo "Не удалось подключиться";
	exit();	
}
echo "Подключился!";	
$name = $_POST['Name'];
echo register_user($name);

function register_user($name){
	$user = R::dispense('users');
	$user ->name = $name;
	R::store($user);
	return "Пользователь $name зарегистрирован!";	
}
?>

