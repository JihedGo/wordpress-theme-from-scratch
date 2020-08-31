<?php
if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php echo get_the_date('d/m/Y h:i:s'); ?>
                <?php the_content(); ?>
                <?php
                $fname = get_the_author_meta('first_name');
                $lname = get_the_author_meta('last_name');
                echo 'Posted by ' . $fname . ' ' . $lname;
                ?>
                <?php
                $tags = get_the_tags();
                // var_dump($tags);
                foreach ($tags as $tag) {
                        echo "<a class='badge badge-success' href=" . get_tag_link($tag->term_id) . "> " . $tag->name . " </a>&nbsp;";
                }
                ?>
                <?php
                $categories = get_the_category();
                foreach ($categories as $cat) : ?>
                        <a href="<?php echo get_category_link($cat->term_id) ?>">
                                <?php echo $cat->name ?>
                        </a>
                <?php endforeach; ?>
                <?php //comments_template() 
                ?>
<?php endwhile;
else : endif; ?>