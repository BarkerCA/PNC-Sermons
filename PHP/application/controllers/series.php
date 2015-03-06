<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Series extends CI_Controller {
  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('series_model');
  }

  public function index()
  {
    $data['title'] = "Welcome";
    
    $data['series'] = $this->series_model->get_series();
    
    $this->render('series/index', $data);
  }
  
  public function listen($slug)
  {
   
    $data['series'] = $this->series_model->get_series($slug);
    
    $data['title'] = $data['series']['title'];
    
    $this->render('series/listen', $data);
  }
  
  private function render($page, $data)
  {
    $this->load->view('layouts/head', $data);
    $this->load->view($page, $data);
    $this->load->view('layouts/foot', $data);
  }
}