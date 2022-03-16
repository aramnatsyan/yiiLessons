<?php

namespace app\controllers;


class MyController extends AppController
{
    public function actionIndex($id = null)
    {
        $hello = 'hi';
        $name = 'Mnatsyan';

        return $this->render('index', compact('hello', 'name', 'id'));
    }

    public function actionBlogPost($id = null)
    {
        return 'Blog Post';
    }
}
