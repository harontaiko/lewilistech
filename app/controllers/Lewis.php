<?php

class Lewis extends Controller
{

    public function __construct()
    {
      $this->lewisModel = $this->model('Admin'); 
    }



    public function index()
    {
      if($this->isLoggedIn())
      {
        redirect('lewis/home');
      }

      $data = ['title'=>'Lewilis Technology Services | Admin'];

      $this->view('lewis/index', $data);
    }

    public function login()
    {
       //check if session is on
       if($this->isLoggedIn())
       {
         redirect('lewis/home');
       }
 
         $data = ['title'=>'Lewilis Technology Services | Admin'];
 
         if(isset($_POST['login']) && $_SERVER['REQUEST_METHOD'] == 'POST')
         {
             $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
 
             //init data
             $data = 
             [
               'title' => 'Lewilis Technology Services | Admin',
               'err' => '',
               'username' => htmlspecialchars($_POST['username']),
               'password' =>htmlspecialchars($_POST['password']),
               'ip' => get_ip_address(),
             ];
 
             //validate
             if(empty($data['username']))
             {
               $data['err'] = 'please fill out the username';
               $this->view("lewis/index", $data);
             }
             else if(empty($data['password']))
             {
               $data['err'] = 'please fill out the password';
               $this->view("lewis/index", $data);
             }
             else if(strlen($data['password']) < 5)
             {
               $data['err'] = 'password is too short';
               $this->view("lewis/index", $data);
             } elseif (!$this->lewisModel->findUserByName($data["username"])) {
               $data["err"] =
               "a user with that username does not exist, please request admin for an account";
             $this->view("lewis/index", $data);
           }
             else if(empty($data['err']))
             {
               //zero errors
               $loggedinUser = $this->lewisModel->login(
                 $data["username"],
                 $data["password"],
                 $data["ip"]
               );
 
               if ($loggedinUser) {
                 //authentication == true
                 $this->createUserSession($loggedinUser);
               } else {
                 $data["err"] =
                   "incorrect password, please check your password";
                 // Load View
                 $this->view("lewis/index", $data);
               }
             }
         }
         else
         {
             //init data
             $data = 
             [
               'title' => 'Lewilis Technology Services | Admin',
               'err' => '',
               'username' => '',
               'password' => '',
               'ip'=>''
             ];
 
             $this->view('lewis/index', $data);
 
         }
    }

    public function home()
    {
      if(!$this->isLoggedIn())
      {
        redirect('lewis/index');
      }

      $db = $this->lewisModel->getDatabaseConnection();

      $admin = $this->lewisModel->getAdminData();

      while($me = $admin->fetch_assoc()){
        $username = $me['username'];
        $email = $me['email'];
      }

      $data = ['title'=>'Lewilis Technology Services | Admin', 'db'=>$db, 'username'=>$username, 'email'=>$email];

      $this->view('lewis/home', $data);
    }

    public function profile()
    {
      if(!$this->isLoggedIn())
      {
        redirect('lewis/index');
      }

      $admin = $this->lewisModel->getAdminData();

      while($me = $admin->fetch_assoc()){
        $username = $me['username'];
        $firstname = $me['first_name'];
        $lastname = $me['last_name'];
        $date = $me['date_created'];
        $email = $me['email'];
      }

      $data = ['title'=>'Lewilis Technology Services | Admin', 'username'=>$username, 'fname'=>$firstname, 'lname'=>$lastname, 'date'=>$date, 'email'=>$email];

      $this->view('lewis/profile', $data);
    }

    public function track()
    {
      if(!$this->isLoggedIn())
      {
        redirect('lewis/index');
      }

      $data = ['title'=>'Lewilis Technology Services | Admin'];

      $this->view('lewis/track', $data);
    }

    public function orders()
    {
      if(!$this->isLoggedIn())
      {
        redirect('lewis/index');
      }

      $data = ['title'=>'Lewilis Technology Services | Admin'];

      $this->view('lewis/orders', $data);
    }

    public function payment()
    {
      if(!$this->isLoggedIn())
      {
        redirect('lewis/index');
      }

      $data = ['title'=>'Lewilis Technology Services | Admin'];

      $this->view('lewis/payment', $data);
    }

    public function returns()
    {
      if(!$this->isLoggedIn())
      {
        redirect('lewis/index');
      }

      $data = ['title'=>'Lewilis Technology Services | Admin'];

      $this->view('lewis/returns', $data);
    }

    public function users()
    {
      if(!$this->isLoggedIn())
      {
        redirect('lewis/index');
      }

      $data = ['title'=>'Lewilis Technology Services | Admin'];

      $this->view('lewis/users', $data);
    }

    public function products()
    {
      if(!$this->isLoggedIn())
      {
        redirect('lewis/index');
      }

      $db = $this->lewisModel->getDatabaseConnection();

      $products = $this->lewisModel->getProductsData();

      $data = ['title'=>'Lewilis Technology Services | Admin', 'db'=>$db, 'product'=>$products];

      $this->view('lewis/products', $data);
    }

    public function addressbook()
    {
      if(!$this->isLoggedIn())
      {
        redirect('lewis/index');
      }

      $data = ['title'=>'Lewilis Technology Services | Admin'];

      $this->view('lewis/addressb', $data);
    }

    public function addProduct()
    {  

      $products = $this->lewisModel->getProductsData();

      if(isset($_POST['add-product']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
      
      $file = $_FILES['product-image'];
      $fileName = $file['name'];
      $fileTmpName = $file['tmp_name'];
      $fileSize = $file['size'];
      $fileError = $file['error'];
      $fileType = $file['type'];
      $fileExtension = explode('.', $fileName);
      $fileActualExtension = strtolower(end($fileExtension));
      $allowedExtensions = array('jpg', 'jpeg', 'png', 'gif', 'psd', 'svg');
      //saved in the users route
      $fileDestination = '../public/images/images/products/' . preg_replace('/[^A-Za-z0-9. -]/', '', $fileName);
      $photo = preg_replace('/[^A-Za-z0-9. -]/', '', $fileName);
      
      if ($file) {
        if (in_array($fileActualExtension, $allowedExtensions)) {
          
          $productName = $_POST['product-name'];
          $productPrice = $_POST['product-price'];
          $productCategory = $_POST['product-category'];
          $productsub = $_POST['product-sub'];
          $productDesc = $_POST['product-desc'];
          $productStock = $_POST['product-stock'];
          $productColor = $_POST['product-color'];
          $productWeight = $_POST['product-weight'];
          $productModel = $_POST['product-model'];
          $productDiscount = $_POST['product-disc'];
          

          $data = [
            'title' => 'Lewilis Technology Services | Admin',
            'err'=>'',
            'succ'=>'',
            'date' => date('Y-m-d', time()),
            'time' => date('H:i:s T', time()),
            'ip' => get_ip_address(),
            'category'=>$productCategory,
            'sub'=>$productsub,
            'product'=>$products,
            'name' => $productName,
            'stock' => $productStock,
            'price' => $productPrice,
            'color' => $productColor,
            'model' => $productModel,
            'weight' => $productWeight,
            'discount' => $productDiscount,
            'description' => $productDesc,
            'imagename' => $photo,
            'creator' => $_SESSION['user_name'],
            'destination' => $fileDestination,
            'tempname' => $fileTmpName,
          ];


          if($this->lewisModel->getItemByName($productName) || $this->lewisModel->getImageByName($photo)){
            $data["err"] =
                   "the item already exist, try changing the image name or product name";
                   $this->view("lewis/products", $data);
          }else{
        

          $data = [
            'title' => 'Lewilis Technology Services | Admin',
            'err'=>'',
            'succ'=>'',
            'date' => date('Y-m-d', time()),
            'time' => date('H:i:s T', time()),
            'ip' => get_ip_address(),
            'category'=>$productCategory,
            'sub'=>$productsub,
            'product'=>$products,
            'name' => $productName,
            'stock' => $productStock,
            'price' => $productPrice,
            'color' => $productColor,
            'model' => $productModel,
            'weight' => $productWeight,
            'discount' => $productDiscount,
            'description' => $productDesc,
            'imagename' => $photo,
            'creator' => $_SESSION['user_name'],
            'destination' => $fileDestination,
            'tempname' => $fileTmpName,
          ];

          move_uploaded_file($fileTmpName, $fileDestination);
        
          $save = $this->lewisModel->saveProduct($data);
          
          if($save)
          {
            $data["succ"] =
            "item created successfully!";
            $this->view("lewis/products", $data);
          }
          else{
            $data["err"] =
            "an error occured while saving your product, please check your connection and try again";
            $this->view("lewis/products", $data);
          }
        }
        }
        else
        {
          $productName = $_POST['product-name'];
          $productPrice = $_POST['product-price'];
          $productCategory = $_POST['product-category'];
          $productsub = $_POST['product-sub'];
          $productDesc = $_POST['product-desc'];
          $productStock = $_POST['product-stock'];
          $productColor = $_POST['product-color'];
          $productWeight = $_POST['product-weight'];
          $productModel = $_POST['product-model'];
          $productDiscount = $_POST['product-disc'];

          if($this->lewisModel->getItemByName($productName) || $this->lewisModel->getImageByName($photo)){
            $data["err"] =
            "the item already exist, try changing the image name or product name";
            $this->view("lewis/products", $data);
          }else{

            $data = [
              'title' => 'Lewilis Technology Services | Admin',
              'err'=>'',
              'succ'=>'',
              'date' => date('Y-m-d', time()),
              'time' => date('H:i:s T', time()),
              'ip' => get_ip_address(),
              'category'=>$productCategory,
              'sub'=>$productsub,
              'product'=>$products,
              'name' => $productName,
              'stock' => $productStock,
              'price' => $productPrice,
              'color' => $productColor,
              'model' => $productModel,
              'weight' => $productWeight,
              'discount' => $productDiscount,
              'description' => $productDesc,
              'creator' => $_SESSION['user_name'],
            ];          
    
            $save = $this->lewisModel->saveProductNull($data);
            if($save)
            {
              $data["succ"] =
            "item created successfully!";
            $this->view("lewis/products", $data);
            }
            else{
              $data["err"] =
              "request could not be completed, please check your connection";
              $this->view("lewis/products", $data);
            }
          }
          
        }
      }
      else{
        
        
        $productName = $_POST['product-name'];
        $productPrice = $_POST['product-price'];
        $productCategory = $_POST['product-category'];
        $productsub = $_POST['product-sub'];
        $productDesc = $_POST['product-desc'];
        $productStock = $_POST['product-stock'];
        $productColor = $_POST['product-color'];
        $productWeight = $_POST['product-weight'];
        $productModel = $_POST['product-model'];
        $productDiscount = $_POST['product-disc'];

        if($this->pageModel->getItemByName($productName) || $this->pageModel->getImageByName($photo)){
          $data["err"] =
          "the item already exist, try changing the image name or product name";
        }else{
          $data = [
            'title' => 'Lewilis Technology Services | Admin',
            'err'=>'',
            'succ'=>'',
            'date' => date('Y-m-d', time()),
            'time' => date('H:i:s T', time()),
            'ip' => get_ip_address(),
            'category'=>$productCategory,
            'sub'=>$productsub,
            'product'=>$products,
            'name' => $productName,
            'stock' => $productStock,
            'price' => $productPrice,
            'color' => $productColor,
            'model' => $productModel,
            'weight' => $productWeight,
            'discount' => $productDiscount,
            'description' => $productDesc,
            'creator' => $_SESSION['user_name'],
          ];      
  
          $save = $this->pageModel->saveProductNull($data);
          if($save)
          {
            $data["succ"] =
            "item created successfully!";
          }
          else{
            $data["err"] =
              "request could not be completed, please check your connection";
          }
        }
      
      }
      
    }else{
      http_response_code(404);
      include('../app/404.php');
      die();
    }    
  }

    public function forgot()
    {
      $data = ['title'=>'Lewilis Technology Services | Admin'];

      $this->view('lewis/forgot', $data);
    }

      // Logout & Destroy Session
      public function logout()
      {
        unset($_SESSION["user_id"]);
        unset($_SESSION["user_email"]);
        unset($_SESSION["user_name"]);
        session_destroy();
           
        sleep(0.5);
        redirect("lewis/index");           
      }
          // Create Session With User Info
      public function createUserSession($user)
      {
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["user_email"] = $user["email"];
        $_SESSION["user_name"] = $user["username"];

        //load
        sleep(1.1);

        redirect("lewis/home");
      }

    public function isLoggedIn()
    {
      if (isset($_SESSION["user_id"])) {
        return true;
      } else {
        return false;
      }
    }
}
?>