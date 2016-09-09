<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;

class RegisterController extends Controller
{
    /**
     * @inheritdoc
     */
   public  function actionIndex() {
    $this->render('index');
  }

  public function actionRegister() {
 //create object of model class
    $model   = new UserForm ;

if(isset($_POST['UserForm'])) {
    //set all value to model attribute
      $model->attributes = $_POST['UserForm'];
      //check validation of form
      if($model->validate()) {
      if($model->save()) {
        //redirect to index page after submit the data
         $this->render('index',array('model'=>$model));
        }
      }
      //If not valid then render to register form
      $this->render('register',array('model'=>$model));
    }

$this->render('register',array('model'=>$model));
  }
}
