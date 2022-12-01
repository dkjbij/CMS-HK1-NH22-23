<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar_top') ) : ?><?php endif; ?>
<div class="category-box">
    <h3>Danh mục sản phẩm</h3>
    <div class="content-cat">
        <ul>
            <?php
            $args = array(
                'type'      => 'product',
                'child_of'  => 0,
                'hide_empty' => 0,
                'taxonomy'  => 'product_cat'
            );
            $categories = get_categories($args);
            foreach ($categories as $category) { ?>
                <li><i class="fa fa-angle-right"></i><a href="<?php echo get_term_link($category->slug, 'product_cat'); ?>"><?php echo $category->name; ?></a></li>
            <?php } ?>
        </ul>
    </div>
</div>
<div class="widget">
    <h3>
        <i class="fa fa-bars"></i>
        Tin tức
    </h3>
    <div class="content-w">
        <ul>
            <?php $args = array('post_status' => 'publish', 'post_type' => 'post', 'posts_per_page' => 5, 'cat' => 1); ?>
            <?php $getposts = new WP_query($args); ?>
            <?php global $wp_query;
            $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

                <li>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('thumbnail'); ?>
                    </a>
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <div class="clear"></div>
                </li>
            <?php endwhile;
            wp_reset_postdata(); ?>

        </ul>
    </div>
</div>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar') ) : ?><?php endif; ?>
