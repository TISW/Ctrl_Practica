<?php

/**
 * This is the model class for table "empresas".
 *
 * The followings are the available columns in table 'empresas':
 * @property string $idEmpresas
 * @property string $Convenio_idConvenio
 * @property string $nombre_empresa
 * @property string $rut
 * @property string $direccion
 * @property string $contacto
 * @property string $correo
 * @property string $telefono
 * @property string $fecha_ingreso
 *
 * The followings are the available model relations:
 * @property Convenio $convenioIdConvenio
 * @property PracticaAlumnos[] $practicaAlumnoses
 */
class Empresas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'empresas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Convenio_idConvenio', 'required'),
			array('Convenio_idConvenio', 'length', 'max'=>10),
			array('nombre_empresa, rut, direccion, contacto, correo, telefono, fecha_ingreso', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idEmpresas, Convenio_idConvenio, nombre_empresa, rut, direccion, contacto, correo, telefono, fecha_ingreso', 'safe', 'on'=>'search'),
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
			'convenioIdConvenio' => array(self::BELONGS_TO, 'Convenio', 'Convenio_idConvenio'),
			'practicaAlumnoses' => array(self::HAS_MANY, 'PracticaAlumnos', 'Empresas_idEmpresas'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idEmpresas' => 'Id Empresas',
			'Convenio_idConvenio' => 'Convenio Id Convenio',
			'nombre_empresa' => 'Nombre Empresa',
			'rut' => 'Rut',
			'direccion' => 'Direccion',
			'contacto' => 'Contacto',
			'correo' => 'Correo',
			'telefono' => 'Telefono',
			'fecha_ingreso' => 'Fecha Ingreso',
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

		$criteria->compare('idEmpresas',$this->idEmpresas,true);
		$criteria->compare('Convenio_idConvenio',$this->Convenio_idConvenio,true);
		$criteria->compare('nombre_empresa',$this->nombre_empresa,true);
		$criteria->compare('rut',$this->rut,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('contacto',$this->contacto,true);
		$criteria->compare('correo',$this->correo,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('fecha_ingreso',$this->fecha_ingreso,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Empresas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
