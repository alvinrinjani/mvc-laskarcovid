<?php

class Home extends Controller
{
  public function index()
  {
    $data['title'] = 'Home';

    $this->view('templates/sidebar_template/header', $data);
    $this->view('templates/sidebar_template/sidebar_wrapper');
    $this->view('home/index');
    $this->view('templates/sidebar_template/footer');
  }
}
