<?php

trait Generate
{
    public function getRandomName() : string
    {
        $firstName = ["nguyen", "dang", "hoang", "le", "ho"];
        $lastName = ["Hung", "Minh", "Long", "Tung", "Duc"];
        $ran1 = rand(0,count($firstName) -1);
        $ran2 = rand(0,count($lastName) -1);
        return $firstName[$ran1] . " " . $lastName[$ran2];
    }
}