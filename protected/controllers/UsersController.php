<?php

class UsersController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/main';
	

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

			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('register', 'forgotpassword'),
				'users'=>array('*'),
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

	public function missingAction($actionID)
		{
			throw new CHttpException(404, 'aaaa');
			$this->layout = '404';

		   // die();
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
	public function actionRegister()
	{
		$model=new Users;
		//$model->scenario = 'registration';
		$this->layout = 'welcome';
		
		// Uncomment the following line if AJAX validation is needed
		//$this->performAjaxValidation($model);

		if(isset($_POST['Users']))
		{
			$post_date = $_POST['Users'];
			
			if($post_date['password']){
			    $salt = generateRandomString();
			    
				$post_date['password'] = md5($post_date['password'] . $salt );
				
				$post_date['salt'] = $salt;
				
			}
			
			$model->attributes= $post_date;
			if($model->save()){
				$auth_user = new UserIdentity($model->attributes['email'],$model->attributes['password']);
				Yii::app()->user->login($auth_user);
				$this->redirect('/');
			}
		}

		$this->render('register',array(
			'model'=>$model,
		));
	}

	public function actionAuthorize(){
		
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Users']))
		{
			$model->attributes=$_POST['Users'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->ID));
		}

		$this->render('update',array(
			'model'=>$model,
		));
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
		$dataProvider=new CActiveDataProvider('Users');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Users('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Users']))
			$model->attributes=$_GET['Users'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Users the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Users::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Users $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='users-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

    public function actionForgotPassword()
    {

        $model = new Users;
        $this->layout = 'main';

        if(!empty($_REQUEST)){
            $data['show'] = false;
            $email = $_REQUEST['email'];
            if($email==""){
                $data['mess'] = 'Вы забыли ввести email.';
            }else{
                $user_exist = $model->find(array(
                    'select'=>array('id', 'email'),
                    'condition'=>'email=:login',
                    'params'=>array(':login'=>$email),
                ));
                if(!$user_exist->attributes['id']){
                    $data['mess'] = 'Пользователь с таким email не найден.';
                }else{
                    $pass = generateRandomString();
                    $salt = generateRandomString();
                    $md5Pass = md5($pass . $salt );

                    $user_exist->__set('salt', $salt);
                    $user_exist->__set('password', $md5Pass);

                    $user_exist->save(false);

                    $message = new YiiMailMessage;
                    $message->setBody('Выш новый пароль '.$md5Pass, 'text/html');
                    $message->subject = 'Забыли пароль';
                    $message->addTo($user_exist->attributes['email']);
                    $message->from = Yii::app()->params['adminEmail'];
                    Yii::app()->mail->send($message);
                    $data['mess'] = 'Вам отпарвленно сообщение с новым паролем';
                }
            }
        }else{
            $data['show'] = true;
        }
        $this->renderPartial('forgotpassword', array('data'=>$data));
    }

}
