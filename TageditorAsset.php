<?php
namespace soless\tageditor;

use yii\web\AssetBundle;

class TageditorAsset extends AssetBundle 
{
    public $sourcePath = '@bower/jquery-tag-editor'; 
    public $css = [ 
        'jquery.tag-editor.css',
    ];
    public $js = [
	'jquery.caret.min.js',
    ];
    public $publishOptions = [

    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
    
    public function init() {
	parent::init();
	
	$this->js[] = YII_DEBUG ? 'jquery.tag-editor.js' : 'jquery.tag-editor.min.js';
    }
}  