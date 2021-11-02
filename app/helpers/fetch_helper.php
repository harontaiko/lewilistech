<?php

function getMostRecentSales($db)
{
    $query = 'SELECT sales_id, sales_item, sales_id, selling_price, buying_price, profit, date_created, created_by FROM dr_sales ORDER BY sales_id DESC LIMIT 6';
        
    $result = SelectCondFree($query, 'dr_sales', $db);
        
    $row = $result->get_result();
        
    try {
        return $row;
    } catch (Error $e) {
        return false;
    } 
}

function getCurrentAdmins($db)
{
    $query = 'SELECT `user_id`, login_count, date_logged, time_logged, user_ip FROM dr_login WHERE `user_id` !=? ORDER BY `user_id` ASC';
    
    $binders = "s";

    $param = array(3);
    
    $result = SelectCond($query, $binders, $param, $db);
        
    $row = $result->get_result();
        
    try {
        return $row;
    } catch (Error $e) {
        return false;
    } 
}

function findUserById($id, $db)
{
    $query = 'SELECT username FROM dr_user WHERE `user_id` = ?';

    $binders = "s";

    $parameters = array($id);

    $result = SelectCond($query, $binders, $parameters, $db);

    $row = $result->get_result();

    $rowItem = $row->fetch_assoc();

    $name = isset($rowItem['username']) ? $rowItem['username'] : 'N/A';
  
    try {
        return $name;
    } catch (Error $e) {
        return false;
    }
}

function findDateMadeById($id, $db)
{
    $query = 'SELECT date_created FROM dr_user WHERE `user_id` = ?';

    $binders = "s";

    $parameters = array($id);

    $result = SelectCond($query, $binders, $parameters, $db);

    $row = $result->get_result();

    $rowItem = $row->fetch_assoc();

    $date = isset($rowItem['date_created']) ? $rowItem['date_created'] : 'N/A';
  
    try {
        return $date;
    } catch (Error $e) {
        return false;
    }

}

//get slider images, 1 thru 9
function getSlider($position, $db)
{
  if($position === "1")
  {
    $query = 'SELECT `image` AS slider FROM lt_slider WHERE position=?';

    $binders ="s";

    $params = array('1');

    $result = SelectCond($query, $binders, $params, $db);
  
    $row = $result->get_result();

    $rowItem = $row->fetch_assoc();

    $count = isset($rowItem['slider']) ? $rowItem['slider'] : 'slider-1.jpg';
  
    try {
        return $count;
    } catch (Error $e) {
        return false;
    }
  }
  else if($position === "2")
  {
    $query = 'SELECT `image` AS slider FROM lt_slider WHERE position=?';

    $binders ="s";

    $params = array('2');

    $result = SelectCond($query, $binders, $params, $db);
  
    $row = $result->get_result();

    $rowItem = $row->fetch_assoc();

    $count = isset($rowItem['slider']) ? $rowItem['slider'] : 'slider-2.jpg';
  
    try {
        return $count;
    } catch (Error $e) {
        return false;
    }
  }
  else if($position === "3")
  {
    $query = 'SELECT `image` AS slider FROM lt_slider WHERE position=?';

    $binders ="s";

    $params = array('3');

    $result = SelectCond($query, $binders, $params, $db);
  
    $row = $result->get_result();

    $rowItem = $row->fetch_assoc();

    $count = isset($rowItem['slider']) ? $rowItem['slider'] : 'slider-3.jpg';
  
    try {
        return $count;
    } catch (Error $e) {
        return false;
    }
  }
  else if($position === "4")
  {
    $query = 'SELECT `image` AS slider FROM lt_slider WHERE position=?';

    $binders ="s";

    $params = array('4');

    $result = SelectCond($query, $binders, $params, $db);
  
    $row = $result->get_result();

    $rowItem = $row->fetch_assoc();

    $count = isset($rowItem['slider']) ? $rowItem['slider'] : 'slider-4.jpg';
  
    try {
        return $count;
    } catch (Error $e) {
        return false;
    }
  }
  else if($position === "5")
  {
    $query = 'SELECT `image` AS slider FROM lt_slider WHERE position=?';

    $binders ="s";

    $params = array('5');

    $result = SelectCond($query, $binders, $params, $db);
  
    $row = $result->get_result();

    $rowItem = $row->fetch_assoc();

    $count = isset($rowItem['slider']) ? $rowItem['slider'] : 'slider-5.jpg';
  
    try {
        return $count;
    } catch (Error $e) {
        return false;
    }
  }
  else if($position === "6"){
    $query = 'SELECT `image` AS slider FROM lt_slider WHERE position=?';

    $binders ="s";

    $params = array('6');

    $result = SelectCond($query, $binders, $params, $db);
  
    $row = $result->get_result();

    $rowItem = $row->fetch_assoc();

    $count = isset($rowItem['slider']) ? $rowItem['slider'] : 'slider-6.jpg';
  
    try {
        return $count;
    } catch (Error $e) {
        return false;
    }
  }
  else if($position === "7"){
    $query = 'SELECT `image` AS slider FROM lt_slider WHERE position=?';

    $binders ="s";

    $params = array('7');

    $result = SelectCond($query, $binders, $params, $db);
  
    $row = $result->get_result();

    $rowItem = $row->fetch_assoc();

    $count = isset($rowItem['slider']) ? $rowItem['slider'] : 'slider-7.jpg';
  
    try {
        return $count;
    } catch (Error $e) {
        return false;
    }
  }
  else if($position === "8"){
    $query = 'SELECT `image` AS slider FROM lt_slider WHERE position=?';

    $binders ="s";

    $params = array('8');

    $result = SelectCond($query, $binders, $params, $db);
  
    $row = $result->get_result();

    $rowItem = $row->fetch_assoc();

    $count = isset($rowItem['slider']) ? $rowItem['slider'] : 'slider-8.jpg';
  
    try {
        return $count;
    } catch (Error $e) {
        return false;
    }
  }
  else if($position === "9"){
    $query = 'SELECT `image` AS slider FROM lt_slider WHERE position=?';

    $binders ="s";

    $params = array('9');

    $result = SelectCond($query, $binders, $params, $db);
  
    $row = $result->get_result();

    $rowItem = $row->fetch_assoc();

    $count = isset($rowItem['slider']) ? $rowItem['slider'] : 'slider-9.jpg';
  
    try {
        return $count;
    } catch (Error $e) {
        return false;
    }
  }
}

//get deal images, 1 to 4
function getDeal($position, $db)
{
  if($position === "1")
  {
    $query = 'SELECT `image` AS deal FROM lt_deals WHERE position=?';

    $binders ="s";

    $params = array('1');

    $result = SelectCond($query, $binders, $params, $db);
  
    $row = $result->get_result();

    $rowItem = $row->fetch_assoc();

    $count = isset($rowItem['deal']) ? $rowItem['deal'] : 'deal-1.jpg';
  
    try {
        return $count;
    } catch (Error $e) {
        return false;
    }
  }
  else if($position === "2")
  {
    $query = 'SELECT `image` AS deal FROM lt_deals WHERE position=?';

    $binders ="s";

    $params = array('2');

    $result = SelectCond($query, $binders, $params, $db);
  
    $row = $result->get_result();

    $rowItem = $row->fetch_assoc();

    $count = isset($rowItem['deal']) ? $rowItem['deal'] : 'deal-2.jpg';
  
    try {
        return $count;
    } catch (Error $e) {
        return false;
    }
  }
  else if($position === "3")
  {
    $query = 'SELECT `image` AS deal FROM lt_deals WHERE position=?';

    $binders ="s";

    $params = array('3');

    $result = SelectCond($query, $binders, $params, $db);
  
    $row = $result->get_result();

    $rowItem = $row->fetch_assoc();

    $count = isset($rowItem['deal']) ? $rowItem['deal'] : 'deal-3.jpg';
  
    try {
        return $count;
    } catch (Error $e) {
        return false;
    }
  }
  else if($position === "4")
  {
    $query = 'SELECT `image` AS deal FROM lt_deals WHERE position=?';

    $binders ="s";

    $params = array('4');

    $result = SelectCond($query, $binders, $params, $db);
  
    $row = $result->get_result();

    $rowItem = $row->fetch_assoc();

    $count = isset($rowItem['deal']) ? $rowItem['deal'] : 'deal-4.jpg';
  
    try {
        return $count;
    } catch (Error $e) {
        return false;
    }
  }
}