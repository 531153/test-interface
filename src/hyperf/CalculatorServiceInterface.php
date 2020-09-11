<?php


namespace lxy\hyperf;


interface CalculatorServiceInterface
{
    public function add(int $a, int $b): int;
    public function multiply(int $a, int $b): int;

}