<?php

class Pages extends Controller
{

    public function __construct()
    {
      $this->pageModel = $this->model('Page'); 
    }



    public function index()
    {
    /*   if (!isset($_SESSION["user_id"])) {
       $this->Login();
      }  */

      $data = ['title'=>'Daily Report'];

      $this->view('pages/index', $data);
    }

    public function about()
    {
    /*   if (!isset($_SESSION["user_id"])) {
       $this->Login();
      }  */

      $data = ['title'=>'Daily Report'];

      $this->view('pages/about', $data);
    }

    public function contact()
    {
    /*   if (!isset($_SESSION["user_id"])) {
       $this->Login();
      }  */

      $data = ['title'=>'Daily Report'];

      $this->view('pages/contact', $data);
    }


    public function Notfound()
    {
      http_response_code(404);
      include('../app/404.php');
      die();
    }

    public function Login()
    {
      $data = [
        "title" => "Daily Report",  
      ];
      redirect("users/index");
    }
}    