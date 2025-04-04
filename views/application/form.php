<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model app\models\ActiveRecord */

$this->title = 'Create Application';
?>
<h1><?= Html::encode($this->title) ?></h1>

<p>Please fill out the following fields to create a new application:</p>

<?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'first_name') ?>
    <?= $form->field($model, 'last_name') ?>
    <?= $form->field($model, 'date_of_birth') ?>
    <?= $form->field($model, 'description') ?>
    <?= $form->field($model, 'income') ?>
    <?= $form->field($model, 'number_of_dependents') ?>
    <?= Html::submitButton('Create') ?>
<?php ActiveForm::end(); ?>