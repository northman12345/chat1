<?php
session_start();
	require_once("connect.php");
	if(empty($_POST["record"])) {

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$password =md5( $_POST['password']);
 
   


	$pdo_statement = $pdo_conn->prepare("SELECT * FROM tb_account where  email_id='$email' ");
$pdo_statement->execute();
$result = $pdo_statement->fetchAll();
if ($result==true) {
	# code...
 $_SESSION['msg']='<div class="alert alert-danger" role="alert"><strong>yepa!</strong> Email and password already exist</div>';
	  header('location:/squad/signup.php');

}else {
	# code...

	
	$sql = "INSERT INTO tb_account ( first_name,last_name, email_id, password ) VALUES ( :firstname, :lastname,:email,:password)";
	$pdo_statement = $pdo_conn->prepare( $sql );
		
	$result = $pdo_statement->execute( array( ':firstname'=>$firstname, ':lastname'=>$lastname, ':email'=>$email, ':password'=>$password, ) );
	
	if (!empty($result) ){
		 $_SESSION['msg']='<div class="alert alert-success" role="alert"><strong>Well done!</strong> Your account successfully created.</div>';
	  header('location:/squad/signup.php');
	}else{
		 $_SESSION['msg']='<div class="alert alert-success" role="alert"><strong>Well done!</strong> Your account successfully created.</div>';
	 header("location:/squad/signup.php");
	}
	 
	}
}
?>
