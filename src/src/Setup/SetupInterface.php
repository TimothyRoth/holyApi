<?php

namespace HolyApi\Setup;

interface SetupInterface
{

    public function defineHeader(): void;

    public function defineFooter(): void;

    public function openBody(): void;

    public function getBodyClass(): string;

    public function addThemeSupport(string $theme_support): void;

    public function addImageSize(string $name, int $width, int $height, bool $crop = false): void;

    public function addPostTypeSupport(string $post_type, string $feature): void;

    public function enqeueMedia(string $media): void;
}