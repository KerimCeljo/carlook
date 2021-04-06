<?php

require_once dirname(__FILE__). "/dao/UserDao.class.php";
$user_dao= ew UserDao();

//$user=$user_dao->get_user_by_id(4);

$user1=[
"name"=> "Faris Bektas",
"email"=> "fare@gmail.com",
"password"=>"1234",
"account_id" => 1

];
$user_dao->add_user($user1);
//get_user_by_email("kerim.celjo20@gmail.com");

print_r($user);
 ?>
