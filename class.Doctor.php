<?php
/**
 * Created by PhpStorm.
 * User: jyllson
 * Date: 18.01.2017.
 * Time: 10:02
 */

class Doctor {
    public $first_name;
    public $last_name;
    public $specialty;

    public $patients = array();

    public function __construct($first_name="", $last_name="", $specialty=""){

        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->specialty = $specialty;

        GLOBAL $log;
        $log->entry("Kreiran doktor \"$this->first_name $this->last_name\"");
    }

    public function requestLab($patient, $type){

        $date = date("d.m.Y.");
        $time = date("H:i");
        switch($type){
            case "bloodPressureLevel":
                $requested_lab = new LabBloodPressureLevel($date, $time, $patient);
                return $requested_lab;

            case "bloodSugarLevel":
                $requested_lab = new LabBloodSugarLevel($date, $time, $patient);
                return $requested_lab;

            case "bloodCholesterolLevel":
                $requested_lab = new LabBloodCholesterolLevel($date, $time, $patient);
                return $requested_lab;

            default:
                echo "Nepoznat tip laboratorijskog pregleda!";
                return false;
        }
    }
} 