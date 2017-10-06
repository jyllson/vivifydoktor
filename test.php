<?php
/**
 * Created by PhpStorm.
 * User: jyllson
 * Date: 18.01.2017.
 * Time: 10:21
 */

// Definišemo autoloader za klase
spl_autoload_register(function($ime_klase){
    require_once "class.{$ime_klase}.php";
});
//

//Inicijalizujemo log
$log = new Log();

// 1. Kreiramo doktora "Milan"
$milan = new Doctor("Milan", "Petrović", "pulmolog");

// 2. Kreiramo pacijenta "Dragan"
$dragan = new Patient("Dragan", "Stančić", "1909974805023", "206355743");

// 3. Pacijent "Dragan" bira doktora "Milan"
$dragan->selectDoc($milan);

// 4. Doktor "Milan" zakazuje pregled za merenje nivoa šecera u krvi za pacijenta "Dragan"
$lab1 = $milan->requestLab($dragan, "bloodSugarLevel");

// 5. Doktor "Milan" zakazuje pregled za merenje krvnog pritiska za pacijenta "Dragan"
$lab2 = $milan->requestLab($dragan, "bloodPressureLevel");

// 6. Pacijent "Dragan" obavlja laboratorijski pregled za merenje nivoa šećera u krvi
$lab1->value=5.6;
$lab1->last_meal_time=6;
$lab1->reportLab();
echo "<br>";

// 7. Pacijent "Dragan" obavlja laboratorijski pregled za merenje krvnog pritiska
$lab2->upper_value=120;
$lab2->lower_value=80;
$lab2->pulse=65;
$lab2->reportLab();