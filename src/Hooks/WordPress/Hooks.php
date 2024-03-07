<?php

namespace HolyApi\Hooks\WordPress;

use HolyApi\Hooks\HookInterface;

class Hooks implements HookInterface
{

    public function addFilter(string $hook, callable|string|array $function, int $priority = 10, $accepted_args = 1): void
    {
        add_filter($hook, $function, $priority, $accepted_args);
    }

    public function addAction(string $hook, callable|string|array $function, int $priority = 10, $accepted_args = 1): void
    {
        add_action($hook, $function, $priority, $accepted_args);
    }

    public function removeAction(string $hook, callable|array|string $function, int $priority = 10): void
    {
        remove_action($hook, $function, $priority);
    }

    public function executeOnPluginActivation(string $plugin_file, array|string|callable $executable): void
    {
        if (is_array($executable)) {
            register_activation_hook($plugin_file, [$executable[0], $executable[1]]);
        }

        if (is_callable($executable)) {
            register_activation_hook($plugin_file, function () use ($executable) {
                $executable();
            });
        }

        if (is_string($executable)) {
            register_activation_hook($plugin_file, $executable);
        }
    }


}