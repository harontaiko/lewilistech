<?php

class Page
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

    public function getSliders()
    {
        $query = 'SELECT * FROM lt_slider ORDER BY id ASC';
 
        $result = SelectCondFree($query, 'lt_slider', $this->db);

        $row = $result->get_result();

        try {
            return $row;
        } catch (Error $e) {
            return false;
        }
    }

    public function getDeals()
    {
        $query = 'SELECT * FROM lt_deals ORDER BY id ASC';
 
        $result = SelectCondFree($query, 'lt_deals', $this->db);

        $row = $result->get_result();

        try {
            return $row;
        } catch (Error $e) {
            return false;
        }
    }

    public function getDealsofTheDay()
    {
        $query = 'SELECT * FROM lt_dealsoftheday ORDER BY id ASC';
 
        $result = SelectCondFree($query, 'lt_deals', $this->db);

        $row = $result->get_result();

        try {
            return $row;
        } catch (Error $e) {
            return false;
        }
    }

    public function getProducts()
    {
        $query = 'SELECT * FROM lt_products ORDER BY id ASC';
 
        $result = SelectCondFree($query, 'lt_products', $this->db);

        $row = $result->get_result();

        try {
            return $row;
        } catch (Error $e) {
            return false;
        }
    }

    public function getArrivals()
    {
        $query = 'SELECT * FROM lt_arrivals ORDER BY id ASC';
 
        $result = SelectCondFree($query, 'lt_arrivals', $this->db);

        $row = $result->get_result();

        try {
            return $row;
        } catch (Error $e) {
            return false;
        }
    }

    public function getReviewsCount()
    {
        $query = 'SELECT * FROM lt_reviews';
 
        $result = SelectCondFree($query, 'lt_reviews', $this->db);

        $row = $result->get_result();

        try {
            return $row->num_rows;
        } catch (Error $e) {
            return false;
        }
    }

    public function getReviews()
    {
        $query = 'SELECT * FROM lt_reviews';
 
        $result = SelectCondFree($query, 'lt_reviews', $this->db);

        $row = $result->get_result();

        try {
            return $row;
        } catch (Error $e) {
            return false;
        }
    }

    public function getReviewVid()
    {
        $query = 'SELECT * FROM lt_reviewvid';
 
        $result = SelectCondFree($query, 'lt_reviewvid', $this->db);

        $row = $result->get_result();

        try {
            return $row;
        } catch (Error $e) {
            return false;
        }
    }

    public function getAverageReviewCount()
    {
        $query = 'SELECT AVG(rating) AS rating FROM lt_reviews';
 
        $result = SelectCondFree($query, 'lt_reviews', $this->db);

        $row = $result->get_result();

        $rowItem = $row->fetch_assoc();
       
        $rating = isset($rowItem['rating']) ? $rowItem['rating'] : 0;

        try {
            return $rating;
        } catch (Error $e) {
            return false;
        }
    }

    public function getItemById($id)
    {
        $query = 'SELECT `id`, `name`, price, `description`, stock, color, `weight`, model, sub_category, category, discount, `image`, date_created, time_created, created_by FROM lt_products WHERE `id` = ?';

        $binders = "s";

        $parameters = array($id);

        $result = SelectCond($query, $binders, $parameters, $this->db);

        $row = $result->get_result();

        $numRows = $row->num_rows;

        if ($numRows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getProduct($id)
    {
        $query = 'SELECT `id`, `name`, price, `description`, stock, color, `weight`, model, sub_category, category, discount, `image`, date_created, time_created, created_by FROM lt_products WHERE `id` = ?';

        $binders = "s";

        $parameters = array($id);

        $result = SelectCond($query, $binders, $parameters, $this->db);

        $row = $result->get_result();

        try {
            return $row;
        } catch (Error $e) {
            return false;
        }
    }

    public function getFeatured()
    {
        $query = 'SELECT * FROM lt_featured ORDER BY id ASC';
 
        $result = SelectCondFree($query, 'lt_featured', $this->db);

        $row = $result->get_result();

        try {
            return $row;
        } catch (Error $e) {
            return false;
        }
    }

    public function getSpecial()
    {
        $query = 'SELECT * FROM lt_special ORDER BY id ASC';
 
        $result = SelectCondFree($query, 'lt_special', $this->db);

        $row = $result->get_result();

        try {
            return $row;
        } catch (Error $e) {
            return false;
        }
    }

    public function getWeekly()
    {
        $query = 'SELECT * FROM lt_weekly ORDER BY id ASC';
 
        $result = SelectCondFree($query, 'lt_weekly', $this->db);

        $row = $result->get_result();

        try {
            return $row;
        } catch (Error $e) {
            return false;
        }
    }

    public function getFlash()
    {
        $query = 'SELECT * FROM lt_flashproducts ORDER BY id ASC';
 
        $result = SelectCondFree($query, 'lt_flashproducts', $this->db);

        $row = $result->get_result();

        try {
            return $row;
        } catch (Error $e) {
            return false;
        }
    }

    public function getPosts()
    {
        $query = 'SELECT * FROM lt_posts ORDER BY id ASC';
 
        $result = SelectCondFree($query, 'lt_posts', $this->db);

        $row = $result->get_result();

        try {
            return $row;
        } catch (Error $e) {
            return false;
        }
    }

}