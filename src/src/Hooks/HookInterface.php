<?php

namespace HolyApi\Hooks;

interface HookInterface
{
    public function addFilter(string $hook,  callable|string|array $function, int $priority = 10, int $accepted_args = 1): void;

    public function addAction(string $hook, callable|string|array $function, int $priority = 10, int $accepted_args = 1): void;

    public function removeAction(string $hook, callable|string|array $function, int $priority = 10): void;

    public function executeOnPluginActivation(string $plugin_file, callable|string|array $executable): void;

}