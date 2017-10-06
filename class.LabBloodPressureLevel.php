<?php
/**
 * Created by PhpStorm.
 * User: jyllson
 * Date: 18.01.2017.
 * Time: 10:10
 */

class LabBloodPressureLevel extends Lab{
    public $upper_value = "";
    public $lower_value = "";
    public $pulse = "";

    function reportLab(){
        $patient = $this->patient;
        $doctor = $this->doctor;
        $upper_value = $this->upper_value;
        $lower_value = $this->lower_value;
        $pulse = $this->pulse;
        echo "Rezultati merenja krvnog pritiska za $patient->first_name $patient->last_name su:<br>";
        echo "gornji: $upper_value mmHg, donji: $lower_value mmHg, puls: $pulse o/min.<br>";

        GLOBAL $log;
        $text = "Lab to: dr $doctor->first_name $doctor->last_name --- ";
        $text .= "Rezultati krvnog pritiska za pacijenta $patient->first_name $patient->last_name ";
        $text .= "Gornji: $upper_value mmHg ";
        $text .= "Donji: $lower_value mmHg ";
        $text .= "Puls: $pulse o/min.\n\r";
        $log->entry($text);
    }
} 