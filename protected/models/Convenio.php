<?php

/**
 * This is the model class for table "convenio".
 *
 * The followings are the available columns in table 'convenio':
 * @property string $idConvenio
 * @property string $estado_convenio
 * @property string $fecha_ingreso
 * @property string $fecha_comienzo
 * @property string $fecha_termino
 * @property string $descripcion
 *
 * The followings are the available model relations:
 * @property Empresas[] $empresases
 */
class Convenio extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'convenio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('estado_convenio, fecha_ingreso, fecha_comienzo, fecha_termino, descripcion', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idConvenio, estado_convenio, fecha_ingreso, fecha_comienzo, fecha_termino, descripcion', 'safe', 'on'=>'search'),
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
			'empresases' => array(self::HAS_MANY, 'Empresas', 'Convenio_idConvenio'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idConvenio' => 'Id Convenio',
			'estado_convenio' => 'Estado Convenio',
			'fecha_ingreso' => 'Fecha Ingreso',
			'fecha_comienzo' => 'Fecha Comienzo',
			'fecha_termino' => 'Fecha Termino',
			'descripcion' => 'Descripcion',
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

		$criteria->compare('idConvenio',$this->idConvenio,true);
		$criteria->compare('estado_convenio',$this->estado_convenio,true);
		$criteria->compare('fecha_ingreso',$this->fecha_ingreso,true);
		$criteria->compare('fecha_comienzo',$this->fecha_comienzo,true);
		$criteria->compare('fecha_termino',$this->fecha_termino,true);
		$criteria->compare('descripcion',$this->descripcion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Convenio the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
