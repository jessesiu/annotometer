<?php

class RegisterController extends Controller
{
	
    
    
    public function actionIndex()
	{
            $user = new User;
        $this->performAjaxValidation($user);
        if (isset($_POST['User'])) {
            //$user->attributes = $_POST['User'];

            $attrs = $_POST['User'];
            $user->attributes=$attrs;
            $user->email = strtolower(trim($attrs['email']));
            $user->password = $attrs['password'];
            $user->password_repeat = $attrs['password_repeat'];
            $user->firstname=$attrs['firstname'];
            $user->lastname=$attrs['lastname'];
            $user->institute = $attrs['institute'];
            
        

            if ($user->validate('insert')) {
              

                if ($user->save(false)) {
                    
                    $file_data =  $user->username."&*&None&*&None&*&0&*&0&*&0\n";
                    $file_data .= file_get_contents('./file/test.txt');
                    
                    $file_handle = fopen("./file/test.txt", "w");
                    fwrite($file_handle, $file_data);
                    $this->redirect('register/welcome') ;
                }
                else {
                    Yii::log(__FUNCTION__."> create failed", 'warning');
                }
            }
            else {
                Yii::log(__FUNCTION__."> validation failed", 'warning');
            }
        }
        $this->render('index', array('model'=>$user)) ;
    
         
	}
        
        public function actionWelcome() {
        $this->render('welcome') ;
    }
       protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax']==='user-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}