<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model gaxz\crontab\models\CronTask */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cron-task-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'schedule')->textInput(['maxlength' => true, 'placeholder' => 'Crontab schedule expression'])->label(false) ?>

    <div style="margin-bottom: 35px">
        <?= $form->field($model, 'route')->dropDownList($routesList, ['prompt' => 'Select route' ])->label(false) ?>
    </div>
    
    <?= $form->field($model, 'params')->textarea(['rows' => '3', 'placeholder' => 'Must be a valid json string or empty'])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
