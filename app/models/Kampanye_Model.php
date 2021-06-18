<?php

class Kampanye_Model {
    private $table = 'kampanye';
    private $table2 = 'kampanye_user';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function addKampanye($data) {
        $tanggal = date("Y/m/d");
        $query = "INSERT INTO " . $this->table . " VALUES ('', :nama, :deskripsi, :id, :target, :date)";
        
        session_start();

        $this->db->query($query);
        $this->db->bind('nama', $data['nama_kampanye']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('id', $_SESSION['id_akun']);
        $this->db->bind('target', $data['target']);
        $this->db->bind('date', $tanggal);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function addKampanyeDonation($data) {
        $tanggal = date("Y/m/d");
        $query = "INSERT INTO " . $this->table2 . " VALUES ('', :id, :id_akun, :donasi, :date)";
        
        session_start();

        $this->db->query($query);
        $this->db->bind('id', $data['id_kampanye']);
        $this->db->bind('id_akun', $_SESSION['id_akun']);
        $this->db->bind('donasi', $data['donasi']);
        $this->db->bind('date', $tanggal);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getKampanye() {
        $this->db->query("SELECT id_kampanye, nama_kampanye, deskripsi, username, target, tanggal_ditambahkan FROM " . $this->table . " INNER JOIN akun using(id_akun)");
        return $this->db->resultSet();
    }

    public function getKampanyeById($id) {
        $this->db->query("SELECT id_kampanye, nama_kampanye, deskripsi, username, target, tanggal_ditambahkan, sum(donasi) as donasiTerkumpul FROM " . $this->table . " INNER JOIN akun using(id_akun) INNER JOIN kampanye_user using(id_kampanye) WHERE id_kampanye = :id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}