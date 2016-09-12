<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;

class PoststoryController extends Controller
{
    /**
     * @inheritdoc
     */
   public  function actionIndex() {
    //object of model
    $model= new Post;
    $this->render('index',array('model'=>$model));
  }
public function actionCreate()
{
  $model= new Post;
  if(isset($_POST['Post']))
  {
    $model->attributes =$_POST['Post'];
    if($model->save())
    {
      $this->render('index');
    }
  }
}

}
