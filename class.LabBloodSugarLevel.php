<?php
/**
 * Created by PhpStorm.
 * User: jyllson
 * Date: 18.01.2017.
 * Time: 10:11
 */

class LabBloodSugarLevel extends Lab{
    public $value = "";
    public $last_meal_time = "";

    function reportLab(){
        $patient = $this->patient;
        $doctor = $this->doctor;
        $value = $this->value;
        $last_meal_time = $this->last_meal_time;
        echo "Rezultati merenja šećera u krvi za $patient->first_name $patient->last_name su:<br>";
        echo "izmerena vrednost: $value, poslednji obrok pre $last_meal_time h<br>";

        GLOBAL $log;
        $text = "Lab to: dr $doctor->first_name $doctor->last_name --- ";
        $text .= "Rezultati merenja šećera u krvi za $patient->first_name $patient->last_name ";
        $text .= "Izmerena vrednost: $value ";
        $text .= "Poslednji obrok pre: $last_meal_time h \n\r";
        $log->entry($text);
    }
} 