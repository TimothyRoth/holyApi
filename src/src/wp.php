<?php

declare(strict_types=1);

namespace HolyApi;

use HolyApi\Ajax\WordPress\Ajax;
use HolyApi\Column\WordPress\Column;
use HolyApi\Cron\WordPress\Cron;
use HolyApi\Customizer\WordPress\Customizer;
use HolyApi\Hooks\WordPress\Hooks;
use HolyApi\Info\WordPress\Info;
use HolyApi\Loop\WordPress\Loop;
use HolyApi\Mail\WordPress\Mail;
use HolyApi\Metabox\WordPress\Metabox;
use HolyApi\Row\WordPress\Row;
use HolyApi\Script\WordPress\Script;
use HolyApi\Setting\WordPress\Setting;
use HolyApi\Setup\WordPress\Setup;
use HolyApi\Shortcode\WordPress\Shortcode;
use HolyApi\Table\WordPress\Table;
use HolyApi\Taxonomy\WordPress\Taxonomy;
use HolyApi\Term\WordPress\Term;
use HolyApi\Ui\WordPress\Ui;
use HolyApi\Url\WordPress\Url;
use HolyApi\User\WordPress\User;

class wp
{
    private static ?Wp $instance = null;
    private static array $cache = [];

    public static function make(string $class): mixed
    {
        if (!isset(self::$cache[$class])) {
            self::$cache[$class] = new $class();
        }

        return self::$cache[$class];
    }

    public static function Ajax(): Ajax
    {
        return self::make(Ajax::class);
    }

    public static function Column(): Column
    {
        return self::make(Column::class);
    }

    public static function Cron(): Cron
    {
        return self::make(Cron::class);
    }

    public static function Customizer(): Customizer
    {
        return self::make(Customizer::class);
    }

    public static function Hooks(): Hooks
    {
        return self::make(Hooks::class);
    }

    public static function Info(): Info
    {
        return self::make(Info::class);
    }

    public static function Loop(): Loop
    {
        return self::make(Loop::class);
    }

    public static function Mail(): Mail
    {
        return self::make(Mail::class);
    }

    public static function Metabox(): Metabox
    {
        return self::make(Metabox::class);
    }

    public static function Row(): Row
    {
        return self::make(Row::class);
    }

    public static function Script(): Script
    {
        return self::make(Script::class);
    }

    public static function Setting(): Setting
    {
        return self::make(Setting::class);
    }

    public static function Setup(): Setup
    {
        return self::make(Setup::class);
    }

    public static function Shortcode(): Shortcode
    {
        return self::make(Shortcode::class);
    }

    public static function Table(): Table
    {
        return self::make(Table::class);
    }

    public static function Taxonomy(): Taxonomy
    {
        return self::make(Taxonomy::class);
    }

    public static function Term(): Term
    {
        return self::make(Term::class);
    }

    public static function Ui(): Ui
    {
        return self::make(Ui::class);
    }

    public static function Url(): Url
    {
        return self::make(Url::class);
    }

    public static function User(): User
    {
        return self::make(User::class);
    }

}