
<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models;

$form = ActiveForm::begin([
    'id' => 'login-form',
    'options' => ['class' => 'form-horizontal'],
    'action'=>'?r=book/adddo'
]) ?>
                <script type="text/javascript" charset="utf-8" src="./public/ueditor.config.js"></script>
                <script type="text/javascript" charset="utf-8" src="./public/ueditor.all.min.js"> </script>
                <script type="text/javascript" charset="utf-8" src="./public/lang/zh-cn/zh-cn.js"></script>
<?= $form->field($models, 'book_name')?>

<?= $form->field($model, 'hobby')->checkboxList($hobby) ?>

<?= $form->field($models, 'book_desc')->textarea(['rows'=>6,'id'=>'editor','class'=>'col-sm-1 col-md-12']
)?>
<div class="form-group">
    <div class="col-lg-offset-1 col-lg-11">
        <?= Html::submitButton('保存', ['class' => 'btn btn-primary']) ?>
    </div>
</div>
<?php ActiveForm::end() ?>
                <script type="text/javascript">
                    //实例化编辑器
                    var ue = UE.getEditor('editor');
                </script>