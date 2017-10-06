<?php
/**
 * Created by PhpStorm.
 * User: jyllson
 * Date: 18.01.2017.
 * Time: 10:03
 */

class Patient {
    public $first_name;
    public $last_name;
    public $pid;
    public $med_rec_no;
    public $selected_doc;

    public function __construct($first_name="", $last_name="", $pid="", $med_rec_no=""){

        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->pid = $pid;
        $this->med_rec_no = $med_rec_no;

        GLOBAL $log;
        $log->entry("Kreiran pacijent \"$first_name $last_name\"");
    }

    public function selectDoc($doctor){

        $this->selected_doc = $doctor;
        array_push($doctor->patients, $this->pid);

        GLOBAL $log;
        $log->entry("Pacijent $this->first_name $this->last_name je izabrao doktora $doctor->first_name $doctor->last_name");

        return $this->selected_doc;
    }
} 