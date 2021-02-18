<?php get_header(); ?>

<main>

    <h1 class="head-strong mb-2 txt-light"><?php echo get_the_archive_title(); ?></h1>

    <?php if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <?php get_template_part('templates/item'); ?>
        <?php endwhile; ?>

        <nav class="nav-pagination fnt-lg block-center-row mb-2">
            <?php
                echo paginate_links(
                    array(
                        'show_all' => true,
                        'prev_text' => '<',
                        'next_text' => '>',
                        'after_page_number' => '<span class="separator">|</span>'
                    )
                );
            ?>
        </nav>

    <?php endif; ?>


</main>

<?php get_footer(); ?>