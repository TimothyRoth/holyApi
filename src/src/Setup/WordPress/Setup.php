<?php

namespace HolyApi\Setup\WordPress;

use HolyApi\Setup\SetupInterface;

class Setup implements SetupInterface
{

    public function defineHeader(): void
    {
        wp_head();
    }

    public function defineFooter(): void
    {
        wp_footer();
    }

    public function openBody(): void
    {
        echo '<body class="' . $this->getBodyClass() . '">';
    }

    public function getBodyClass(): string
    {
        return implode(' ', get_body_class());
    }

    public function addThemeSupport(string $theme_support): void
    {
        add_theme_support($theme_support);
    }

    public function addImageSize(string $name, int $width, int $height, bool $crop = false): void
    {
        add_image_size($name, $width, $height, $crop);
    }

    public function addPostTypeSupport(string $post_type, string $feature): void
    {
        add_post_type_support($post_type, $feature);
    }

    public function enqeueMedia(): void
    {
        wp_enqueue_media();
    }

}