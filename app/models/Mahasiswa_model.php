<?php

class Mahasiswa_model{
    private $table = 'mahasiswa';
    private $db;
    
    public function __construct()
    {
        $this->db = new Database;
        
    }

    public function getAllMahasiswa(){
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
      }

    public function getMahasiswaById($id){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    
    public function tambahDataMahasiswa($data)
    {
        $query = "INSERT INTO mahasiswa
                    VALUES
                    (:id, :nama , :kelas)";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('kelas', $data['kelas']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}