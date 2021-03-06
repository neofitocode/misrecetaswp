<?php get_header(); ?>
<!--Contenido Principal-->
<main class="grid">
    <!--Section-->

    <?php
    $args = array(
        'posts_per_page' => 6,
        'post_status' => 'publish',
        'post_type' => 'post',
        //*'paged' => $paged
    );

    $the_query = new WP_Query($args);
    ?>

    <section class="col-desk-10 col-tab-8 col-mob-12 separator-block">
        <div class="grid">

            <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>

                    <div class="col-desk-6 col-tab-6 mb-2">
                        <div class="mb-05">
                            <a href="<?php the_permalink(); ?>">
                                <img class="img-md rounded img-link" src="<?php echo get_the_post_thumbnail_url(false, 'medium_large'); ?>">
                            </a>
                        </div>
                        <h2 class="head-strong txt-center mb-05">
                            <a class="link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                    </div>

                <?php endwhile;
                wp_reset_postdata(); ?>

        </div>
    </section>

<?php else : ?>
    <div>No hay recetas</div>
<?php endif; ?>
<!--Aside-->
<aside class="col-desk-2 col-tab-4 col-mob-12">
    <h2 class="head-strong txt-center mb-05">Menu del día</h2>
    <div class="border-light rounded">
        <div class="grid">

            <?php $menu_del_dia = get_field('menu_del_dia', get_page_by_path('menu-del-dia')->ID); ?>
            <?php if ($menu_del_dia) : ?>
                <?php foreach ($menu_del_dia as $post) : setup_postdata($post) ?>
                    
                    <div class="col-mob-4 mb-05">
                        <h4 class="pad-1 fnt-xs2 txt-light head-strong mb-05 txt-center"><?php the_category(); ?></h4>
                        <h3 class="pad-1 fnt-xs head-strong mb-05 txt-center line-xs"><a class="link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <a href="<?php the_permalink(); ?>"><img class="img-xs img-link" src="<?php echo get_the_post_thumbnail_url(false, 'medium_large'); ?>"></a>
                    </div>
                    
                <?php endforeach; ?>
            <?php endif; ?>

        </div>
    </div>
</aside>
</main>
<div class="mb-3"></div>
<?php get_footer(); ?>