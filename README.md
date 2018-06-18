[![Yii UI](https://avatars1.githubusercontent.com/u/22790740?s=60)](https://www.yii-ui.com/) Yii2 Asset for Material Design Icons.
================================================

[![Latest Stable Version](https://poser.pugx.org/yii-ui/yii2-material-design-icons/version)](https://packagist.org/packages/yii-ui/yii2-material-design-icons)
[![Total Downloads](https://poser.pugx.org/yii-ui/yii2-material-design-icons/downloads)](https://packagist.org/packages/yii-ui/yii2-material-design-icons)
[![Maintainability](https://api.codeclimate.com/v1/badges/488f4a574c9d56fd3b30/maintainability)](https://codeclimate.com/github/yii-ui/yii2-material-design-icons/maintainability)
[![Yii2](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)](http://www.yiiframework.com/)
[![License](https://poser.pugx.org/yii-ui/yii2-material-design-icons/license)](https://packagist.org/packages/yii-ui/yii2-material-design-icons)


This is an [Yii framework 2.0](http://www.yiiframework.com) asset for the [Material Design Icons](https://materialdesignicons.com/).

Installation
------------

The preferred way to install this extension is through [composer](https://getcomposer.org/download/).

Either run
```
php composer.phar require yii-ui/yii2-material-design-icons
```
or add
```
"yii-ui/yii2-material-design-icons": "~1.0.0"
```
to the require section of your `composer.json` file.

Usage
-----

in your layout file (ex. views/layouts/main.php):
```php
\yiiui\yii2materialdesignicons\MaterialDesignIconsAsset::register($this);
```

or as dependency in your app asset bundle:
```php
namespace app\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $sourcePath = '@app/assets';

    public $js = [
        'js/main.js',
    ];

    public $css = [
        'css/main.scss',
    ];

    public $depends = [
        'yiiui\yii2materialdesignicons\MaterialDesignIconsAsset'
    ];
}
```

More [Examples](https://www.yii-ui.com/yii2-material-design-icons) will be added soon at https://www.yii-ui.com/yii2-material-design-icons.
For full list of icons see Material Design Icons [Documentation](https://materialdesignicons.com/).

Documentation
------------

[Documentation](https://www.yii-ui.com/yii2-material-design-icons) will be added soon at https://www.yii-ui.com/yii2-material-design-icons.

License
-------

**yii2-material-design-icons** is released under the MIT License. See the [LICENSE.md](LICENSE.md) for details.
