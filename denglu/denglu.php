<?php
	$GetUsername = $_POST['user'];
	$Getpassword = $_POST['password'];
		$arr = array( 
			array('name'=>'guogege','url'=>'123456'), 
			array('name'=>'zixin','url'=>'321321'), 
			array('name'=>'leng','url'=>'45678'), 
			array('name'=>'dada','url'=>'hu123')
		);
		foreach($arr as $key=>$val){ 
		  	if($GetUsername==$val["name"] && $Getpassword==$val["url"]){
				echo '注册成功';
				return;
			}else{
				echo '注册失败';
				return;
			}
		}	
?>
