<?php

namespace App;

class NumArrayTask extends Task
{
    private array $array;
    public string $filename = 'task-2.json';

    public function __construct()
    {
        $this->generate();
        parent::__construct();
    }


    public function generate(): NumArrayTask
    {
        $this->array = [];
        for($i = 0; $i < 5; $i++) {
            for($l = 0; $l < 7; $l++) {
                $nonUnique = 1;
                while($nonUnique) {
                    $num = rand(1, 1000);
                    if($this->isUnique($num))
                        $nonUnique = 0;
                }
                $this->array[$i][$l] = $num;
            }
        }

        return $this;
    }


    public function __toString(): string
    {
        $out = "";
        foreach($this->array as $line) {
            $out .= implode(' ', $line) . ' | ' . array_sum($line) . " <br/>";
        }
        $out .= '<br/>';
        foreach ($this->getRevertedArray() as $line) {
            $out .= array_sum($line) . ' ';
        }
        return $out;
    }

    // Получение массива, в котором колонки это строки, а строки это колонки. Сделан для получения суммы колонок.
    public function getRevertedArray(): array
    {
        $array = [];
        $l = 0;
        foreach ($this->array as $line) {
            $i = 0;
            foreach ($line as $value) {
                $array[$i][$l] = $value;
                $i++;
            }
            $l++;
        }
        return $array;
    }

    // Аналог array_sum
    public function getSum(array $array): int {
        $sum = 0;
        foreach ($array as $value) {
            $sum .= $value;
        }
        return $sum;
    }


    // Проверка получившегося рандомного значения на уникальность
    public function isUnique(int $num): bool
    {
        foreach($this->array as $line) {
            foreach($line as $item) {
                if($item == $num)
                    return false;
            }
        }
        return true;
    }


}