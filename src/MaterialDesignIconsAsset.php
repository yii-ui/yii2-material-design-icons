<?php

namespace yiiui\yii2materialdesignicons;

use yii\web\AssetBundle;

/**
 * Class MaterialDesignIconsAsset
 * @package yiiui\yii2materialdesignicons
 */
class MaterialDesignIconsAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@npm/mdi--font';

    /**
     * @var array
     */
    public $css = [
        'css/materialdesignicons.min.css'
    ];
}
