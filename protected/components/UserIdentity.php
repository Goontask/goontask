<?php

class GUserIdentity extends CBaseUserIdentity
{
	/**
	 * @var string username
	 */
	public $email;
	/**
	 * @var string password
	 */
	public $password;

	/**
	 * Constructor.
	 * @param string $username username
	 * @param string $password password
	 */
	public function __construct($email,$password)
	{
		$this->email=$email;
		$this->password=$password;
	}

	/**
	 * Authenticates a user based on {@link username} and {@link password}.
	 * Derived classes should override this method, or an exception will be thrown.
	 * This method is required by {@link IUserIdentity}.
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		throw new CException(Yii::t('yii','{class}::authenticate() must be implemented.',array('{class}'=>get_class($this))));
	}

	/**
	 * Returns the unique identifier for the identity.
	 * The default implementation simply returns {@link username}.
	 * This method is required by {@link IUserIdentity}.
	 * @return string the unique identifier for the identity.
	 */
	public function getId()
	{
		return $this->email;
	}

	/**
	 * Returns the display name for the identity.
	 * The default implementation simply returns {@link username}.
	 * This method is required by {@link IUserIdentity}.
	 * @return string the display name for the identity.
	 */
	public function getName()
	{
		return $this->email;
	}
}




/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends GUserIdentity
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
		$user = Users::model()->find(array(
		    'select'=>array('password', 'email', 'salt'),
		    'condition'=>'email=:login',
		    'params'=>array(':login'=>$this->email),
		));

        if($user){
            $salted_password = md5($this->password . $user->__get('salt'));


            //echo "<pre>"; print_r($salted_password); echo "</pre>";

            $users=array(
                $user->__get('email') => $user->__get('password')

            );
        }


		if(!isset($users[$this->email]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($users[$this->email]!==$salted_password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;
	}
}