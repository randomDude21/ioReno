<?php

class Proposal {
    private $id;
    private $coNum;
    private $project;
    private $estimate;
    private $approved;
    
    function __construct($i, $c, $p, $e, $a) {
        $this->id=$i;
        $this->coNum=$c;
        $this->project=$p;
        $this->estimate=$e;
        $this->approved = $a;
    }
    public function get_id()
    {
        return $this->id;
    }
    public function get_coNum()
    {
        return $this->coNum;
    }
    public function get_project()
    {
        return $this->project;
    }
    public function get_estimate()
    {
        return $this->estimate;
    }
    public function get_approved() 
    {
        return $this->approved;
    }
    
}
?>
