<?php

class UserController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';
        private $_user;
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','reset','resetThanks'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','view_profile','changepassword'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new User;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->email));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate()
	{
		$model=User::model()->findByAttributes(array('username'=> Yii::app()->user->id));
                

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
                    if(isset($_POST['User']['iclikname'])){
                    $model->iclikname=$_POST['User']['iclikname'];
                    }
                    if(isset($_POST['User']['hyponame'])){
                    $model->hyponame=$_POST['User']['hyponame'];
                    }
                    
                    
		if($model->save(false)){
                    $this->redirect('/index.php/user/view_profile');
                    echo "changed";
                }
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
	
	        public function actionReset() {
    	$email='';
        //$this->render('reset',array('user'=>$this->loadUser())) ;
        if (isset($_REQUEST["reset_user"])) {
            $reset_user = $_REQUEST["reset_user"];
           // Yii::log("reset $reset_user", 'debug');
            $user = User::model()->findByAttributes(array('email' => $reset_user));
            if ($user !== null) {
                Yii::log(__FUNCTION__."> reset found user $reset_user", 'debug');
                $user->password = $user->generatePassword(8);
               // $user->encryptPassword();

                if ($user->save(false)) {
                    $this->sendPasswordEmail($user);
                }
                else {
                    Yii::log(__FUNCTION__."> Error: could not save new user password", 'error');
                }
            }
            else {
                Yii::log(__FUNCTION__."> User account not found for user $reset_user", 'error');
            }
            $this->redirect(array('/index.php/user/resetThanks'));
        }
        $this->render('reset', array('email'=>$email));
    }
     public function actionResetThanks() {
        $this->render('resetThanks');
         }
    
     public function actionChangePassword() {
        $model = new ChangePasswordForm();
        $model->user_id = Yii::app()->user->id;

        

        if(isset($_POST['ChangePasswordForm']))
        {
            $model->attributes=$_POST['ChangePasswordForm'];
            
            $model->changePass();
            //print_r($model);
                    
            if($model->validate() && $model->changePass())
                $this->redirect('/index.php/user/view_profile');
        }
        $model->password = $model->confirmPassword = '';
        $this->render('changePassword',array('model'=>$model));
    }
	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('User');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new User('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['User']))
			$model->attributes=$_GET['User'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return User the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=User::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param User $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='user-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        
            public function actionView_Profile() {
        $model = new EditProfileForm();
        $model->user_id = Yii::app()->user->id;

        if (isset($_POST['EditProfileForm'])) {
            $model->attributes = $_POST['EditProfileForm'];
            if ($model->validate() && $model->updateInfo())
                $this->redirect('/index.php/user/view_profile');
        }

       
        $model=User::model()->findByAttributes(array('username'=> Yii::app()->user->id));
        $hypo=0;
        $iclick=0;
        $total=0;
        $file_handle = fopen("./file/test.txt", "r");
       
        while(!feof($file_handle))
        {
            $line = fgets($file_handle);
            
            $tmp = explode("&*&", $line);
            if($tmp[0]===Yii::app()->user->id)
            {
                $hypo=$tmp[3];
                $iclick=$tmp[4];
                $total=$tmp[5];
                break;
                
            }
        }
        /*
        echo "Hypothesis Annotation: ".$hypo."<br><br>";
        echo "iClikVal Annotation: ".$iclick."<br><br>";
        echo "Total Annotation: ".$total."<br><br>";
        echo " <a class=\"btn\" href=\"/annotometer/index.php/leaderboard\">Back to the Main Page</a>";
        echo "<br>";
        echo "<br>";
        echo " <a class=\"btn\" href=\"/annotometer/index.php/user/update\">Update Hypothesis and iClikVal account</a>";
        //$user = $this->loadUser(Yii::app()->user->id);
       /*
        $model->first_name = $user->first_name;
        $model->last_name = $user->last_name;
        $model->email = $user->email;
        $model->affiliation = $user->affiliation;
        $model->newsletter = $user->newsletter;

        */
        $this->render('view_profile',array('model'=>$model,'hypo'=>$hypo,'iclick'=>$iclick,'total'=>$total));
    }
    
        private function loadUser($id) {
        if ($this->_user===null) {
            if ($id!==null || isset($_GET['id'])) {
                echo $id;
                $this->_user=User::model()->findbyPk($id!==null ? $id : $_GET['id']) ;
            }
            if ($this->_user===null)
                throw new CHttpException(500,'The requested user does not exist.') ;
        }
        return $this->_user ;
    }
	private function sendPasswordEmail($user) {
        $app_email_name = 'Annotometer';
        $app_email = 'database@gigasciencejournal.com';
        $email_prefix = '[Annotometer]';
        $headers = "From: $app_email_name <$app_email>\r\n"; //optional header fields
        $headers .= "Content-type: text/html\r\n";
        ini_set('sendmail_from', $app_email);

        $recipient = $user->email;
        $subject = $email_prefix . "Password reset";
        $password_unhashed = $user->password;
        $url = $this->createAbsoluteUrl('site/login');
        $body = $this->renderPartial('emailReset',array('url'=>$url,'password_unhashed'=>$password_unhashed),true);
        if(mail($recipient, $subject, $body, $headers)===false){
        print_r(error_get_last());
	}
	Yii::log(__FUNCTION__."> Sent email to $recipient, $subject");
    }
}
