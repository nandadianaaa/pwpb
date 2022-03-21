<?php

class portofolio extends Controller
{
    public function index()
    {
      $data['profile'] = $this->model('PortofolioModel')->getProfile();
      $data['about'] = $this->model('PortofolioModel')->getAbout();
      $data['project'] = $this->model('PortofolioModel')->getProject();

       $this->view('user/index',$data); 
    }
}
