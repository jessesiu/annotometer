<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$user_model = User::model()->find('username=:name', array(':name'=>$this->username));
		if($user_model === null){
                    
                    $this->errorCode = self::ERROR_USERNAME_INVALID;
                    return FALSE;
                    
                } else if ($user_model->password !== $this -> password){
                    $this->errorCode = self::ERROR_PASSWORD_INVALID;
                    
                } else {
                    
                    $this->errorCode = self::ERROR_NONE;
                    return true;
                }
                
                
                
                
	}
        public function getUser()
    {
        return $this->user;
    }
 
    public function setUser(CActiveRecord $user)
    {
        $this->user=$user->attributes;
    }
}