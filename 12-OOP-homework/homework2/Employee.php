<?php

class Employee
{
    protected $hours_per_day;
    protected $hours_per_month;
    protected $salary;

    public function setHoursPerDay($hours_per_day){
        $this->hours_per_day=$hours_per_day;
    }
    public function getHoursPerDay(){
        return $this->hours_per_day;
    }

    public function setHoursPerMonth($hours_per_month){
        $this->hours_per_month=$hours_per_month;
    }

    public function getHoursPerMonth(){
        return $this->hours_per_month;
    }

    public function setSalary($salary){
        $this->salary=$salary;
    }

    public function getSalary(){
        return $this->salary;
    }

    public function __construct($hours_per_day,$hours_per_month,$salary){
        $this->hours_per_day=$hours_per_day;
        $this->hours_per_month=$hours_per_month;
        $this->salary=$salary;
    }

    public function workingStatus(){
        echo "Hi! I am working ".$this->hours_per_day." hours per day and ".$this->hours_per_month."hours per month.My salary is ".$this->salary.".<br/>";
    }
}