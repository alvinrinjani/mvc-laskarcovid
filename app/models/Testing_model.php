<?php

class Testing_model
{
  private $table_kedatangan = 'kedatangan';
  private $tabel_detail = 'detail';
  private $tabel_sakit = 'sakit';
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

  public function inputDatang($data)
  {
    $query = "INSERT INTO kedatangan
              VALUES
              ('', :nama, :waktu, :keterangan)";

    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('waktu', $data['waktu']);
    $this->db->bind('keterangan', $data['keterangan']);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function inputSakit($data)
  {
    $query = "INSERT INTO sakit
              VALUES
              ('', :tanggal, :nama_sakit, :kelas, :diagnosa, :penanganan)";

    $this->db->query($query);
    $this->db->bind('tanggal', $data['tanggal']);
    $this->db->bind('nama_sakit', $data['nama_sakit']);
    $this->db->bind('kelas', $data['kelas']);
    $this->db->bind('diagnosa', $data['diagnosa']);
    $this->db->bind('penanganan', $data['penanganan']);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function dataSakit()
  {
    $this->db->query('SELECT * FROM ' . $this->tabel_sakit . ' ORDER BY id DESC');
    return $this->db->resultSet();
  }

  public function detailSakit($id)
  {
    $this->db->query('SELECT * FROM ' . $this->tabel_sakit . ' WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }
}
