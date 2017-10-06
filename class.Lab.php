<?php
/**
 * Created by PhpStorm.
 * User: jyllson
 * Date: 18.01.2017.
 * Time: 10:03
 */

abstract class Lab {
    public $date;
    public $time;
    public $doctor;
    public $patient;

    public function __construct($date, $time, $patient){
        $this->date = $date;
        $this->time = $time;
        $this->doctor = $patient->selected_doc;
        $this->patient = $patient;
    }

    abstract function reportLab();
} 