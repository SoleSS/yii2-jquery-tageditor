# yii2-jquery-tageditor

Widget for tags adding. Based on https://goodies.pixabay.com/jquery/tag-editor/demo.html

Installation
The preferred way to install this extension is through composer.

```
composer require --prefer-dist soless/yii2-jquery-tageditor-widget "*"
```

usage:
```php
  <?php echo $form->field($model, 'selectedCategories')->widget('soless\tageditor\TagEditorWidget', [
	'availableTags' => ['firstTag', 'secondTag', 'thirdTag', ],
        'tagEditorOptions' => [
            'forceLowercase' => false,
            'autocomplete' => [
                'source' => Url::toRoute(['/sex/suggest'])
            ],
        ]
    ]) ?>
 ```
