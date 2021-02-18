<article class="mb-3">
    <h2 class="head-strong mb-05 fnt-xl2"><a class="link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div class="grid">

        <div class="col-desk-4 col-tab-5">
            <a href="<?php the_permalink (); ?>"><?php the_post_thumbnail('medium-large'); ?></a>
        </div>

        <div class="col-desk-8 col-tab-7">
            <div class="head-normal mb-05"><?php echo get_the_date(); ?> | <?php the_author(); ?></div>
            <div class="mb-05 line-normal">
                <?php the_excerpt(); ?>
            </div>
            <a class="link link-normal" href="<?php the_permalink(); ?>">Ver receta</a>
        </div>

    </div>

</article>