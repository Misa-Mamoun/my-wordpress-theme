<?php

get_header();
?>

<main>
    <section class="contact-section">
        <h1>Contact Us</h1>
        <p>I love to hear from you! Fill out the form below and I'll get back to you as soon as possible.</p>
        

        <div class="contact-form">
            <?php echo do_shortcode('[contact-form-7 id="3e7d5c0" title="Contact form 1"]'); ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
