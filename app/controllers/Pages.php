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

      //GET SLIDERS, DEALS, DEALS OF THE DAY, PRODUCT CATEGORY, ARRIVALS, FEATURED PRODUCTS, 
      //SPECIAL PRODUCTS, WEEKLY PRODUCTS, FLASH PRODUCTS & BLOGS
      //ALL PHOTOS TO BE UPLOADED MUST BE THE REQUIRED SIZE
      $db = $this->pageModel->getDatabaseConnection();
      $myslides = $this->pageModel->getSliders();
      $deals = $this->pageModel->getDeals();
      $dealsOfTheDay = $this->pageModel->getDealsofTheDay();
      $products = $this->pageModel->getProducts();
      $arrivals = $this->pageModel->getArrivals();
      $featured = $this->pageModel->getFeatured();
      $special = $this->pageModel->getSpecial();
      $flash = $this->pageModel->getFlash();
      $weekly = $this->pageModel->getWeekly();
      $data = ['title'=>'Lewilis Technology Services', 'special'=>$special, 'flash'=>$flash, 'weekly'=>$weekly, 'featured'=>$featured, 'arrivals'=>$arrivals, 'products'=>$products, 'sliderow'=>$myslides, 'daydeals'=>$dealsOfTheDay, 'dealsrow'=>$deals, 'db'=>$db];

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