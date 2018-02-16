<?php
namespace soless\tageditor;

use yii\web\AssetBundle;

class TageditorWidgetAsset extends AssetBundle 
{
    public $sourcePath = '@vendor/soless/yii2-jquery-tageditor-widget'; 
    public $css = [ 
	'assets/css/style.css',
    ];
    public $js = [
	'assets/js/init.js',
    ];
    public $depends = [
        'soless\tageditor\TageditorAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    
    public $publishOptions = [
        'except' => [ '*.php', '*.html', '*.md', '*.json' ]
    ];
}  