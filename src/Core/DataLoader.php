<?php

namespace App\Core;

class DataLoader {

    public $myData;

    public function __construct($myData)
    { // sorgt für das neue Speichern einer variable
        $this->myData = $myData;
    }

    public function getJsonData() {
        $getJson = file_get_contents($this->myData);
        $jsonDecode = json_decode($getJson,true);
        $data = $jsonDecode['data'];
        return $data; 
    }

    public function showJsonData()
    {
        $getJson = file_get_contents($this->myData);
        echo "<pre>". $getJson . "</pre>";
    }
}

?>