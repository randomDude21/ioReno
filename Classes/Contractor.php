<?php

class Contractor {
    
    private $coName;
    private $coNum;
    private $phone;
    private $email;
    private $name;
    private $password;
    private $date;
    
    function __construct($conum,$coname, $p, $e, $n, $pass, $d ) {
        $this->coNum=$conum;
        $this->coName=$coname;
        $this->phone=$p;
        $this->email=$e;
        $this->name=$n;
        $this->password=$pass;
        $this->date=$d;
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
}
?>