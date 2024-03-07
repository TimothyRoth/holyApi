<?php

namespace HolyApi\Ui;

interface UiInterface
{
    public function createSettingsMenuPage(string $page_title, string $menu_title, string $text_domain = 'wp_theme', string $capability, string $menu_slug, callable $function, string $icon_url = 'dashicons-admin-generic', int $position = 6): void;

    public function registerNavMenus(array $locations): void;

}