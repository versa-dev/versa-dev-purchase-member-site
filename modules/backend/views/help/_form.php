<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin([
            'id' => 'category-form',
            'options' => ['class' => 'form-vertical'],
        ])
?>
<h1>Add Category</h1>
<?= $form->field($model, 'cat_name'); ?>
<?= $form->field($model, 'alias'); ?>

<div class="form-group field-productcategory-parent_id required">
<label for="productcategory-parent_id" class="control-label">Parent ID</label>
<?php echo (new \app\components\CategoryTree)->drawDropDownTree(0,'ProductCategory[parent_id]','ProductCategory_parent_id',[$model->id],$model->parent_id); ?>
<div class="help-block"></div>
</div>

<?= $form->field($model, 'description')->textarea(['class' => 'form-control']); ?>
<?= $form->field($model, 'published')->dropDownList(['Yes' => 'Yes', 'No' => 'No']); ?>

<div class="form-group">
    <div class="">
        <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
  
    <?= Html::a('Cancel', ['/backend/category/manager'], ['class'=>'btn btn-danger']) ?>
    </div>
    
</div>
<?php ActiveForm::end() ?>
