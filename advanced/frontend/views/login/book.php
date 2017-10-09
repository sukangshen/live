
<!--        <tr>-->
<!--            <td>介绍：</td>-->
<!--            <td>-->
<!---->

<!--                <div>-->
<!--                    <h1>百度编辑器</h1>-->
<!--                    <script id="editor" type="text/plain" style="width:1024px;height:250px;"></script>-->
<!--                </div>-->

<!---->
<!--        <tr>-->
<!--            <td colspan="2" align="center">-->
<!--                <input type="submit" value="提交"/>-->
<!--            </td>-->
<!--        </tr>-->
<!--            </td>-->
<!--        </tr>-->
<!--     </table>-->
<!---->
<!--    </form>-->
<!--</center>-->

<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin([
    'id' => 'login-form',
    'options' => ['class' => 'form-horizontal'],
    'action'=>'?r=login/add'
]) ?>
                <script type="text/javascript" charset="utf-8" src="./public/ueditor.config.js"></script>
                <script type="text/javascript" charset="utf-8" src="./public/ueditor.all.min.js"> </script>
                <script type="text/javascript" charset="utf-8" src="./public/lang/zh-cn/zh-cn.js"></script>
<?= $form->field($model, 'book_name')?>
<?= $form->field($model, 'book_write')?>
<?= $form->field($model, 'book_price')?>
<?= $form->field($model, 'book_desc')->textarea(['rows'=>6,'id'=>'editor','class'=>'col-sm-1 col-md-12']
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