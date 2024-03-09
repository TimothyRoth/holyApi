<?php

namespace HolyApi\Ui;

interface UiInterface
{
    public function createSettingsMenuPage(string $Loop_title, string $menu_title, string $text_domain = 'wp_theme', string $capability, string $menu_slug, callable $function, string $icon_url = 'dashicons-admin-generic', int $position = 6): void;

    public function registerNavMenus(array $locations): void;

    public function getNavMenu(array $args): mixed;

    public function getHeader(): void;

    public function getFooter(): void;

    public function getTemplatePart(string $slug, string $name = ''): void;

    public function getSidebar(string $name): void;

    public function getSearchForm(callable|null $callback = null ): void;

    public function renderHeader(callable|null $callback = null, array $args = null): void;

    public function renderFooter(callable|null $callback = null): void;
}