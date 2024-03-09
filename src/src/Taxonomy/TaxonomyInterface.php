<?php

namespace HolyApi\Taxonomy;

interface TaxonomyInterface
{

    public function create(string $taxonomy_name, string|array $table_name, string $text_domain = 'wp_theme', array $args = null): void;

    public function read(string $taxonomy_name): ?object;

    public function update(string $taxonomy_name, string $table_name, array $args = []): bool;

    public function delete(string $taxonomy_name): bool;

}