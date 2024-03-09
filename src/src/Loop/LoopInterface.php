<?php

namespace HolyApi\Loop;

interface LoopInterface
{
    public function getID(): int;

    public function startLoop(): mixed;

    public function theLoop(): void;

    public function getContent(): string;

    public function getTitle(int $id = null): string;

    public function getPostField(string $field, int $id): string;

}