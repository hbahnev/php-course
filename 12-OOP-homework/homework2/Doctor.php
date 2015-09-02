<?php

class Doctor extends Employee
{
    protected $day_shifts;
    protected $night_shifts;

    public function __construct($hours_per_day,$hours_per_month,$salary,$day_shifts,$night_shifts){
        parent::__construct($hours_per_day,$hours_per_month,$salary);
        $this->day_shifts=$day_shifts;
        $this->night_shifts=$night_shifts;
    }

    public function setDayShifts($day_shifts){
        $this->day_shifts=$day_shifts;
    }
    public function getDayShifts(){
        return $this->day_shifts;
    }

    public function setNightShifts($night_shifts){
        $this->night_shifts=$night_shifts;
    }
    public function getNightShifts(){
        return $this->night_shifts;
    }

    public function showShifts(){
        echo "I have ".$this->day_shifts." day shifts and ".$this->night_shifts."night shifts.<br/>";
    }
}