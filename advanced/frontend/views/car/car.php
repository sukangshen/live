<?php
use yii\helpers\Html;
//载入表单小部件
use yii\widgets\ActiveForm;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<table>
  <h1>进入停车场</h1>
   <?php foreach ($res as $key => $value) {?>

     
        
        <tr><td>每小时10元;</td></tr>
        <tr><td>还有车位要停车点击此处：<span class="btn" item="<?php echo $value['id'];?>"><?php echo $value['like'];?></span></td>
        </tr>
        <tr><td><button>走人</button></td></tr>
    <?php }?>
</table>
    
   
</body>
</html>
  
<script src="jquery-1.8.3.min.js"></script>

<script>
$(document).on('click','.btn',function(){

    var id = $(this).attr('item');
    //alert(id);
    var val= $(this).html();
    //alert(val)]
    var s = $(this);
    var e = parseInt(val)-1;
    //alert(e);
    $.ajax({
        type: "POST",
        url: "?r=car/cardo",
        data: {id:id,e:e},
        dataType:"json",
        success: function(msg){
            
            //将span里面的值替换成加一的那个值
            alert("停车成功，还剩下：e 个车位");
       
        }
});
})


</script>