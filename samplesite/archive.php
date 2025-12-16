<?php get_header(); ?>

<div id="cont_first" class="container">

    <?php get_sidebar(); ?>

    <div class="">
        <?php if (function_exists('bcn_display')) {
            bcn_display();
        } ?>
    </div>
    <p></p>

    <div id="contents">
        <div id="cont_left">
            <!-- Blog（こちらは静的のまま？ そのまま残します） -->
            <div class="information">
                <h2>Blog</h2>
                <dl>
                    <?php
                    $blogPosts = get_posts('numberposts=4&category=3');
                    foreach ($blogPosts as $post):
                        setup_postdata($post);
                    ?>
                        <dt><?php the_time('Y-m-d'); ?></dt>
                        <dd>
                            <div class="b_img">
                                <?php the_post_thumbnail('thumbside'); ?>
                            </div>
                            <div class="b_right">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </div>
                        </dd>
                    <?php endforeach;
                    wp_reset_postdata(); ?>
                </dl>
            </div>

            <!-- INFORMATION（WordPress の投稿一覧） -->
            <div class="information">
                <h2>INFORMATION</h2>
                <dl>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                            <dt><?php the_time('Y-m-d'); ?></dt>
                            <dd>
                                <span class="tab tag_<?php
                                                        $cat = get_the_category();
                                                        $cat = $cat[0];
                                                        echo $cat->slug;
                                                        ?>">
                                    <?php
                                    echo $cat->cat_name;
                                    ?>
                                </span>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>を掲載しました。
                            </dd>
                    <?php endwhile;
                    endif; ?>
                </dl>
                <?php if (function_exists('wp_pagenavi')) : ?>
                    <?php wp_pagenavi(); ?>
                <?php endif; ?>
            </div>
        </div><!-- #cont_left -->
    </div><!-- #contents -->
</div><!-- #cont_first -->

<div id="pageTop">
    <a href="#">PAGE TOP</a>
</div>

<?php get_footer(); ?>
