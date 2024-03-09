<?php

namespace HolyApi\Info\WordPress;

use HolyApi\Info\InfoInterface;

class Info implements InfoInterface
{

    public function getBloginfo(string $needle): string
    {
        return get_bloginfo($needle);
    }

    public function getBodyClass(): string
    {
        return implode(' ', get_body_class());
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

    public function is404(): bool
    {
        return is_404();
    }

    public function isAttachment(): bool
    {
        return is_attachment();
    }

    public function languageAttributes(): string
    {
        return get_language_attributes();
    }

    public function siteTitle(): string
    {
        return wp_title();
    }

}