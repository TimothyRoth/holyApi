<?php

declare(strict_types=1);

namespace HolyApi\Ui\WordPress;

use HolyApi\Ui\UiInterface;

class Ui implements UiInterface
{
    public function createSettingsMenuPage(string $Loop_title, string $menu_title, string $text_domain = 'wp_theme', string $capability, string $menu_slug, callable $function, string $icon_url = 'dashicons-admin-generic', int $position = 6): void
    {

        add_action('admin_menu', function () use ($Loop_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position) {
            add_menu_page($Loop_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position);
        });

        add_menu_page(
            __($Loop_title, $text_domain),
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

    public function getNavMenu(array $args): mixed
    {
        return wp_nav_menu($args);
    }

    public function getHeader(): void
    {
        get_header();
    }

    public function getFooter(): void
    {
        get_footer();
    }

    public function getTemplatePart(string $slug, string $name = ''): void
    {
        get_template_part($slug, $name);
    }

    public function getSidebar(string $name): void
    {
        get_sidebar($name);
    }

    public function getSearchForm(callable|null $callback = null): void
    {
        if ($callback !== null) {
            $callback();
            return;
        }

        get_search_form();
    }

    public function renderHeader(callable|null $callback = null, array $args = null): void
    {
        if ($args === null) {
            $args = [
                'language_attributes' => get_language_attributes(),
                'html_type' => get_bloginfo('html_type'),
                'charset' => get_bloginfo('charset'),
                'viewport' => 'width=device-width, initial-scale=1.0, user-scalable=no',
                'theme_color' => '',
            ];
        }
        ob_start(); ?>

        <!DOCTYPE html>
        <html <?= $args['language_attributes'] ?>>
        <head>
            <meta http-equiv="content-type"
                  content="<?= $args['html_type'] ?>; charset=<?= $args['charset'] ?>"/>
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="<?= $args['viewport'] ?>">
            <meta name="theme-color" content="<?= $args['theme_color'] ?>"/>
            <?php wp_head() ?> <title><?= wp_title() ?></title>
        </head>

        <body class="<?= implode(' ', get_body_class()) ?>">
        <?php echo ob_get_clean();

        if ($callback !== null) {
            $callback();
        }
    }

    public function renderFooter(callable|null $callback = null): void
    {
        if ($callback !== null) {
            $callback();
        }

        ob_start(); ?>
        </body>
        </html>
        <?php echo ob_get_clean();
    }
}