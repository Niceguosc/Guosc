<?php
   header("content-type:text/html;charset=utf-8");
   $GetUsername=$_POST['user'];
   $GetPaassWWord=$_POST['password'];
   $myInfo=array(
       array(
            "name"=>"zhang",
            "pswd"=>"123333",
       ),array(
            "name"=>"guogege",
            "pswd"=>"123123",
       ),array(
            "name"=>"wangwu",
            "pswd"=>"456666",
       ),array(
            "name"=>"zhaosi",
            "pswd"=>"258888",
       ),
   );
    foreach($myInfo as $key=>$val){ 

      if($GetUsername==$val["name"])
      {
        if($GetPaassWWord==$val["pswd"]){
       	   $state="0";
           break;
        }else{
           $state="1";
           break;
        };
      }else{ 
           $state="2";          
      };
    };
    echo $state;
  // };
?>
