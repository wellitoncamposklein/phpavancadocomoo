<?php

namespace Source;

class ServiceProduct implements IServiceProduct
{
  private $db;

  public function __construct(IConn $db)
  {
      $this->db = $db->connect();
  }

  public function list();{
    $query = "select * from products";

    $stmt = $this->db->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll(\PDO::FETCH_ASSOC);
  }
  public function save();{

  }
  public function update();{

  }
  public function delete();{

  }
}
