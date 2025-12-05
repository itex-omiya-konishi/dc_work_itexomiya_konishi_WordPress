<?php
// テーマの機能を登録
function mytheme_setup()
{

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
