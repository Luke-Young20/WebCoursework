<?php

namespace App\Services;

class Facebook
{

    private $apiKey;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function postfb($text)
    {
        $newString = $text.$this->apiKey;
        dd($newString);
    }



}