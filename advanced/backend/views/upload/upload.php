<?php
use yii\helpers\Html;
//载入表单小部件
use yii\widgets\ActiveForm;

$form = ActiveForm::begin([
    'id' => 'login-form',
    'options' => ['class' => 'form-horizontal','enctype' => 'multipart/form-data'],
    'action' =>'?r=upload/getlv',

]) ?>
	<!-- 表单的框框 -->
    <?= $form->field($models, 'scenic_name')->textInput() ?>
    <?= $form->field($models, 'open_time')->textInput() ?>
    <?= $form->field($models, 'scenic_tel')->textInput() ?>
    <?= $form->field($models, 'scenic_price')->textInput() ?>
    <?= $form->field($models, 'scenic_message')->textInput() ?>
    <?= $form->field($model, 'file[]')->fileInput(['multiple' => true, 'accept' => '*']) ?>
    <div class="form-group">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('提交', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
<?php ActiveForm::end() ?>