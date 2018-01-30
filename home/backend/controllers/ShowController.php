<?php
/**
 * Created by PhpStorm.
 * User: Meisi
 * Date: 2018/1/29
 * Time: 19:12
 */

namespace backend\controllers;

use yii\web\Controller;

class ShowController extends Controller
{
    public function actionIndex () {
        return $this->renderPartial('index');
    }
    //系统版本介绍
    public function actionIntro () {
        return $this->renderPartial('intro');
    }
    public function actionEdit () {
        return $this->renderPartial('edit');
    }
}