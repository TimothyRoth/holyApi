<?php

declare(strict_types=1);

namespace HolyApi\Ui\WordPress;

use HolyApi\Ui\UiInterface;

class Ui implements UiInterface
{
    public function createSettingsMenuPage(string $page_title, string $menu_title, string $text_domain = 'wp_theme', string $capability, string $menu_slug, callable $function, string $icon_url = 'dashicons-admin-generic', int $position = 6): void
    {

        add_action('admin_menu', function () use ($page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position) {
            add_menu_page($page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position);
        });

        add_menu_page(
            __($page_title, $text_domain),
            __($menu_title, $text_domain),
            $capability,
            $menu_slug,
            $function,
            $icon_url,
            $position
        );
    }

    public function registerNavMenus(array $locations): void
    {
        add_action('init', function () use ($locations) {
            register_nav_menus($locations);
        });
    }

    public function renderNavMenu(array $args): mixed
    {
        return wp_nav_menu($args);
    }
}