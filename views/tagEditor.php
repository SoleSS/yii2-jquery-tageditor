<?php
use yii\helpers\Html;
soless\tageditor\TageditorWidgetAsset::register($this);

$this->registerJs(
    "$('#{$id}').tagEditor({$tagEditorOptions});",
    \yii\web\View::POS_READY
);
?>

    <div class="form-group tageditor-wrap">
	<?php echo Html::activeTextInput($model, $attribute, ['id' => $id, ]) ?>
	
	<?php if (!empty($availableTags)) : ?>
	  <div class="available-tags-wrap">
	    <?php foreach ($availableTags as $tag) : ?>
	      <a href="/nojs.html" class="btn btn-sm btn-info"><?= $tag ?></a>
	    <?php endforeach; ?>
	  </div>
	<?php endif; ?>
    </div>