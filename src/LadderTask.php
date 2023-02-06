<?php

namespace App;

class LadderTask extends Task
{

    public string $filename = 'task-1.json';

    public function getValue()
    {
        $this->out = [];
        $prevValue = 0;
        for($step = 1; $step <= 100; $step++) {
            // Итерация необходимых значений для вывода на экран
            for($i = 1; $i <= $step; $i++) {
                $this->out[$step][] = strval($prevValue + $i);
                if($prevValue + $i >= 100) return false;
            }
            // Запись последнего шага, как последнего значения
            $prevValue += $step;
        }
    }

    public function __toString(): string
    {
        $this->getValue();
        $str = '';
        foreach($this->out as $line) {
            $str .= implode(' ', $line) . '<br/>';
        }
        return $str;
    }

}