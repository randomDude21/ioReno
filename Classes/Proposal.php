<?php

class Proposal {
    private $id;
    private $coNum;
    private $project;
    private $estimate;
    
    function __construct($i, $c, $p, $e) {
        $this->id=$i;
        $this->coNum=$c;
        $this->project=$p;
        $this->estimate=$e;
    }
    public function get_id()
    {
        return $this->id;
    }
    public function get_coNum()
    {
        $this->coNum;
    }
    public function get_project()
    {
        $this->project;
    }
    public function get_estimate()
    {
        $this->estimate;
    }
}
?>
