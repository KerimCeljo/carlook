<?php

require_once dirname(__FILE__). "/dao/UserDao.class.php";
require_once dirname(__FILE__). "/dao/AccountDao.class.php";
require_once dirname(__FILE__). "/dao/CampaingDao.class.php";
//$user_dao= ew UserDao();

//$user=$user_dao->get_user_by_id(4);
$dao = new AccountDao();
$dao = new CampaingDao();


$campaing =[

  "name" => "Flash sale of shoes",
//  "account_id"=>1;
  "start_date"=> date("Y-m-d H:i:s")
];

$campaing = $dao->add($campaing);

//$account= $dao-> get_all_accounts(1);
$account= $dao-> update_account(1,["name"=>"IBU"]);
$account=$dao-> get_all_accounts();


$dao->add([
"name"=>"Green Hosting",
"created_at"=>date("Y-m-d H:i:s")

]);

print_r($accounts);
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
