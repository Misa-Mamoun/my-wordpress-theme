<?php get_header(); ?>

<div class="hero-section">
    <h1>Welcome to Our Website</h1>
    <p>We provide high-quality services</p>
</div>

<section class="services-section">
    <h2>Our Services</h2>
    <div class="services-grid">
        
        <div class="service">
            <h3>Web Development</h3>
            <p>We create amazing websites that are responsive and fast.</p>
        </div>

        
        <div class="service">
            <h3>Graphic Design</h3>
            <p>Our team designs visually appealing graphics for your brand.</p>
        </div>

        
        <div class="service">
            <h3>SEO Optimization</h3>
            <p>Boost your website's visibility with our SEO services.</p>
        </div>
    </div>
</section>

<div class="projects-section">
    <h2>Recent Projects</h2>
    <?php 
    /
    $args = array(
        'post_type' => 'projects',
        'posts_per_page' => 6,
    );
    $projects = new WP_Query($args);
    if ($projects->have_posts()) : 
        while ($projects->have_posts()) : $projects->the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('project'); ?>>
                <h3><?php the_title(); ?></h3>
                <?php the_post_thumbnail(); ?>
                <p><?php the_content(); ?></p>

                
                <?php
                wp_link_pages(array(
                    'before'      => '<div class="page-links">' . __('Pages:', 'malaz'),
                    'after'       => '</div>',
                    'link_before' => '<span>',
                    'link_after'  => '</span>',
                ));
                ?>
            </article>
        <?php endwhile; 
        wp_reset_postdata(); 
    else : 
        echo '<p>No projects found.</p>';
    endif;
    ?>
</div>

<div class="blog-feed">
    <h2>Latest Blog Posts</h2>
    <?php
    
    $blog_posts = new WP_Query(array(
        'posts_per_page' => 3,
    ));
    if ($blog_posts->have_posts()) :
        while ($blog_posts->have_posts()) : $blog_posts->the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('blog-post'); ?>>
                <h3><?php the_title(); ?></h3>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>">Read More</a>
            </article>
        <?php endwhile;
        wp_reset_postdata();
    else :
        echo '<p>No blog posts found.</p>';
    endif;
    ?>
</div>

<?php get_footer(); ?>
