<?php

namespace HolyApi\Globals\WordPress;

use HolyApi\Globals\GlobalsInterface;

class Globals implements GlobalsInterface
{
    public function getPageID(): int
    {
        return get_the_ID();
    }

    public function getPost(): WP_Post
    {
        global $post;
        return $post;
    }

    public function getQuery(): WP_Query
    {
        global $wp_query;
        return $wp_query;
    }

    public function getDB(): wpdb
    {
        global $wpdb;
        return $wpdb;
    }

    public function getVersion(): string
    {
        global $wp_version;
        return $wp_version;
    }

    public function getWP(): WP
    {
        global $wp;
        return $wp;
    }

    public function getCustomizer(): WP_Customize_Manager
    {
        global $wp_customize;
        return $wp_customize;
    }

    public function getSiteName(): string
    {
        return get_bloginfo('name');
    }

    public function getSiteDescription(): string
    {
        return get_bloginfo('description');
    }

    public function getSiteUrl(): string
    {
        return get_bloginfo('url');
    }

    public function getBodyClass(): string
    {
        return implode(' ', get_body_class());
    }

    public function getHeader(): void
    {
        get_header();
    }

    public function getFooter(): void
    {
        get_footer();
    }

    public function getSidebar(): void
    {
        get_sidebar();
    }

    public function isHome(): bool
    {
        return is_home();
    }

    public function isFrontPage(): bool
    {
        return is_front_page();
    }

    public function isSingle(): bool
    {
        return is_single();
    }

    public function isPage(): bool
    {
        return is_page();
    }

    public function isArchive(): bool
    {
        return is_archive();
    }

    public function isSearch(): bool
    {
        return is_search();
    }

}