<?php

class Input extends Controller
{
  public function index()
  {
    $data['title'] = 'Input Data';

    $this->view('templates/sidebar_template/header', $data);
    $this->view('templates/sidebar_template/sidebar_wrapper');
    $this->view('input/index');
    $this->view('templates/sidebar_template/footer');
  }

  public function kesehatan()
  {
    $data['title'] = 'Input Kesehatan';

    $this->view('templates/sidebar_template/header', $data);
    $this->view('templates/sidebar_template/sidebar_wrapper');
    $this->view('input/kesehatan');
    $this->view('templates/sidebar_template/footer');
  }

  public function kedatangan()
  {
    $data['title'] = 'Input Kedatangan';

    $this->view('templates/sidebar_template/header', $data);
    $this->view('templates/sidebar_template/sidebar_wrapper');
    $this->view('input/kedatangan');
    $this->view('templates/sidebar_template/footer');
  }

  public function inputDatang()
  {
    if ($this->model('Testing_model')->inputDatang($_POST) > 0) {
      header('Location:' . BASEURL . '/input/kedatangan');
      exit;
    }
  }
}
