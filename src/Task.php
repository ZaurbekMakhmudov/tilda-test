<?php

namespace App;

abstract class Task
{
    private JsonReader $jsonReader;
    private array $fileContent;

    public string $filename;

    public function __construct()
    {
        $this->jsonReader = new JsonReader($this->filename);
        $this->fileContent = $this->jsonReader->getFileContent();
    }

    public function getTaskDescription(): string
    {
        return $this->fileContent['description'];
    }

    public function getContent(): string {
        return $this;
    }



}