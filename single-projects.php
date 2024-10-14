<?php get_header(); ?>

<main class="container">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <article>
                <h1><?php the_title(); ?></h1>
                

                <?php if (has_post_thumbnail()) {
                    the_post_thumbnail('full'); 
                } ?>

                <div><?php the_content(); ?></div>
                
                
                <p><strong>Client Name:</strong> <?php the_field('client_name'); ?></p>
                <p><strong>Project Date:</strong> <?php the_field('project_date'); ?></p>
                <p><strong>Project URL:</strong> <?php the_field('project_url'); ?></p>                    
            </article>
        <?php endwhile;
    else : ?>
        <p>Sorry, no projects matched your criteria.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
