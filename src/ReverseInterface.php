<?php

declare(strict_types=1);

namespace App\JsonRpc;


interface ReverseInterface
{
    public function reverse(int $x): int;

}