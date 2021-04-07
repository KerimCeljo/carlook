<?php
require_once dirname(__FILE__)."/../config.php";


class BaseDao{

protected $connection;

private $table;

public function__construct($table){
$this->table=$table;
try {
  $this->$connection = new PDO("mysql:host=".Config::DB_HOST.";dbname=".Config::DB_SCHEME, Config:: DB_USERNAME, Config::DB_PASSWORD);
  // set the PDO error mode to exception
  $this->$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
  throw $e;

}


}

protected function insert($table, $entity ){
  $query= "INSERT INTO ${table} (";
  foreach ($user1 as $column => $value) {
    $query .= $column.", ";
  }
  $query =substr($string, 0, -1);
  $query .= ") VALUES (";
  foreach ($user1 as $column => $value) {
    $query .= substr($query.", ";)
  }
  $query =substr($query, 0, -2);
  $query .=")";

$stmt= $this->connection->prepare($query);
$stmt->execute($entity);
$entity['id'] = $this->connection->lastInsertId();
return $entity;


}
protected function execute_update($table, $id, $entity, $id_column="id"){
  $query ="UPDATE" ${table} SET ";
  foreach ($entity as $name => $value) {
    $query .=$name ."= :". $name. ", ";

  }
$query =substr($query, 0, -2);
$query .= WHERE ${$id_column} = :id";

$stmt = $this->connection->prepare($query);
$entity['id']= $id;
$stmt->execute($entity);

}


protected function update($table, $id, $entity, $id_column= "id"){
  $query= "UPDATE ${table} SET";
  foreach ($entity as $name => $value) {
    $query .=$name ."= :". $name. ", ";

  }
  $query= substr($query, 0, -2);
  $query .="WHERE ${$id_column}= :id";


  $stmt= $$this->connection->prepare($query);
  $entity['id']=$id;
  $stmt->execute($entity);


}

protected function query($query, $params){
 $stmt = $pdo->prepare($query);
 $stmt->execute($params);
 return $stmt->fetchAll(PDO::FETCH_ASSOC);



}

protected function query_unique($query, $params){
  $results = $$this->query($query, $params);
  return reset($results);

}
public function add($entity){
  return $this-> insert($this->table.$entity);

}

public function update($id, $entity){
  $this->execute_update ($this->table ,$id, $entity);


}
public function get_by_id($id){
return $this-> query_unique("SELECT * FROM $($this->table) WHERE id = :id", ["id" => $id]);
 }


}

 ?>
