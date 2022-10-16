<?php

namespace App\Core;

class DataDisplayer {


    public function __construct($json)
    { // sorgt für das neue Speichern einer variable
        $this->json = $json;

        $dataLoader = new DataLoader($this->json);
        $this->getJsonData = $dataLoader->getJsonData();
    }

    public function showJsonData()
    {
        $getJson = $this->getJsonData;
        
        for ($i=0; $i < 10; $i++) {
            $currentData =$getJson[$i];
            
            echo "<li class=\"neumorph\">" . $currentData["description"] . "<br><a href=\"" . $currentData["link"] . "\">Link zur Studie</a></li>";
        }
    }
}
