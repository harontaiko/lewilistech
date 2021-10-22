<?php

class Admin
{
    private $db;

    public function __construct()
    {
      $this->db = new Database();
    }

    public function getDatabaseConnection()
    {
      return $this->db;
    }


     // Find user by username
     public function findUserByName($username)
     {
         $query = 'SELECT `id`, username, email, `password`, date_created FROM lt_admin WHERE username = ?';
 
         $binders = "s";
 
         $parameters = array($username);
 
         $result = SelectCond($query, $binders, $parameters, $this->db);
 
         $row = $result->get_result();
 
         $numRows = $row->num_rows;
 
         if ($numRows > 0) {
             return true;
         } else {
             return false;
         }
     }

     public function getItemByName($name)
     {
         $query = 'SELECT `id`, `name`, price, `description`, stock, color, `weight`, model, discount, `image`, date_created, time_created, created_by FROM lt_products WHERE `name` = ?';
 
         $binders = "s";
 
         $parameters = array($name);
 
         $result = SelectCond($query, $binders, $parameters, $this->db);
 
         $row = $result->get_result();
 
         $numRows = $row->num_rows;
 
         if ($numRows > 0) {
             return true;
         } else {
             return false;
         }
     }

     public function getAdminData()
     {
         $query = 'SELECT * FROM lt_admin';
  
         $result = SelectCondFree($query, 'lt_admin', $this->db);
 
         $row = $result->get_result();
 
         try {
             return $row;
         } catch (Error $e) {
             return false;
         }
     }

     public function getProductsData()
     {
         $query = 'SELECT * FROM lt_products ORDER BY id DESC';
  
         $result = SelectCondFree($query, 'lt_products', $this->db);
 
         $row = $result->get_result();
 
         try {
             return $row;
         } catch (Error $e) {
             return false;
         }
     }

     public function getImageByName($name)
     {
         $query = 'SELECT `id`, `name`, price, `description`, stock, color, `weight`, model, discount, `image`, date_created, time_created, created_by FROM lt_products WHERE `image` = ?';
 
         $binders = "s";
 
         $parameters = array($name);
 
         $result = SelectCond($query, $binders, $parameters, $this->db);
 
         $row = $result->get_result();
 
         $numRows = $row->num_rows;
 
         if ($numRows > 0) {
             return true;
         } else {
             return false;
         }
     }

     public function saveProduct($data)
     {
       $fields = array('name', 'price', 'description', 'stock', 'color', 'weight', 'model', 'discount', 'image', 'date_created', 'time_created', 'created_by');
 
       $placeholders = array('?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?');
 
       $bindersCountNew = "ssssssssssss";
 
       $values = array($data['name'], $data['price'], $data['description'], $data['stock'], $data['color'], $data['weight'], $data['model'], $data['discount'], $data['imagename'], $data['date'], $data['time'], $data['creator']);
       
       try {
           Insert(
               $fields,
               $placeholders,
               $bindersCountNew,
               $values,
               'lt_products',
               $this->db
           );
         
           return true;
       } catch (Error $e) {
           return false;
       }
     }

     public function saveProductNull($data)
     {
        $fields = array('name', 'price', 'description', 'stock', 'color', 'weight', 'model', 'discount', 'date_created', 'time_created', 'created_by');
 
        $placeholders = array('?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?');
  
        $bindersCountNew = "ssssssssssss";
  
        $values = array($data['name'], $data['price'], $data['description'], $data['stock'], $data['color'], $data['weight'], $data['model'], $data['discount'], $data['date'], $data['time'], $data['creator']);
 
       try {
           Insert(
               $fields,
               $placeholders,
               $bindersCountNew,
               $values,
               'dr_inventory',
               $this->db
           );
           return true;
       } catch (Error $e) {
           return false;
       }
     }

     public function login($username, $password, $ip)
     {
       $query = 'SELECT `id`, username, email, `password`, date_created FROM lt_admin WHERE username = ?';
 
       $binders = "s";
 
       $parameters = array($username);
 
       $result = SelectCond($query, $binders, $parameters, $this->db);
 
       $row = $result->get_result();
 
       $user = $row->fetch_assoc();
 
       $hashedPassword = $user['password'];
       $userId = $user['id'];
 
 
       //verify salt and password
       if (password_verify($password, $hashedPassword)) {
           //set record 
           $queryLogin = 'SELECT `id`, logins, ip_address, last_date FROM lt_logins WHERE `id` = ?';
 
           $bindersLogin = "s";
 
           $parametersLogin = array($userId);
 
           $result = SelectCond($queryLogin, $bindersLogin, $parametersLogin, $this->db);
 
           $rowLogin = $result->get_result();
 
           $rowCount = $rowLogin->num_rows;
 
           date_default_timezone_get();
 
           $dateLoggeedIn = date('Y-m-d', time());
           
           $timeLoggeedIn = date('H:i:s T', time());
 
           if ($rowCount > 0) {
               //user has logged in before
               $login = $rowLogin->fetch_assoc();
 
               $realCountLogin = $login['logins'];
 
               $queryUpdate = 'UPDATE lt_logins SET ip_address=?, logins=?, last_date=? WHERE `id`=?';
 
               $bindersCount = "ssss";
 
               $values = array($ip, ($realCountLogin + 1), $dateLoggeedIn, $userId);
 
               try {
                   Update($queryUpdate, $bindersCount, $values, 'lt_logins', $this->db);
                   return $user;
               } catch (Error $e) {
                   return false;
               }
           } else {
               $loginCount = 1;
 
               $fields = array('id', 'ip_address', 'last_date', 'logins');
 
               $placeholders = array('?', '?', '?', '?');
 
               $bindersCountNew = "ssss";
 
               $values = array($userId, $ip, $dateLoggeedIn, $loginCount);
 
               try {
                   Insert(
                       $fields,
                       $placeholders,
                       $bindersCountNew,
                       $values,
                       'lt_logins',
                       $this->db
                   );
                   return $user;
               } catch (Error $e) {
                   return false;
               }
           }
       } else {
           return false;
       }
     }
}
?>