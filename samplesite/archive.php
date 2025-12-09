<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" type="text/css" />
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
    <title>SAMPLE SITE</title>
</head>

<body>
    <?php get_header(); ?>
    <div id="cont_first" class="container">
        <div id="contents">
            <?php get_sidebar(); ?>
            <div id="cont_left">
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
                <div class="information">
                    <h2>INFORMATION</h2>
                    <dl>
                        <dt>2020-08-01</dt>
                        <dd>
                            <span class="tab tag_gyoumu">お知らせ</span>
                            <a href="sample.html">夏季休暇のお知らせを掲載しました</a>
                        </dd>
                        <dt>2020-07-29</dt>
                        <dd>
                            <span class="tab tag_release">プレスリリース</span>
                            <a href="sample.html">新サービスのお知らせを掲載しました</a>
                        </dd>
                        <dt>2020-07-23</dt>
                        <dd>
                            <span class="tab tag_gyoumu">お知らせ</span>
                            <a href="sample.html">雑誌掲載情報を掲載しました</a>
                        </dd>
                        <dt>2020-07-20</dt>
                        <dd>
                            <span class="tab tag_gyoumu">お知らせ</span>
                            <a href="sample.html">雑誌掲載情報を掲載しました</a>
                        </dd>
                        <dt>2020-07-17</dt>
                        <dd>
                            <span class="tab tag_release">プレスリリース</span>
                            <a href="sample.html">新サービスのお知らせを掲載しました</a>
                        </dd>
                    </dl>
                </div>
            </div>

        </div>
    </div>

    <div id="pageTop">
        <a href="#">PAGE TOP</a>
    </div>
    <?php get_footer(); ?>
</body>

</html>
