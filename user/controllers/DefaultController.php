<?php

namespace app\modules\user\controllers;
use app\modules\user\models\Example;
use yii\web\Controller;

/**
 * Default controller for the `user` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
//        $data = new example();

        $data = Example::getTests();
        // Assuming getTests() returns the data you want to display
        return $this->render('index', ['data' => $data]);
    }
}
