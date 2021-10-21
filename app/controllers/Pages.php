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

      $data = ['title'=>'Lewilis Technology Services'];

      $this->view('pages/index', $data);
    }

    public function about()
    {
    /*   if (!isset($_SESSION["user_id"])) {
       $this->Login();
      }  */

      $data = ['title'=>'Lewilis Technology Services'];

      $this->view('pages/about', $data);
    }

    public function contact()
    {
    /*   if (!isset($_SESSION["user_id"])) {
       $this->Login();
      }  */

      $data = ['title'=>'Lewilis Technology Services'];

      $this->view('pages/contact', $data);
    }

    public function cart()
    {
    /*   if (!isset($_SESSION["user_id"])) {
       $this->Login();
      }  */

      $data = ['title'=>'Lewilis Technology Services'];

      $this->view('pages/cart', $data);
    }

    public function wishlist()
    {
    /*   if (!isset($_SESSION["user_id"])) {
       $this->Login();
      }  */

      $data = ['title'=>'Lewilis Technology Services'];

      $this->view('pages/wishlist', $data);
    }

    public function faqs()
    {
    /*   if (!isset($_SESSION["user_id"])) {
       $this->Login();
      }  */

      $data = ['title'=>'Lewilis Technology Services'];

      $this->view('pages/faqs', $data);
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
        "title" => "Lewilis Technology Services",  
      ];
      redirect("users/index");
    }
}    