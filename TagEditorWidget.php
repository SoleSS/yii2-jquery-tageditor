<?php
namespace soless\tageditor;

use yii\base\Exception;
use yii\base\Model;
use yii\widgets\InputWidget;
use yii\helpers\Html;

class TagEditorWidget extends InputWidget {
    public $htmlOptions = [];
    public $tagEditorOptions = [];
    
    

    protected function hasModel() {
	return $this->model instanceof Model;
    }

    public function run() {
	if (!$this->hasModel()) {
	    throw new Exception('Ошибка: нет модели данных');
	}

	return $this->render('tagEditor', [
		  'model' => $this->model, 
		  'attribute' => $this->attribute, 
		  'htmlOptions' => $this->htmlOptions, 
		  'tagEditorOptions' => json_encode($this->tagEditorOptions), 
		  'id' => $this->getId(), 
	]);
    }
}