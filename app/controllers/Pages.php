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

    public function detail($id)
    {
    /*   if (!isset($_SESSION["user_id"])) {
       $this->Login();
      }  */

      if(isset($id) || is_numeric($id)){
        $row = $this->pageModel->getItemById($id);
        if($row){
          $myrow = $this->pageModel->getProduct(htmlspecialchars($id));
          //reviews
          $reviewCount =  $this->pageModel->getReviewsCount();
          $avgrating = $this->pageModel->getAverageReviewCount();
          $reviews = $this->pageModel->getReviews();
          $vid = $this->pageModel->getReviewVid();
          $vidcount = $this->pageModel->getReviewVid()->num_rows;
          while($detail = $myrow->fetch_assoc()){
            $detailId = $detail['id'];
            $name = $detail['name'];
            $price = $detail['price'];
            $description = $detail['description'];
            $stock = $detail['stock'];
            $color = $detail['color'];
            $weight = $detail['weight'];
            $model = $detail['model'];
            $category = $detail['category'];
            $sub_category = $detail['sub_category'];
            $image = $detail['image'];
            $discount = $detail['discount'];
          }
          $array = ['reviews'=>$reviews, 'vid'=>$vid];
          $data = ['title'=>'Product', 'array'=>$array, 'name'=>$name, 'vidcount'=>$vidcount, 'reviewCount'=>$reviewCount, 'avgrating'=>$avgrating,  'price'=>$price, 'description'=>$description, 'stock'=>$stock, 'color'=>$color, 'weight'=>$weight, 'model'=>$model, 'category'=>$category, 'sub_category'=>$sub_category, 'image'=>$image, 'discount'=>$discount, 'detailId'=>$detailId];

          $this->view('pages/detail', $data);
        }
        else{
          $this->Notfound();
        }
      }
      else{
        $this->Notfound();
      }
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