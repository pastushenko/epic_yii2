<?php
/**
 * Created by PhpStorm.
 * User: pastushenko
 * Date: 21.04.15
 * Time: 21:16
 */
namespace app\controllers;

use yii\web\Controller;

class ErrorController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}