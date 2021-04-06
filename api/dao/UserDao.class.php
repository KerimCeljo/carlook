<?php

require_once dirname(__FILE__)." /BaseDao.class.php";
class UserDao extends BaseDao{


  public functon get_user_by_email($email){
  return  $this->query_unique("SELECT* FROM users WHERE email= :email", ["email"=>$email]);


  }
public function get_user_by_id($id){
 return $query_unique("SELECT* FROM users WHERE id= :id", ["id" => $id]);

}
public function add_user($user){
// $sql = "INSERT INTO users (name, email, password, account_id) VALUES (:name, :email, :password, :account_id)";
return $this-> insert("users",$user);

public function update_user($id, $user){
   $this->update("users", $id, $user);
}

public function update_user_by_email($email, $user){
   $this->update("users", $email, $user, "email");
 }
}
 ?>
