<?php
use yii\helpers\Html;
//载入表单小部件
use yii\widgets\ActiveForm;

$form = ActiveForm::begin([
    'id' => 'login-form',
    'options' => ['class' => 'form-horizontal'],
]) ?>
	<!-- 表单的框框 -->
    <?= $form->field($model, 'username')->textInput() ?>
    <?= $form->field($model, 'password')->passwordInput() ?>
    <?= $form->field($model, 'email')->textinput() ?>
    <?= $form->field($model, 'age')->dropdownlist($str) ?>
    <?= $form->field($model, 'sex')->radioList(['0'=>'男','1'=>'女']) ?>
    <?= $form->field($model, 'hobby')->checkboxList($hobby) ?>

    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('登录', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
<?php ActiveForm::end() ?>