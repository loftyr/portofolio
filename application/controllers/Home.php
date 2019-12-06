<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('home_v');
        $this->load->view('templates/footer');
    }

    public function about(){
        $this->load->view('templates/header');
        $this->load->view('about_v');
        $this->load->view('templates/footer');
    }

    public function skill(){
        $this->load->view('templates/header');
        $this->load->view('skill_v');
        $this->load->view('templates/footer');
    }

    public function gallery(){
        $this->load->view('templates/header');
        $this->load->view('gallery_v');
        $this->load->view('templates/footer');
    }

    public function contact(){
        $this->load->view('templates/header');
        $this->load->view('contact_v');
        $this->load->view('templates/footer');
    }
}
