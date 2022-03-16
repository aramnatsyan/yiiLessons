<?php


namespace app\controllers;

use Yii;


class PostController extends AppController
{
    public function actionTest()
    {
        $arr = [
            'act1' => 'test1',
            'act2' => 'test2',
            'act3' => 'test2'
        ];
        
        return $this->render('test', compact('arr'));
    }
}