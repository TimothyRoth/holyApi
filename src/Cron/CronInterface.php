<?php

namespace HolyApi\Cron;

interface CronInterface
{

    public function register(callable $event, string $schedule_name, int $interval = 2880, string $interval_name = 'wp_theme_interval', string $text_domain = 'wp_theme'): void;

    public function delete(string $schedule_name): void;
}