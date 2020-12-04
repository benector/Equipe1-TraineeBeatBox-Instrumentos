<?php
session_start();
/*
use App\Core\App;
use App\Core\Database\{QueryBuilder, Connection};

App::bind('config', require 'config.php');

$con = App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));
$con::make(App::get('config')['database']);
*/

$con=mysqli_connect('localhost','root','','beatbox');

if(empty($_POST['email']) || empty($_POST['password'])){
    header('Location: /login');
    exit();
}

$email=mysqli_real_escape_string($con, $_POST['email']);
$password=mysqli_real_escape_string($con, $_POST['password']);

$query = "select email from users where email = '{$email}' and password = '{$password}'";

$result = mysqli_query($con, $query);
$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['user'] = $email;
	header('Location: /adm');
	exit();
} else {
	$_SESSION['autentication-failed'] = true;
	header('Location: /login');
	exit();
}