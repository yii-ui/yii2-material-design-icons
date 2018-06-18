<?php
namespace yiiui\yii2materialdesignicons;

use yii\web\AssetBundle;

class MaterialDesignIconsAsset extends AssetBundle
{
    public $sourcePath = '@bower/mdi';

    public $css = [
        'css/materialdesignicons.min.css'
    ];
}
