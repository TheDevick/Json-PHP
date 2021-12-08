<?php

namespace DinoDev\Json\Classes;

use Exception;

class Json
{
    /**
     * Get a JSON and Return It
     */
    public function getJson(string $jsonPath)
    {
        $fileExists = @file_exists($jsonPath);
        $fileContent = @file_get_contents($jsonPath);
        $jsonArray = @json_decode($fileContent, true);

        $basename = basename($jsonPath);

        //Check File Exists
        if (!$fileExists) throw new Exception("File \"$basename\" Not Exists");

        //Check Read File
        if (!$fileContent) throw new Exception("File \"$basename\" Cannot be Open");

        //Check Array Convertion
        if (!$jsonArray) throw new Exception("File \"$basename\" Cannot be Converted to Array");

        return $jsonArray;
    }

    /**
     * Write data in a JSON File
     */
    public function writeJson(string $jsonPath, array $data)
    {
        $fileExists = @file_exists($jsonPath);

        $basename = basename($jsonPath);

        //Check File Exists
        if (!$fileExists) throw new Exception("File \"$basename\" Not Exists");

        return @file_put_contents($jsonPath, json_encode($data));
    }
}
