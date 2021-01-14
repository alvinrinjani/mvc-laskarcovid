<?php

class Testing_model
{
  private $table_kedatangan = 'kedatangan';
  private $tabel_detail = 'detail';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function testing()
  {
    $this->db->query('SELECT * FROM ' . $this->table_kedatangan);
    return $this->db->resultSet();
  }

  public function testing_detail($id)
  {
    $this->db->query('SELECT * FROM ' . $this->tabel_detail . ' WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }
}
