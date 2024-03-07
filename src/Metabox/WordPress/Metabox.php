<?php

namespace HolyApi\Metabox\WordPress;

use HolyApi\Metabox\MetaboxInterface;

class Metabox implements MetaboxInterface
{
    public function create(string $name, callable $callback, string|array $screen = null, string $context = 'advanced', string $priority = 'default', array $callback_args = null): void
    {
        add_action('add_meta_boxes', function () use ($name, $callback, $screen, $context, $priority, $callback_args) {
            add_meta_box($name, $name, $callback, $screen, $context, $priority, $callback_args);
        });
    }

    public function updateFields(array $fields): void
    {
        add_action('save_post', function () use ($fields) {
            $this->saveFields($fields);
        });
    }

    public function delete(string $id, string|array $screen, string $context = 'advanced'): void
    {
        add_action('add_meta_boxes', function () use ($id, $screen, $context) {
            remove_meta_box($id, $screen, $context);
        });
    }

    private function saveFields($fields): void
    {
        foreach ($fields as $field) {
            if (isset($_POST[$field])) {
                update_post_meta(get_the_id(), $field, $_POST[$field]);
            }
        }
    }

}