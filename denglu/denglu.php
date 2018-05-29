<?php
	$GetUsername = $_POST['user'];
	$MyUser = 'guogege';
    $Getpassword = $_POST['pass'];
    $MyPass = 'guogege';
	if($GetUsername==$MyUser){
		echo "用户名正确";
	}else{
		echo '用户名不存在';

    }
    if($Getpassword==$MyPass){
		echo '密码正确';

	}else{
		echo '密码错误';

	}
?>