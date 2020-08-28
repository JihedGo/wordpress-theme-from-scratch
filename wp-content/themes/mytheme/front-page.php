<?php
get_header('secondary'); ?>
<div class="container">
    <h2><?php the_title(); ?></h2>
    <?php get_template_part('includes/section', 'content'); ?>
</div>
<?php
get_footer(); ?>