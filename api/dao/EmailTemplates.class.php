<?php

require_once dirname(__FILE__). "/BaseDao.class.php";

class EmailTemplateDao extends BaseDao{

public function__construct(){
parent::__construct("email_templates")

}


//public function add_account($account){
// return $this->insert("accounts", $account);

  }
//public function update_account($id, $account){
  //$this->update("accounts", $id, $account);
}

//public function get_account_by_id(){
  //return $$this->query_unique("SELECT * FROM accounts WHERE id= :id", ["id" => $id]);

}
//public function get_all_accounts(){
  //return $$this->query("SELECT * FROM accounts",[]);
 }

}
 ?>
