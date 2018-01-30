<?php
/**
 * Created by PhpStorm.
 * User: Meisi
 * Date: 2018/1/29
 * Time: 18:50
 */

namespace backend\controllers;

use yii\web\Controller;

class LoginController extends Controller
{
    public $enableCsrfValidation=false;
    public function actionIndex() {
        return $this->renderPartial('index');
    }
    public function actionLogin () {
        echo 123;
        return $this->redirect('?r=show/index');
    }
}