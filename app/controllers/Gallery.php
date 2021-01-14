<?php

class Gallery extends Controller
{
  public function index()
  {
    $data['title'] = 'Gallery';

    $this->view('templates/sidebar_template/header', $data);
    $this->view('templates/sidebar_template/sidebar_wrapper');
    $this->view('gallery/index');
    $this->view('templates/sidebar_template/footer');
  }
}
