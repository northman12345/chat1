
<?php
session_start();
require('connect.php');
$email=$_POST['email'];

$password=md5($_POST['password']); 
$pdo_statement = $pdo_conn->prepare("SELECT * FROM tb_account where  email_id='$email' and  password='$password'");
$pdo_statement->execute();
$result = $pdo_statement->fetchAll();

if ($result==true) {
        session_start();
          $_SESSION['email']=$email;
	# code...
header('location:/chat/index.php');

}else {
 $_SESSION['msg']='<div class="alert alert-danger" role="alert"><strong>yepa!</strong> your email and password is invalid</div>';
	  header('location:/squad/login.php');
}



?>