<?php

class Project {
    private $id;
    private $email;
    private $description;
    private $budget;
    
    function __construct($i, $e, $d, $b) {
        $this->id=$i;
        $this->email=$e;
        $this->description=$d;
        $this->budget=$b;
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
    
   }
?>