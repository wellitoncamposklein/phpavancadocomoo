<?php

namespace Source;

class ServiceProduct implements IServiceProduct
{
  private $db;
  private $product;

  public function __construct(IConn $db, IProduct $product)
  {
      $this->db = $db->connect();
      $this->product = $product;
  }

  public function list($order = null){
    $query = "select * from products order by {$order}";
    $stmt = $this->db->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll(\PDO::FETCH_ASSOC);
  }
  public function save(){
    // $query = "insert into product (name,descri) values (?,?)";
    // $stmt->bind_param("ss",$name,$descri);
    // $stmt = $this->$db->prepare($query);
    // $stmt->execute();
  }
  public function update(){

  }
  public function delete(){

  }
}
