<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property string $username
 * @property string $password
 * @property string $role
 * @property string $create
 * @property string $modified
 *
 * The followings are the available model relations:
 * @property Persona $username0
 */
class Users extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}
	public function validatePassword($password)
	{
	return $this->hashPassword($password)===$this->password;
	}
 
	public function hashPassword($password)
	{
		return md5($password);
	}

	public function rules()
	{
		return array(
			array('username, password, role', 'required'),
			array('username', 'length', 'max'=>12),
			array('password', 'length', 'max'=>32),
			array('role', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('username, password, role, create, modified', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{

		return array(
			'username0' => array(self::BELONGS_TO, 'Persona', 'username'),
		);
	}

	public function attributeLabels()
	{
		return array(
			'username' => 'Username',
			'password' => 'Password',
			'role' 	=> 'Role',
			'create' => 'Create',
			'modified' => 'Modified',
			);
	}

	public function search()
	{

		$criteria=new CDbCriteria;

		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('role',$this->role,true);
		$criteria->compare('create',$this->create,true);
		$criteria->compare('modified',$this->modified,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
