<?php
use yii\helpers\Html;
//载入表单小部件
use yii\widgets\ActiveForm;

$form = ActiveForm::begin([
    'id' => 'login-form',
    'options' => ['class' => 'form-horizontal'],
     'action'=>'?r=rbac/rbacdo',
]) ?>

    <?= $form->field($model, 'role')->textInput() ?>
 
    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('添加', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
<?php ActiveForm::end() ?>