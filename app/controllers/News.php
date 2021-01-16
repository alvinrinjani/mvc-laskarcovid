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

  public function kedatangan()
  {
    $data['title'] = 'Info Kedatangan';
    $data['testing'] = $this->model('Testing_model')->testing();

    $this->view('templates/sidebar_template/header', $data);
    $this->view('templates/sidebar_template/sidebar_wrapper');
    $this->view('news/kedatangan', $data);
    $this->view('templates/sidebar_template/footer');
  }

  public function kesehatan()
  {
    $data['title'] = 'Info Kesehatan';
    $data['dataSakit'] = $this->model('Testing_model')->dataSakit();

    $this->view('templates/sidebar_template/header', $data);
    $this->view('templates/sidebar_template/sidebar_wrapper');
    $this->view('news/kesehatan', $data);
    $this->view('templates/sidebar_template/footer');
  }

  public function detailKesehatan($id)
  {
    $data['title'] = 'Detail Kesehatan';
    $data['dataSakit'] = $this->model('Testing_model')->detailSakit($id);

    $this->view('templates/sidebar_template/header', $data);
    $this->view('templates/sidebar_template/sidebar_wrapper');
    $this->view('news/detail_kesehatan', $data);
    $this->view('templates/sidebar_template/footer');
  }
}
