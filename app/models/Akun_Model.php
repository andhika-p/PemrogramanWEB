<?php

class Akun_Model {
    private $table = 'akun';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function registerAkun($data) {
        $tanggal = date("Y/m/d");
        $query = "INSERT INTO " . $this->table . " VALUES ('', :username, :password, :email, :date)";
    
        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('date', $tanggal);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function loginAkun($data) {
        $query = "SELECT id_akun, username FROM " . $this->table . " WHERE username=:username and password=:password";
        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);    
        $dataFound = $this->db->single();

        if($dataFound) {
            session_start();
            $_SESSION['id_akun'] = $dataFound['id_akun'];
            $_SESSION['username'] = $dataFound['username'];
            header('location: ' . BASEURL . '/home');
        } else {
            header('location: ' . BASEURL . '/home/login');
        }
    }
}