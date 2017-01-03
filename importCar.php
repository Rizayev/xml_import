<?php

/**
 * Created by PhpStorm.
 * User: elsevar
 * Date: 02.01.17
 * Time: 16:20
 */
//require_once '../../wp-load.php';
//global $wpdb;

class Car {
    public $id;
    public $dateReg;
    public $editStamp;
    public $rezervace;
    public $condition;
    public $typeCar;
    public $price;
    public $fuel;
    public $tachometr;
    public $countPlaceSeat;
    public $countOwn;
    public $carYear;
    public $doors;
    public $engineVolume;
    public $vin;
    public $engineInfo;
    public $note;
    public $emise;
    public $manufacturer;
    public $model;
    public $equipment;
    public $city;

    function equipment($equipment){
        $nequipment = (array)$equipment;
        $nequipment_count = count($nequipment['equipment_id']);
        for ($ii = 0; $ii <= $nequipment_count; $ii++) {
            error_reporting(0);
            if (in_array('eq_abs', $nequipment['equipment_id'])) {
                $this->eq_abs = '1';
            } else {
                $this->eq_abs = 0;
            }

            if (in_array('eq_el_contr_mirrors', $nequipment['equipment_id'])) {
                $this->eq_el_contr_mirrors = '1';
            } else {
                $this->eq_el_contr_mirrors = 0;
            }

            if (in_array('eq_senzor_steracu', $nequipment['equipment_id'])) {
                $this->eq_senzor_steracu = '1';
            } else {
                $this->eq_senzor_steracu = 0;
            }

            if (in_array('eq_stabilizace_podvozku_(ESP)', $nequipment['equipment_id'])) {
                $this->eq_stabilizace_podvozku = '1';
            } else {
                $this->eq_stabilizace_podvozku = 0;
            }

            if (in_array('eq_el_contr_win', $nequipment['equipment_id'])) {
                $this->eq_el_contr_win = '1';
            } else {
                $this->eq_el_contr_win = 0;
            }

            if (in_array('eq_tempomat', $nequipment['equipment_id'])) {
                $this->eq_tempomat = '1';
            } else {
                $this->eq_tempomat = 0;
            }

            if (in_array('eq_all_wheel_drive', $nequipment['equipment_id'])) {
                $this->eq_all_wheel_drive = '1';
            } else {
                $this->eq_all_wheel_drive = 0;
            }

            //GEAR
            if (in_array('eq_man_gear', $nequipment['equipment_id'])) {
                $this->gear = 'manual';
            } else {
                if (in_array('eq_aut_gear', $nequipment['equipment_id'])) {
                    $this->gear = 'automatic';
                } else {
                    $this->gear = '0';
                }
            }


            //GEAR

            if (in_array('eq_man_aircon', $nequipment['equipment_id'])) {
                $this->klimatizace = 'manuln';
            } else {
                if (in_array('eq_aut_aircon', $nequipment['equipment_id'])) {
                    $this->klimatizace = 'automatick';
                } else {
                    $this->klimatizace = 'nen';
                }
            }


            if (in_array('eq_park_assistent', $nequipment['equipment_id'])) {
                $this->eq_park_assistent = '1';
            } else {
                $this->eq_park_assistent = 0;
            }

            if (in_array('eq_nav_sys', $nequipment['equipment_id'])) {
                $this->eq_nav_sys = '1';
            } else {
                $this->eq_nav_sys = 0;
            }

            if (in_array('eq_dalk_centr', $nequipment['equipment_id'])) {
                $this->eq_dalk_centr = '1';
            } else {
                $this->eq_dalk_centr = 0;
            }

            if (in_array('eq_senz_svet', $nequipment['equipment_id'])) {
                $this->eq_senz_svet = '1';
            } else {
                $this->eq_senz_svet = 0;
            }

            if (in_array('eq_mlhovky', $nequipment['equipment_id'])) {
                $this->eq_mlhovky = '1';
            } else {
                $this->eq_mlhovky = 0;
            }

            if (in_array('eq_xenon', $nequipment['equipment_id'])) {
                $this->eq_xenon = '1';
            } else {
                $this->eq_xenon = 0;
            }

            if (in_array('eq_tazne_zar', $nequipment['equipment_id'])) {
                $this->eq_tazne_zar = '1';
            } else {
                $this->eq_tazne_zar = 0;
            }

            if (in_array('eq_roofrack', $nequipment['equipment_id'])) {
                $this->eq_roofrack = '1';
            } else {
                $this->eq_roofrack = 0;
            }

            if (in_array('eq_head_up_disp', $nequipment['equipment_id'])) {
                $this->eq_head_up_disp = '1';
            } else {
                $this->eq_head_up_disp = 0;
            }

            if (in_array('eq_el_seriditelna_sedadla', $nequipment['equipment_id'])) {
                $this->eq_el_seriditelna_sedadla = '1';
            } else {
                $this->eq_el_seriditelna_sedadla = 0;
            }

            if (in_array('eq_roof_win', $nequipment['equipment_id'])) {
                $this->eq_roof_win = '1';
            } else {
                $this->eq_roof_win = 0;
            }

            if (in_array('eq_heated_seats', $nequipment['equipment_id'])) {
                $this->eq_heated_seats = '1';
            } else {
                $this->eq_heated_seats = 0;
            }

            if (in_array('eq_leather_trim', $nequipment['equipment_id'])) {
                $this->eq_leather_trim = '1';
            } else {
                $this->eq_leather_trim = 0;
            }

            if (in_array('eq_sportovni_podvozek', $nequipment['equipment_id'])) {
                $this->eq_sportovni_podvozek = '1';
            } else {
                $this->eq_sportovni_podvozek = 0;
            }

            if (in_array('eq_sportovni_sedadla', $nequipment['equipment_id'])) {
                $this->eq_sportovni_sedadla = '1';
            } else {
                $this->eq_sportovni_sedadla = 0;
            }

            if (in_array('dph', $nequipment['equipment_id'])) {
                $this->dph = '1';
            } else {
                $this->dph = 0;
            }

            if (in_array('service_book', $nequipment['equipment_id'])) {
                $this->service_book = '1';
            } else {
                $this->service_book = 0;
            }


        }
    }
}

class XMLloadCars{

    static function getXMLlist(){
        $url = file_get_contents("http://www.autosoft.cz/xml/XML_3elmtErkwkrlgmelrk4ded_rfrt7wer854e/listing.php");
        $re = '/\w+-?\w+.zip/';
        preg_match_all($re, $url, $matches);
        foreach ($matches[0] as $match) {
            $XMLlist[] = $match;
        }
        return $XMLlist;
    }

    static function getXmlUrl($xml_name){
        return $url = "http://www.autosoft.cz/xml/XML_3elmtErkwkrlgmelrk4ded_rfrt7wer854e/$xml_name";
    }
    static function getXmlName($name){
        return str_replace(".zip", "", $name);
    }
}

class Zip {
    static function loadZip($xml_url){
        $url =  XMLloadCars::getXmlUrl($xml_url);
        $zipFile = "zipfile.zip";
        $zipResource = fopen($zipFile, "w");
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FAILONERROR, true);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_AUTOREFERER, true);
        curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_FILE, $zipResource);
        $page = curl_exec($ch);
        if (!$page) {
            echo "Error :- " . curl_error($ch);
        }
        curl_close($ch);
        $zip = new ZipArchive;
        $extractPath = "xml/";
        if ($zip->open($zipFile) != "true") {
            echo "Error :- Unable to open the Zip File";
        }
        /* Extract Zip File */
        $zip->extractTo($extractPath);
        $zip->close();
    }
}

$autobazaLists = XMLloadCars::getXMLlist();
#for ( $i = 0; $i < count($autobazaLists); $i++ ){
for ( $i = 0; $i < 1; $i++ ){
    Zip::loadZip($autobazaLists[$i]);
    $name_xml_baza = XMLloadCars::getXmlName($autobazaLists[$i]);
    $xml_path_load = simplexml_load_file("xml/{$name_xml_baza}.xml");
    if ($xml_path_load){

        $cars = $xml_path_load;
        $countCars = $cars->cars->car->count();

        //city
        $carObj = new Car();
        $carObj->city = $cars->cars->Prodejce->Region;

        if($carObj->city == 'Kraj Praha') {
            $carObj->city = 128639;
        }else{
//            $sql = "SELECT * FROM `tmm_cars_locations` WHERE `name` LIKE '%{$carObj->city}%' ORDER BY `slug` ASC";
//            $city = $wpdb->get_results($sql);
//            $city = (array)$city[0];
//            $city = $city['id'];
//            $carObj->city = $city;
        }
        // end city

        for ( $i2 = 0; $i2 <= $countCars; $i2++ ){
            $thisCar = $cars->cars->car[$i2];
            #echo $carObj->editStamp = $thisCar->edit_stamp . '<br>'; //TODO Проверка массива if/else
            #echo $carObj->condition = $thisCar->condition . '<br>'; //TODO Проверка массива if/else
            #echo $carObj->typeCar = $thisCar->typkar . '<br>'; //TODO Проверка массива if/else
            #echo $carObj->fuel = $thisCar->fuel . '<br>'; //TODO Проверка массива if/else
            #echo $carObj->countOwn = $thisCar->pocet_majitelu . '<br>'; //TODO Проверка массива if/else
            #echo $carObj->emise = $thisCar->emise . '<br>'; //TODO Проверка массива if/else

            #echo $carObj->equipment($thisCar->equipment); //TODO Проверка массива if/else
            #echo $carObj->eq_abs;

            #echo $carObj->tachometr = $thisCar->tachometr . '<br>';
            #echo $carObj->price = $thisCar->price_base . '<br>';
            #echo $carObj->carYear = $thisCar->rok_vyroby . '<br>';
            #echo $carObj->doors = $thisCar->dveri . '<br>';
            #echo $carObj->engineVolume = $thisCar->engine_volume . '<br>';
            #echo $carObj->vin = $thisCar->VIN . '<br>';
            #echo $carObj->engineInfo = $thisCar->type . '<br>';
            #echo $carObj->note = $thisCar->note . '<br>';
            #echo $carObj->manufacturer = $thisCar->manufacturer . '<br>';
            #echo $carObj->model = $thisCar->model . '<br>';


        }


    }else{
        #throw new ErrorException("{$name_xml_baza} xml файл не загрузился");
        echo "{$name_xml_baza} xml файл не загрузился";
    }
}
