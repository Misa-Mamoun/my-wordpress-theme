<?php get_header(); ?>

<main>

    <section class="hero-section container">
        <h1>Welcome to Our Website</h1>
        <p>This the hero section</p>
        <p>We provide high-quality services</p>
    </section>
   

    
    
    <section class="services-section container">
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


    <section class="projects-section container">
        <h2>Recent Projects</h2>
        <div class="projects-grid">
            <?php 
            
            
            $args = array(
                'post_type' => 'projects',
                'posts_per_page' => 6 
            );
            $projects = new WP_Query($args);
            if ($projects->have_posts()) : 
                while ($projects->have_posts()) : $projects->the_post(); ?>
                    
                    <div class="project">
                        <a href="<?php the_permalink(); ?>"> 
                            <h3><?php the_title(); ?></h3>
                            
                            <!-- Display Featured Image -->
                            <?php if (has_post_thumbnail()) {
                                the_post_thumbnail('medium'); 
                            } ?>

                            
                            <p><?php the_excerpt(); ?></p>
                            
                            
                            <p><strong>Project Date:</strong> <?php the_field('project_date'); ?></p>
                            <p><strong>Project URL:</strong> <?php the_field('project_url'); ?></p>                    

                        </a>
                    </div>

                <?php endwhile; 
                wp_reset_postdata(); 
            else : ?>
                <p>No projects found</p>
            <?php endif; ?>
        </div>
    </section>

    <section class="blog-feed container">
        <h2>Latest Blog Posts</h2>
        <?php
        
        $blog_posts = new WP_Query('posts_per_page=3');
        if ($blog_posts->have_posts()) :
            while ($blog_posts->have_posts()) : $blog_posts->the_post(); ?>
                <div class="blog-post">
                    <a href="<?php the_permalink(); ?>"> 
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_excerpt(); ?></p>
                        <span>Read More</span>
                    </a>
                </div>
            <?php endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </section>
</main>

<?php get_footer(); ?>
