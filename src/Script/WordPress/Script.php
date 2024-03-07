<?php

namespace HolyApi\Script\WordPress;

use HolyApi\Script\ScriptInterface;

class Script implements ScriptInterface
{


    public function remove(string $handle): void
    {
        add_action('wp_enqueue_scripts', function () use ($handle) {
            wp_dequeue_script($handle);
        });
    }

    public function add(string $handle, string $src, array $deps = [], mixed $ver = false, bool $in_footer = false): void
    {
        add_action('wp_enqueue_scripts', function () use ($handle, $src, $deps, $ver, $in_footer) {
            wp_enqueue_script($handle, $src, $deps, $ver, $in_footer);
        });
    }

    public function addStylesheet(string $handle, string $src, array $deps = [], mixed $ver = false, string $media = 'all'): void
    {
        add_action('wp_enqueue_scripts', function () use ($handle, $src, $deps, $ver, $media) {
            wp_enqueue_style($handle, $src, $deps, $ver, $media);
        });
    }

    public function patch(string $handle, string $object_name, array $l10n): void
    {
        add_action('wp_enqueue_scripts', function () use ($handle, $object_name, $l10n) {
            wp_localize_script($handle, $object_name, $l10n);
        });
    }

}