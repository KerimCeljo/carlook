<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require_once dirname(__FILE__). "/dao/UserDao.class.php";
//require_once dirname(__FILE__). "/dao/AccountDao.class.php";
//require_once dirname(__FILE__). "/dao/CampaingDao.class.php";
$user_dao = new UserDao();

//$user = $user_dao->get_user_by_id(1);

$user = $user_dao->get_user_by_email("kerim.celjo20@gmail.com");
//$dao = new AccountDao();
//$dao = new CampaingDao();
print_r($user);

/*$user = [
  "name" => "Kenan Bektas",
  "email" => "keno@gmail.com",
  "password" => "1234",
  "account_id" => 3
];*/
  //"name" => "Flash sale of shoes",
//  "account_id"=>1;
  //"start_date"=> date("Y-m-d H:i:s")

//$user_dao->add_user($user);

//$account= $dao-> get_all_accounts(1);
//$account= $dao-> update_account(1,["name"=>"IBU"]);
//$account=$dao-> get_all_accounts();

/*
$dao->add([
"name"=>"Green Hosting",
"created_at"=>date("Y-m-d H:i:s")

]);
*/

/*$user1=[
"name"=> "Ahmed",
"email"=> "faris.fares@stu.ibu.edu.ba",
"password"=>"14",
"account_id" => 1



];


$user= $user_dao-> add_user($user1);
//$user = $user_dao->update_user_by_email("faris.fare@stu.ibu.edu.ba",$user1);
//get_user_by_email("kerim.celjo20@gmail.com");

print_r($user);*/

 ?>
