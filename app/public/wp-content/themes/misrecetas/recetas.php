<?php /*Template name: recetas */ ?>

<?php get_header(); ?>

<main>

    <?php
    $args = array(
        'posts_per_page' => 3,
        'post_status' => 'publish',
        'post_type' => 'post',
        'paged' => $paged
    );

    $the_query = new WP_Query($args);
    ?>

    <?php if ($the_query->have_posts()): ?>

        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

            <?php get_template_part('templates/item'); ?>

        <?php endwhile; ?>

    <!--Paginación-->
        <nav class="nav-main fnt-lg block-center-row mb-2">
            <?php
                echo paginate_links(
                    array(
                        'current' => max(1, $paged),
                        'total'   => $the_query->max_num_pages,
                        'show_all'=> true,
                        'prev_text' => '<',
                        'next_text' => '>',
                        'after_page_number' => '<span class="separator">|</span>'
                    )
                );
            ?>
        </nav>
    
    <?php else: ?>
        <div>No hay recetas</div>
    <?php endif; ?>

</main>

<?php get_footer(); ?>