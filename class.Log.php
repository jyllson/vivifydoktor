<?php
/**
 * Created by PhpStorm.
 * User: jyllson
 * Date: 18.01.2017.
 * Time: 10:04
 */

class Log {
    public $date;
    public $time;
    public $action;

    // Smeštanje akcije u log fajl
    public function entry($action){
        $timestamp = date("d.m.Y H:i");

        $log = fopen("log.txt", "a");
        fwrite($log, "[".$timestamp."] ".$action."\r\n");
        fclose($log);
    }
} 