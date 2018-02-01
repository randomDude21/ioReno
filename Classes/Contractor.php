<?php

class Contractor {
    
    private $coName;
    private $coNum;
    private $phone;
    private $email;
    private $name;
    private $password;
    private $date;
    private $approved;
    
    function __construct($conum,$coname, $p, $e, $n, $pass, $d, $approved) {
        $this->coNum=$conum;
        $this->coName=$coname;
        $this->phone=$p;
        $this->email=$e;
        $this->name=$n;
        $this->password=$pass;
        $this->date=$d;
        $this->approved=$approved;
    }
    public function get_coNum()
    {
        return $this->coNum;
    }
    public function get_coName()
    {
        return $this->coName;
    }
    public function get_phone()
    {
        return $this->phone;
    }
    public function get_email()
    {
        return $this->email;
    }
    public function get_name()
    {
        return $this->name;
    }
    public function get_password()
    {
        return $this->password;
    }
    public function get_date()
    {
        return $this->date;
    }   
    public function get_approved() {
        return $this->approved;
    }
}
?>