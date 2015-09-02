<?php

require_once "Employee.php";
class Policeman extends Employee
{
    protected $rank;

    public function __construct($hours_per_day,$hours_per_month,$salary,$rank){
        parent::__construct($hours_per_day,$hours_per_month,$salary);

        $this->rank = $rank;
    }

    public function setRank($rank){
        $this->rank = $rank;
    }
    public function getRank(){
        return $this->rank;
    }

    public function showRank(){
        echo "My rank is ".$this->rank.".<br/>";
    }
}
