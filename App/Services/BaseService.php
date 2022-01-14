<?php

namespace App\Services;

class BaseService
{
    public $filename;
    public function loadData()
    {
        $dataJson = file_get_contents("Data/$this->filename.json");
        return json_decode($dataJson);
    }

    public function saveData($data)
    {
        $dataJson = json_encode($data);
        file_put_contents("Data/$this->filename.json",$dataJson);
    }
}