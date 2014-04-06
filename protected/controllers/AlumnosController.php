<?php

class AlumnosController extends Controller
{
	public function actionBuscarAlumno()
	{
		$this->render('buscarAlumno');
	}

	public function actionEditarAlumno()
	{
		$this->render('editarAlumno');
	}

	public function actionIngresarAlumno()
	{
		$this->render('ingresarAlumno');
	}

	public function actionIngresarBitacora()
	{
		$this->render('ingresarBitacora');
	}

	public function actionMostrarBitacora()
	{
		$this->render('mostrarBitacora');
	}

	public function actionMostrarBitacoras()
	{
		$this->render('mostrarBitacoras');
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