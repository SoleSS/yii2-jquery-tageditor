<?php
namespace soless\tageditor;

use yii\web\AssetBundle;

class TageditorWidgetAsset extends AssetBundle 
{
    public $sourcePath = '@vendor/soless/yii2-jquery-tageditor-widget'; 
    public $css = [ 

    ];
    public $js = [
	'assets/js/init.js',
    ];
    public $publishOptions = [

    ];
    public $depends = [
        'soless\tageditor\TageditorAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}  