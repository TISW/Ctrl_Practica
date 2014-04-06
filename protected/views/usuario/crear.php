<?php
/* @var $this UsuarioController */

$this->breadcrumbs=array(
	'Usuario'=>array('/usuario'),
	'Crear',
);
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
	<?php var_dump($personas) ?>
	<?php echo $form->errorSummary($user); ?>



	<div class="form-group">
		<div class="input-group">
			<span class="input-group-addon">Usuario</span>
			<select name="Users[username]" id="Users_username" class="form-control" >
				<?php foreach ($personas as $persona):?>
					<option <?php if ($user->username==$persona->username) echo "selected"; ?> value="<?php echo $persona->username;?>" ><?php echo $persona->username.' '.$persona->nombre; ?></option>
				<?php endforeach; ?>
			</select>
		</div> 
	</div>  
	<div class="form-group">
		<?php echo $form->passwordField($user,'password',array('maxlength'=>32,'class'=>"form-control",'placeholder'=>'password','required'=>'')); ?>
		<?php echo $form->error($user,'password'); ?>
	</div>
	<div class="form-group">
		<div class="input-group">
			<span class="input-group-addon">Tipo de Usuario</span>
			<select name="Users[role]" id="Users_role" class="form-control" >
				<option <?php if ($user->role=="alumno") echo "selected"; ?> value="alumno" >alumno</option>
				<option <?php if ($user->role=="profesor") echo "selected"; ?> value="profesor" >Profesor</option>
				<option <?php if ($user->role=="admin") echo "selected"; ?> value="admin" >administrador</option>
			</select>
		<?php echo $form->error($user,'role'); ?>
		</div> 
	</div>  
	<div class="form-group">
		<button type="submit" class="btn btn-default">Ingresar</button>
	</div>
<?php $this->endWidget(); ?>
