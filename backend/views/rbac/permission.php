<?php
/**
 * Created by PhpStorm.
 * User: zhu-y
 * Date: 2017/9/15
 * Time: 13:13
 */
$form = \yii\bootstrap\ActiveForm::begin();
echo $form->field($model,'name')->textInput();
echo $form->field($model,'description')->textInput();
echo \yii\bootstrap\Html::submitButton('提交',['class'=>'btn btn-info']);
\yii\bootstrap\ActiveForm::end();