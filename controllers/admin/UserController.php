<?php

namespace app\controllers\admin;

use app\controllers\AppController;

class UserController extends AppController
{
    public function actionIndex()
    {
        $adminName = 'Ara';
        return $this->render('index', compact('adminName'));
    }

}