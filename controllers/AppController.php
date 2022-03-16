<?php


namespace app\controllers;

use yii\web\Controller;

class AppController extends Controller
{
    /**
     * @param null $inputValue
     */
    public function actionVarDump($inputValue = null)
    {
        var_dump($inputValue);
        die;
    }

    /**
     * @param $arr
     */
    public function actionDebug($arr)
    {
        echo '<pre>' . print_r($arr, true) . '</pre>';die;
    }
}