<?php

namespace HolyApi\Loop\WordPress;

use HolyApi\Loop\LoopInterface;

class Loop implements LoopInterface
{

    public function theLoop(): void
    {
        if (have_posts()):
            while (have_posts()) : the_post(); ?>
                <article class="content wrapper">
                    <h1 class="page-headline"><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                </article>
            <?php
            endwhile;
        endif;
    }

    public function startLoop(): mixed
    {
        global $post;
        if (have_posts()):
            while (have_posts()) :
                the_post();
                yield $post;
            endwhile;
        endif;
    }

    public function getID(): int
    {
        return get_the_ID();
    }

    public function getContent(): string
    {
        return get_the_content();
    }

    public function getTitle(int $id = null): string
    {
        if ($id) {
            return get_the_title($id);
        }

        return get_the_title();
    }

    public function getPostField(string $field, int $id): string
    {
        return get_post_field($field, $id);
    }

}