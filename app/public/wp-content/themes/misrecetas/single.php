<?php get_header(); ?>

<main class="mb-3">

    <?php if (have_posts()) : while (have_posts()): the_post(); ?>
    
    <article>
        <h1 class="head-strong fnt-xl5 txt-center mb-05"><?php the_title(); ?></h1>
        <div class="txt-center mb-2"><?php echo get_the_date(); ?> | <?php the_author(); ?></div>
        <div class="txt-center mb-3"><?php the_post_thumbnail('large'); ?></div>
        <div class="line-normal fnt-xl block-center-row">
            
            <div class="col-desk-7 col-tab-8">
                <?php the_content(); ?>
            </div>
            
            
        </div>
    </article>    

    <?php endwhile;endif; ?>
              
</main>   

<?php get_footer(); ?>