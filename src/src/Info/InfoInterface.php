<?php

namespace HolyApi\Info;

interface InfoInterface
{

    public function getBloginfo(string $needle): string;

    public function getBodyClass(): string;

    public function isHome(): bool;

    public function isFrontPage(): bool;

    public function isSingle(): bool;

    public function isPage(): bool;

    public function isArchive(): bool;

    public function isSearch(): bool;

    public function is404(): bool;

    public function isAttachment(): bool;

    public function languageAttributes(): string;

    public function siteTitle(): string;

}