<?php

class Payment {
    private $id;
    private $coNum;
    private $amount;
    private $proposal;
    private $status;
    private $date;
    
    function __construct($i, $c, $a, $p, $s, $d) {
        $this->id=$i;
        $this->coNum=$c;
        $this->amount=$a;
        $this->proposal=$p;
        $this->status=$s;
        $this->date=$d;
    }
    public function get_id()
    {
        return $this->id;
    }
    public function get_coNum()
    {
        return $this->coNum;
    }
    public function get_amount()
    {
        return $this->amount;
    }
    public function get_proposal()
    {
        return $this->proposal;
    }
    public function get_status()
    {
        return $this->status;
    }
    public function get_date()
    {
        return $this->date;
    }
}
?>