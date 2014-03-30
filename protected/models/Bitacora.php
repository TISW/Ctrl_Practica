<?php

/**
 * This is the model class for table "bitacora".
 *
 * The followings are the available columns in table 'bitacora':
 * @property string $idBitacora
 * @property string $Info_Practica_Alumnos_idInfo_Practica_Alumnos
 * @property string $fecha_ingreso
 * @property string $titulo
 * @property string $contenido
 * @property string $estado
 *
 * The followings are the available model relations:
 * @property PracticaAlumnos $infoPracticaAlumnosIdInfoPracticaAlumnos
 */
class Bitacora extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'bitacora';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Info_Practica_Alumnos_idInfo_Practica_Alumnos, fecha_ingreso, titulo, contenido, estado', 'required'),
			array('Info_Practica_Alumnos_idInfo_Practica_Alumnos', 'length', 'max'=>10),
			array('fecha_ingreso, titulo, contenido, estado', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idBitacora, Info_Practica_Alumnos_idInfo_Practica_Alumnos, fecha_ingreso, titulo, contenido, estado', 'safe', 'on'=>'search'),
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
			'infoPracticaAlumnosIdInfoPracticaAlumnos' => array(self::BELONGS_TO, 'PracticaAlumnos', 'Info_Practica_Alumnos_idInfo_Practica_Alumnos'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idBitacora' => 'Id Bitacora',
			'Info_Practica_Alumnos_idInfo_Practica_Alumnos' => 'Info Practica Alumnos Id Info Practica Alumnos',
			'fecha_ingreso' => 'Fecha Ingreso',
			'titulo' => 'Titulo',
			'contenido' => 'Contenido',
			'estado' => 'Estado',
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

		$criteria->compare('idBitacora',$this->idBitacora,true);
		$criteria->compare('Info_Practica_Alumnos_idInfo_Practica_Alumnos',$this->Info_Practica_Alumnos_idInfo_Practica_Alumnos,true);
		$criteria->compare('fecha_ingreso',$this->fecha_ingreso,true);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('contenido',$this->contenido,true);
		$criteria->compare('estado',$this->estado,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Bitacora the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
