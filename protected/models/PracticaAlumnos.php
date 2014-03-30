<?php

/**
 * This is the model class for table "practica_alumnos".
 *
 * The followings are the available columns in table 'practica_alumnos':
 * @property string $idPractica_Alumnos
 * @property string $Alumnos_PersonaRut
 * @property string $Profesor_PersonaRut
 * @property string $Empresas_idEmpresas
 * @property integer $tipo_practica
 * @property string $estado_informe
 * @property string $estado_evaluacionEmpresa
 * @property string $estado_aprobacion
 * @property string $evaluacion_empresa
 * @property string $informacion_practica
 * @property string $descripcion_practica
 * @property string $fecha_ingreso
 * @property string $estado_practica
 *
 * The followings are the available model relations:
 * @property Bitacora[] $bitacoras
 * @property Empresas $empresasIdEmpresas
 * @property Alumnos $alumnosPersonaRut
 * @property Profesor $profesorPersonaRut
 */
class PracticaAlumnos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'practica_alumnos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Alumnos_PersonaRut, Profesor_PersonaRut, Empresas_idEmpresas, tipo_practica, fecha_ingreso', 'required'),
			array('tipo_practica', 'numerical', 'integerOnly'=>true),
			array('Alumnos_PersonaRut, Profesor_PersonaRut', 'length', 'max'=>12),
			array('Empresas_idEmpresas', 'length', 'max'=>10),
			array('estado_informe, estado_evaluacionEmpresa, estado_aprobacion, evaluacion_empresa, informacion_practica, descripcion_practica, estado_practica', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idPractica_Alumnos, Alumnos_PersonaRut, Profesor_PersonaRut, Empresas_idEmpresas, tipo_practica, estado_informe, estado_evaluacionEmpresa, estado_aprobacion, evaluacion_empresa, informacion_practica, descripcion_practica, fecha_ingreso, estado_practica', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'bitacoras' => array(self::HAS_MANY, 'Bitacora', 'Info_Practica_Alumnos_idInfo_Practica_Alumnos'),
			'empresasIdEmpresas' => array(self::BELONGS_TO, 'Empresas', 'Empresas_idEmpresas'),
			'alumnosPersonaRut' => array(self::BELONGS_TO, 'Alumnos', 'Alumnos_PersonaRut'),
			'profesorPersonaRut' => array(self::BELONGS_TO, 'Profesor', 'Profesor_PersonaRut'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idPractica_Alumnos' => 'Id Practica Alumnos',
			'Alumnos_PersonaRut' => 'Alumnos Persona Rut',
			'Profesor_PersonaRut' => 'Profesor Persona Rut',
			'Empresas_idEmpresas' => 'Empresas Id Empresas',
			'tipo_practica' => 'Tipo Practica',
			'estado_informe' => 'Estado Informe',
			'estado_evaluacionEmpresa' => 'Estado Evaluacion Empresa',
			'estado_aprobacion' => 'Estado Aprobacion',
			'evaluacion_empresa' => 'Evaluacion Empresa',
			'informacion_practica' => 'Informacion Practica',
			'descripcion_practica' => 'Descripcion Practica',
			'fecha_ingreso' => 'Fecha Ingreso',
			'estado_practica' => 'Estado Practica',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idPractica_Alumnos',$this->idPractica_Alumnos,true);
		$criteria->compare('Alumnos_PersonaRut',$this->Alumnos_PersonaRut,true);
		$criteria->compare('Profesor_PersonaRut',$this->Profesor_PersonaRut,true);
		$criteria->compare('Empresas_idEmpresas',$this->Empresas_idEmpresas,true);
		$criteria->compare('tipo_practica',$this->tipo_practica);
		$criteria->compare('estado_informe',$this->estado_informe,true);
		$criteria->compare('estado_evaluacionEmpresa',$this->estado_evaluacionEmpresa,true);
		$criteria->compare('estado_aprobacion',$this->estado_aprobacion,true);
		$criteria->compare('evaluacion_empresa',$this->evaluacion_empresa,true);
		$criteria->compare('informacion_practica',$this->informacion_practica,true);
		$criteria->compare('descripcion_practica',$this->descripcion_practica,true);
		$criteria->compare('fecha_ingreso',$this->fecha_ingreso,true);
		$criteria->compare('estado_practica',$this->estado_practica,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PracticaAlumnos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
