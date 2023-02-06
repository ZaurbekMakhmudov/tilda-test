<?php

namespace App;

class JsonReader
{
    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function getFileContent(): array {
        $file = $this->readFile();
        return json_decode($file, true);
    }

    public function readFile(): string
    {
        return file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/resources/" . $this->filename);
    }
}