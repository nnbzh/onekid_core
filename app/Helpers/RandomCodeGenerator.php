<?php

namespace App\Helpers;

class RandomCodeGenerator
{
    private int $length;

    public function __construct(int $length = 4)
    {
        $this->length = $length;
    }

    public function generate(): int
    {
        $low = pow(10, $this->length);
        $high = pow(10, $this->length) - 1;

        return rand($low, $high);
    }
}