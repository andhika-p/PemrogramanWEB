<?php
class Home extends Controller {
    public function index() {
        $data['title'] = "Home";
        $this->view('templates/header', $data);
        $this->view('home/index');
        $this->view('templates/footer');
    }

    public function register() {
        $data['title'] = "Register";
        $this->view('templates/header', $data);
        $this->view('home/register');
    }

    public function tambahAkun() {
        if($this->model('Akun_Model')->registerAkun($_POST) > 0) {
            header('location: ' . BASEURL . '/home');
            exit;
        }
    }

    public function login() {
        $data['title'] = "Login";
        $this->view('templates/header', $data);
        $this->view('home/login');
    }

    public function loginAkun() {
        $this->model('Akun_Model')->loginAkun($_POST);
    }

    public function logout() {
        session_start();
        session_unset();
        header('location: ' . BASEURL . '/home');
    }

    public function kampanye() {
        $data['title'] = "Kampanye";
        $data['kampanye'] = $this->model('Kampanye_Model')->getKampanye();
        $this->view('templates/header', $data);
        $this->view('home/kampanye', $data);
        $this->view('templates/footer');
    }

    public function tambahKampanye() {
        if($this->model('Kampanye_Model')->addKampanye($_POST) > 0) {
            header('location: ' . BASEURL . '/home/kampanye');
            exit;
        }
    }

    public function kampanyeDetail($id) {
        $data['title'] = "Kampanye";
        $data['kampanye'] = $this->model('Kampanye_Model')->getKampanyeById($id);
        $this->view('templates/header', $data);
        $this->view('home/kampanyeDetail', $data);
        $this->view('templates/footer');
    }

    public function donasiKampanye() {
        if($this->model('Kampanye_Model')->addKampanyeDonation($_POST) > 0) {
            header('location: ' . BASEURL . '/home');
            exit;
        }
    }
}