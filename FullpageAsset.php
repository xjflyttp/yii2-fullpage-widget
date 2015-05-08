<?php

namespace xj\js\fullpage;

use yii\web\AssetBundle;

class FullpageAsset extends AssetBundle {

    public $sourcePath = '@bower/fullpage.js';
    public $basePath = '@webroot/assets';
    public $css = ['jquery.fullPage.css'];
    public $js = ['jquery.fullPage.js'];
    public $depends = [
        'yii\web\JqueryAsset',
        'xj\js\easing\EasingAsset',
        'xj\js\slimscroll\SlimscrollAsset',
    ];

}
