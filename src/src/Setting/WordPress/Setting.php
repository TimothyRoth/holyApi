<?php

namespace HolyApi\Setting\WordPress;

use HolyApi\Setting\SettingInterface;

class Setting implements SettingInterface
{

    public function create(string $setting_name, mixed $value = '', bool|string $autoload = 'yes'): bool
    {
        return add_option($setting_name, $value, '', $autoload);
    }

    public function read(string $setting_name, mixed $default_value = false): mixed
    {
        return get_option($setting_name, $default_value);
    }

    public function update(string $setting_name, mixed $value, bool|string $autoload = 'yes'): bool
    {
        return update_option($setting_name, $value, $autoload);
    }

    public function delete(string $setting_name): bool
    {
        return delete_option($setting_name);
    }

    public function updateSettings(array $fields): void
    {
        add_action('init', function () use ($fields) {
            foreach ($fields as $setting) {
                if (isset($_POST[$setting])) {
                    $this->update($setting, $_POST[$setting]);
                }
            }
        });
    }

}