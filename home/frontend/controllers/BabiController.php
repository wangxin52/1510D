<?php
namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use app\models\Test;
class CurdController extends Controller
{
    public $enableCsrfValidation=false;
    public function actionAdmin()
    {
         return $this->render('from');
    }

    public function actionInsert()
    {
        //$data=Yii::$app->request->post();
        $test=new Test();
        //查
        $user_info=$test->find()->where(['name'=>'柴睿捷'])->one();
        //删
        // $arr=$user_info->delete();
        // print_r($arr);die;
        //增
        //  $test->name='柴睿捷';
        //  $test->age='19';
        //  $test->content='我是男人';
        //  $arr=$test->insert();
        //  print_r($arr);die;
        $user_info->age='20';
        $user_info->content='我是人';
        $res=$user_info->save();
        print_r($res);die;

    }
}