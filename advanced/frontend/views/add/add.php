<?php
use yii\helpers\Html;
//载入表单小部件
use yii\widgets\ActiveForm;


$form = ActiveForm::begin([
    'id' => 'login-form',
    'options' => ['class' => 'form-horizontal'],
    'action'  =>'?r=add/adddo'
    
]) ?>

    <h1>注册的页面</h1>
	<!-- 表单的框框 -->
    <?= $form->field($model, 'username')->textInput() ?>
    <?= $form->field($model, 'password')->passwordInput() ?>

    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('登录', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
<?php ActiveForm::end() ?>