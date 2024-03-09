<?php

namespace HolyApi\Customizer;

interface CustomizerInterface
{
    public function read(string $key, bool $single = true): string;
}