<?php
	$GetUsername = $_POST['user'];
	$MyUser = 'guogege';
    $Getpassword = $_POST['pass'];
    $MyPass = 'guogege';
    if(!$_POST['user']|| !$_POST['pass']){
     	echo"登录信息不能为空";
   }else{
		if($GetUsername==$MyUser&&$Getpassword==$MyPass){
			echo "用户名正确密码正确";
		}else if($GetUsername==$MyUser&&$Getpassword!=$MyPass){
			echo '密码错误';

	    }
	    else if($GetUsername!=$MyUser&&$Getpassword==$MyPass){
			echo '用户名不存在';

		}else if($GetUsername!=$MyUser&&$Getpassword!=$MyPass){
	       echo '请输入正确的用户名和密码';
		}
  }
?>
