<?php

class Project {
    private $id;
    private $email;
    private $title;
    private $description;
    private $type;
    private $budget;
    private $address;
    private $city;
    private $images;
    private $date;
    
    function __construct($id, $email, $title, $description, $type, $budget, $address, $city, $images, $date) {
        $this->id = $id;
        $this->email = $email;
        $this->title = $title;
        $this->description = $description;
        $this->type = $type;
        $this->budget = $budget;
        $this->address = $address;
        $this->city = $city;
        $this->images = $images;
        $this->date = $date;
    }
    
    public function get_id()
    {
        return $this->id;
    }
    public function get_email()
    {
        return $this->email;
    }
    public function get_description()
    {
        return $this->description;
    }
    public function get_budget()
    {
        return $this->budget;
    }
    function getTitle() {
        return $this->title;
    }

    function getImages() {
        return $this->images;
    }

    function getAddress() {
        return $this->address;
    }
    
    function get_type() {
        return $this->type;
    }
    
    function get_city() {
        return $this->city;
    }
    
    function get_date() {
        return $this->date;
    }
   }
?>