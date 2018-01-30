<?php
/**
 * Created by PhpStorm.
 * User: 房源管理
 * Date: 2018/1/29
 * Time: 20:18
 */

namespace backend\controllers;

use yii\web\Controller;

class ChartController extends Controller
{
    //房源管理
    public function actionChart () {
        return $this->renderPartial('chart');
    }
    //承租方管理
    public function actionList () {
        return $this->renderPartial('list');
    }
}