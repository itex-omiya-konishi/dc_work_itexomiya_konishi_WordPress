<?php get_header(); ?>

<div id="cont_first" class="container">
    <div id="contents">

        <?php get_sidebar(); ?>

        <div id="cont_left">

            <!-- Blog（こちらは静的のまま？ そのまま残します） -->
            <div class="information">
                <h2>Blog</h2>
                <dl>
                    <dt>2020-08-04</dt>
                    <dd>
                        <div class="b_img"><img src="images/sample.jpg"></div>
                        <div class="b_right"><a href="sample.html">社長通信</a></div>
                    </dd>
                    <dt>2020-08-02</dt>
                    <dd>
                        <div class="b_img"><img src="images/sample.jpg"></div>
                        <div class="b_right"><a href="sample.html">社員紹介</a></div>
                    </dd>
                    <dt>2020-08-01</dt>
                    <dd>
                        <div class="b_img"><img src="images/sample.jpg"></div>
                        <div class="b_right"><a href="sample.html">セミナー開催報告</a></div>
                    </dd>
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
            </div>

        </div><!-- #cont_left -->
    </div><!-- #contents -->
</div><!-- #cont_first -->

<div id="pageTop">
    <a href="#">PAGE TOP</a>
</div>

<?php get_footer(); ?>
