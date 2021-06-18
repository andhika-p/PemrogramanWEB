<?php

class About extends Controller {
    public function index() {
        $data['title'] = "About Us";
        $this->view('templates/header', $data);
        $this->view('about/index');
        $this->view('templates/footer');
    }

    public function contact() {
        $data['title'] = "Contact";
        $this->view('templates/header', $data);
        $this->view('about/contact');
        $this->view('templates/footer');
    }
}