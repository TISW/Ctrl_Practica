<?php

/**
 * This is the model class for table "alumnos".
 *
 * The followings are the available columns in table 'alumnos':
 * @property string $Persona_rut
 *
 * The followings are the available model relations:
 * @property Persona $personaRut
 * @property PracticaAlumnos[] $practicaAlumnoses
 */
class Alumnos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'alumnos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Persona_rut', 'required'),
			array('Persona_rut', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Persona_rut', 'safe', 'on'=>'search'),
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
			'personaRut' => array(self::BELONGS_TO, 'Persona', 'Persona_rut'),
			'practicaAlumnoses' => array(self::HAS_MANY, 'PracticaAlumnos', 'Alumnos_PersonaRut'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Persona_rut' => 'Persona Rut',
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

		$criteria->compare('Persona_rut',$this->Persona_rut,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Alumnos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
