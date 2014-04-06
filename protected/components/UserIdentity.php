<?php
class UserIdentity extends CUserIdentity {
private $_id;
public function authenticate()
{
    $user=Users::model()->findByAttributes(array('username'=>$this->username));
    if($user===null)
        $this->errorCode=self::ERROR_USERNAME_INVALID;
    else if(!$user->validatePassword($this->password))
        $this->errorCode=self::ERROR_PASSWORD_INVALID;
    else
    {

        $this->_id=$user->username;
        $this->username=$user->role;
        $this->setState('role', $user->role);
        $persona=Persona::model()->findByPk($user->username);
        $this->setState('nombre',$persona->nombre);
        $this->errorCode=self::ERROR_NONE;
    }
    return $this->errorCode==self::ERROR_NONE;
}
 
public function getId()
{
    return $this->_id;
}
 
}