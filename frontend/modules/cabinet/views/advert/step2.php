<?php
$this->title = 'Изображения';
$this->params['breadcrumbs'][] = ['label' => 'Продукция', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idadvert, 'url' => ['view', 'id' => $model->idadvert]];
$this->params['breadcrumbs'][] = ['label' => 'Обновление', 'url' => ['update']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
<?php $form = \yii\bootstrap\ActiveForm::begin(); ?>
<div class="row">
<?php
	echo $form->field($model, 'general_image')->widget(\kartik\file\FileInput::classname(),[
        'options' => [
            'accept' => 'image/*',
        ],
        'pluginOptions' => [
            'uploadUrl' => \yii\helpers\Url::to(['file-upload-general']),
            'uploadExtraData' => [
                'advert_id' => $model->idadvert,
            ],
            'allowedFileExtensions' =>  ['jpg', 'png','gif'],
            'initialPreview' => $image,
            'showUpload' => true,
            'showRemove' => false,
            'dropZoneEnabled' => false
        ]
    ]);
?>
</div>
<div class="row">
    <?php
        echo \yii\helpers\Html::label('Images');
        echo \kartik\file\FileInput::widget([
            'name' => 'images',
            'options' => [
                'accept' => 'image/*',
                'multiple'=>true
            ],
            'pluginOptions' => [
                'uploadUrl' => \yii\helpers\Url::to(['file-upload-images']),
                'uploadExtraData' => [
                    'advert_id' => $model->idadvert,
                ],
                'overwriteInitial' => false,
                'allowedFileExtensions' =>  ['jpg', 'png','gif'],
                'initialPreview' => $images_add,
                'showUpload' => true,
                'showRemove' => false,
                'dropZoneEnabled' => false
            ]
        ]);
        ?>
</div>
<div class="form-group">
    <?= \yii\helpers\Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
</div>
<?php \yii\bootstrap\ActiveForm::end(); ?>

</div>