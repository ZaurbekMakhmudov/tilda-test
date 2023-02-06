<?php

namespace App;

class DigitTask extends Task
{
    public string $filename = 'task-3.json';
    private JsonReader $reader;
    private JsonReader $digitReader;
    private string $city;

    public function __construct()
    {
        $this->digitReader = new JsonReader('digits.json');
        parent::__construct();
    }

    public function setCity($city): DigitTask
    {
        $this->city = $city;
        return $this;
    }

    public function getDefaultCity()
    {
        return $this->digitReader->getFileContent()['default_city'];
    }

    public function __toString(): string
    {
        $num = "DIGIT";
        foreach($this->digitReader->getFileContent()['digits'] as $digit) {
            if(isset($this->city)) {
                if($digit['city'] == $this->city)
                    $num = $digit['number'];
            }
        }
        return '8(800)' . $num;
    }


}