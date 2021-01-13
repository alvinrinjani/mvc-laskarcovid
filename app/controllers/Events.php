<?php

class Events extends Controller
{
  public function index()
  {
    $data['title'] = 'Events';

    $this->view('templates/sidebar_template/header', $data);
    $this->view('templates/sidebar_template/sidebar_wrapper');
    $this->view('events/index');
    $this->view('templates/sidebar_template/footer');
  }
}
