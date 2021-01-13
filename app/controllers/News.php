<?php

class News extends Controller
{
  public function index()
  {
    $data['title'] = 'News & Info';

    $this->view('templates/sidebar_template/header', $data);
    $this->view('templates/sidebar_template/sidebar_wrapper');
    $this->view('news/index');
    $this->view('templates/sidebar_template/footer');
  }
}
