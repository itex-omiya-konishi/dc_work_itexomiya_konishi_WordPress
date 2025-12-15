<?php
// テーマの機能を登録
function mytheme_setup()
{
    // サムネイル画像
    add_theme_support('post-thumbnails');
    add_image_size('thumbside', 85, 85, true);
    // カスタムメニューの登録
    register_nav_menus(
        array(
            'place_global'  => 'グローバル',
            'place_utility' => 'ユーティリティ',
            'place_sidebar' => 'サイドメニュー',
            'place_footer'  => 'フッター',
        )
    );
}
add_action('after_setup_theme', 'mytheme_setup');
