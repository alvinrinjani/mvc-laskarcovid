<?php

class About extends Controller
{
  public function index()
  {
    $data['title'] = 'About Us';

    $this->view('templates/sidebar_template/header', $data);
    $this->view('templates/sidebar_template/sidebar_wrapper');
    $this->view('about/index');
    $this->view('templates/sidebar_template/footer');
  }

  public function page()
  {
    $this->view('about/page');
  }
}
