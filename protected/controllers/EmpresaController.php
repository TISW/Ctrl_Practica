<?php

class EmpresaController extends Controller
{
	public $layout='//layouts/practicasLayout'; //página donde se redirige el content.
	public $action='admin';

	public function filters()
	{
		return array(
			'accessControl', 
			'postOnly + delete', 
		);
	}

	public function actionBuscar()
	{
		$this->render('buscar');
	}

	public function actionConvenio()
	{
		$this->render('convenio');
	}

	public function actionEditar()
	{
		$this->render('editar');
	}

	public function actionIngresar()
	{
		$this->render('ingresar');
	}

	public function actionMostrar()
	{
		$this->render('mostrar');
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}