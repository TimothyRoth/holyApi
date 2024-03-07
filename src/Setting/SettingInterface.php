<?php

namespace HolyApi\Setting;

interface SettingInterface
{
    public function create(string $setting_name, mixed $value = '', string|bool $autoload = 'yes'): bool;

    public function read(string $setting_name, mixed $default_value = false): mixed;

    public function update(string $setting_name, mixed $value, string|bool $autoload = 'yes'): bool;

    public function delete(string $setting_name): bool;

    public function updateSettings(array $fields): void;

}