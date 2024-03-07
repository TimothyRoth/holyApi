<?php

namespace HolyApi\Metabox;

interface MetaboxInterface
{
    public function create(string $name, callable $callback, string|array $screen = null, int|null $id = null, string $context = 'advanced', string $priority = 'default', array $callback_args = null);

    public function delete(string $id, string|array $screen, string $context = 'advanced');

    public function updateFields(array $fields): void;
}