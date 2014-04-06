<?php
/* @var $this UsuarioController */

$this->breadcrumbs=array(
	'Usuario'=>array('/usuario'),
	'Login',
);
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
  <div class="form-group">
	 <label >Rut</label>
		<?php echo $form->textField($model,'username',array('class'=>"form-control",'maxlength'=>12,'placeholder'=>'ej.18108559-2','required'=>'')); ?>
		<?php echo $form->error($model,'username'); ?>
  </div>
  <div class="form-group">
	 <label >Contraseña</label>
		<?php echo $form->passwordField($model,'password',array('class'=>"form-control",'maxlength'=>32,'placeholder'=>'Password')); ?>
		<?php echo $form->error($model,'password'); ?>
 </div>
  <div class="form-group">
	 <label >Recuerdame</label>
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
  </div>
  <div class="form-group">
  	<button type="submit" class="btn btn-default">Ingresar</button>
  </div>

<?php $this->endWidget(); ?>

