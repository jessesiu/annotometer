<?php

/**
 * This is the model class for table "{{user}}".
 *
 * The followings are the available columns in table '{{user}}':
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $firstname
 * @property string $lastname
 * @property string $institute
 * @property string $role
 * @property string $iclikname
 * @property string $hyponame
 * @property boolean $mjournal
 * @property boolean $mgigadb
 * @property boolean $mhypo
 * @property boolean $miclik
 * @property boolean $misb
 */
class User extends CActiveRecord
{
	public $password_repeat;
	public $passwordUnHashed;
	public $agree;
	public $password_new;
        /**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{user}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, email, firstname, lastname, password_repeat, agree', 'required'),
                        array('password', 'compare', 'compareAttribute'=>'password_repeat', 'on'=>'insert'),
                        array('password', 'checkPassword', 'on'=>'update'),
			array('username', 'checkUsername', 'on'=>'insert'),                        
           
                        array('email', 'email'),
                        array('email', 'unique'),
                        
           
                        array('agree','checkagree','on'=>'insert'),
                        array('username', 'unique'),
			array('username, password, email, firstname, lastname, institute, role, iclikname, hyponame', 'length', 'max'=>128),
			array('mjournal, mgigadb, mhypo, miclik, misb', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('username, password, email, firstname, lastname, institute, role, iclikname, hyponame, mjournal, mgigadb, mhypo, miclik, misb', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'username' => 'Username',
			'password' => 'Password',
			'email' => 'Email',
			'firstname' => 'Firstname',
			'lastname' => 'Lastname',
			'institute' => 'Institute',
			'role' => 'Role',
			'iclikname' => 'iCLiKVAL username',
			'hyponame' => 'Hypothes.is username',
			'mjournal' => 'GigaScience journal',
			'mgigadb' => 'GigaDB',
			'mhypo' => 'Hypothes.is',
			'miclik' => 'iCLiKVAL',
			'misb' => 'ISB',
                        'password_repeat' => Yii::t('app' ,'Confirm Password'),
                        'agree' => 'Agree to terms and conditions',
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

		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('institute',$this->institute,true);
		$criteria->compare('role',$this->role,true);
		$criteria->compare('iclikname',$this->iclikname,true);
		$criteria->compare('hyponame',$this->hyponame,true);
		$criteria->compare('mjournal',$this->mjournal);
		$criteria->compare('mgigadb',$this->mgigadb);
		$criteria->compare('mhypo',$this->mhypo);
		$criteria->compare('miclik',$this->miclik);
		$criteria->compare('misb',$this->misb);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public function checkPassword($attribute, $params) {
        $password = $this->password;
        $password_repeat = $this->password_repeat;

        if ($password != '') {
            $password_repeat = $this->password_repeat;

            if ($password != $password_repeat) {
                $this->addError('password',"Password and confirm don't match");
                return false;
            }
            else {
                Yii::log(__FUNCTION__."> match", 'debug');
            }

        
        }
        return true;
    }
    

   public function checkUsername($attribute, $params) {
        
        $username = $this->username;
       
            if (strpos($username, '&*&') !== false) {
                $this->addError('username',"Please change the username not contains &*&");
                return false;
            }
            else {
                Yii::log(__FUNCTION__."> match", 'debug');
            }

          
        
        return true;
    }
    public function checkagree($attribute, $params) {
        
        $agree = $this->agree;
       
            if ($agree != TRUE) {
                $this->addError('agree',"Please tick the box to agree the terms and conditions");
                return false;
            }
            else {
                Yii::log(__FUNCTION__."> match", 'debug');
            }

          
        
        return true;
    }
	public function encryptPassword() {
        # TODO: use salt?
        # if(md5(md5($this->password).$user->salt)!==$user->password)
        #Yii::log(__FUNCTION__."> encryptPassword password before hash = " . $this->password, 'debug');
        $this->passwordUnHashed = $this->password;
        $this->password = md5($this->password);
        #Yii::log(__FUNCTION__."> encryptPassword password after  hash = " . $this->password, 'debug');
    }

    public function generatePassword($length=8) {
        $chars = "abcdefghijkmnopqrstuvwxyz023456789";
        srand((double)microtime()*1000000);
        $i = 0;
        $pass = '' ;

        while ($i <= $length) {
            $num = rand() % 33;
            $tmp = substr($chars, $num, 1);
            $pass .= $tmp;
            $i++;
        }
        return $pass;
    }
}
