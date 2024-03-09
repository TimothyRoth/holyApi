<?php

namespace HolyApi\Customizer\WordPress;

use HolyApi\Customizer\CustomizerInterface;

class Customizer implements CustomizerInterface
{
    public function read(string $key, bool $single = true): string
    {
        return get_theme_mod($key, $single);
    }

}