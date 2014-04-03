<div class="container">
	<div class="row">

		<div class="col-xs-12 col-sm-8 col-md-9">
			<img src="<?php echo Yii::app()->baseUrl.'/images/Escudo.jpg'?>" width="244" height="58" border="0">
			<h1>Noticias</h1>
			<br>

			Buenos dias Mundo lalalall(8)
		</div>
		<div class="col-xs-12 col-sm-4 col-md-3 form-login">
	<!-- 			<form role="form">
			  <div class="form-group">
			    <label >Rut</label>
			    <input type="text" class="form-control" placeholder="ej. 18108559-2">
			  </div>
			  <div class="form-group">
			    <label >Contraseña</label>
			    <input type="password" class="form-control" placeholder="Password">
			  </div>
			  <button type="submit" class="btn btn-default">Submit</button>
			</form>-->
<div class="form">
<?php var_dump($_POST) ?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',

	'enableAjaxValidation'=>false,
)); ?>

	
	<?php echo $form->errorSummary($model); ?>
			  <div class="form-group">
	 <label >Rut</label>
	<?php echo $form->textField($model,'Persona_rut',array('class'=>"form-control",'maxlength'=>12,'placeholder'=>'ej.18108559-2','required'=>'')); ?>
	<?php echo $form->error($model,'Persona_rut'); ?>
			  </div>
			  <div class="form-group">
	 <label >Contraseña</label>
	<?php echo $form->passwordField($model,'password',array('class'=>"form-control",'maxlength'=>32,'placeholder'=>'Password')); ?>
	<?php echo $form->error($model,'password'); ?>
			  </div>


		<?php echo CHtml::submitButton('Ingresar'); ?>


<?php $this->endWidget(); ?>

</div><!-- form -->
		</div>
	</div>
</div>