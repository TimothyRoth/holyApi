<?php

namespace HolyApi\Globals;

interface GlobalsInterface
{
    public function getPageID(): int;

    public function getPost(): mixed;

    public function getQuery(): mixed;

    public function getDB(): mixed;

    public function getCustomizer(): mixed;

    public function getVersion(): string;

    public function getWP(): mixed;

    public function getSiteName(): string;

    public function getSiteDescription(): string;

    public function getSiteUrl(): string;

    public function getBodyClass(): string;

    public function getHeader(): void;

    public function getFooter(): void;

    public function getSidebar(): void;

    public function isHome(): bool;

    public function isFrontPage(): bool;

    public function isSingle(): bool;

    public function isPage(): bool;

    public function isArchive(): bool;

    public function isSearch(): bool;
}