<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */
$this->title = 'Edit Profile';
$this->params['breadcrumbs'][] = $this->title;
$id=Yii::$app->getRequest()->getQueryParam('id');
if($id==1){
  $display="none";
}
else {
  $display="block";
}
?>
<div class="user-index admin-garph-block">
<h1><i class="fa fa-bars" aria-hidden="true"></i> <?php echo Html::encode($this->title) ?></h1>
<div class="profile-form clearfix category-zx-section">
  
 
  <?php $form = ActiveForm::begin(['id' => 'profile-form']); ?>
<?= $form->field($user, 'username')->hiddenInput()->label(false) ?>
 <div class="row">
          <div class="col-md-12 col-sm-12">
                <?= $form->field($model, 'company_name') ?>
           </div>     
           
        </div>
  <div class="row">
    <div class="col-md-6 col-sm-6">
      <?= $form->field($model, 'first_name')->textInput(['maxlength' => 200]) ?>
    </div>
    <div class="col-md-6 col-sm-6">
      <?= $form->field($model, 'last_name')->textInput(['maxlength' => 200]) ?>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 col-sm-6">
      <?= $form->field($user, 'username')->textInput(['maxlength' => 200,'readonly' => true]) ?>
    </div>
    <div class="col-md-6 col-sm-6">
      <?= $form->field($user, 'email')->textInput(['maxlength' => 200,'readonly' => true]) ?>
    </div>
  </div>

<div style="display:<?php echo $display;?>">

  <div class="row">
    <div class="col-md-6 col-sm-6">
      <?= $form->field($model, 'phone_no')->textInput(['maxlength' => 200]) ?>
    </div>
    <div class="col-md-6 col-sm-6">
      <?= $form->field($model, 'city')->textInput(['maxlength' => 200]) ?>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12 col-sm-12">
      <?= $form->field($model, 'address')->textarea(['rows' => 6]) ?>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 col-sm-6">
      <?= $form->field($model, 'state')->textInput(['maxlength' => 200]) ?>
    </div>
    <div class="col-md-6 col-sm-6">
      <?= $form->field($model, 'country_id')->dropDownList($countries_list,['prompt'=>'Select your country']) ?>
    </div>
  </div>

 </div> 

 <div class="row">
   <div class="col-md-12 col-sm-12">
    <?= Html::submitButton('Update', ['class' => 'btn yellow-btn-box']) ?>
    <?= Html::a('Cancel', ['index'], ['class' => 'btn red-btn-box']) ?>
   </div>
 </div>

 <?php ActiveForm::end(); ?>
      
    </div>
  </div>
