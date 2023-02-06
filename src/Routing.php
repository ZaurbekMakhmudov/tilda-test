<?php

namespace App;


class Routing
{
    const Tasks = [
      '/task-1' => 'App\LadderTask',
      '/task-2' => 'App\NumArrayTask',
      '/task-3' => 'App\DigitTask'
    ];
    private string $path;
    public ?string $city;

    public function __construct($path)
    {
        $this->path = $this->preparePath($path);
        $this->city = $this->getCityParamValue($path);
    }

    public function getTask()
    {
        if(isset(self::Tasks[$this->path])) {
            $classname = self::Tasks[$this->path];
            return new $classname();
        }
        if($this->path == '/') {
            header("Location: " . array_key_first(self::Tasks));
            exit();
        }

        die('Task not found');
    }

    public function preparePath($path): string
    {
        return explode('?', $path)[0];
    }

    public function getCityParamValue($path): bool|string
    {
        $pathArray = explode('?', $path);
        foreach ($pathArray as $param) {
            if(explode('=', $param)[0] == 'city') {
                return explode('=', $param)[1];
            }
        }

        return false;
    }


}