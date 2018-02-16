<?php
use yii\helpers\Html;
soless\tageditor\TageditorAsset::register($this);

$this->registerJs(
    "$('#{$id}').tagEditor({$tagEditorOptions});",
    View::POS_READY
);
?>

    <div class="form-group tageditor-wrap">
	<?php echo Html::activeTextInput($model, $attribute, [ ]) ?>
    </div>