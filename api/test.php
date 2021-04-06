<?php

require_once dirname(__FILE__). "/dao/UserDao.class.php";
$user_dao= ew UserDao();

$user=$user_dao->get_user_by_id(4);

//get_user_by_email("kerim.celjo20@gmail.com");

print_r($user);
 ?>
