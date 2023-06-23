<?php

namespace backend\modules\masterdata\controllers;

use Yii;
use yii\web\Controller;

/**
 * Default controller for the `masterdata` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        if (!Yii::$app->user->id) {
            return $this->redirect(Yii::$app->homeUrl . 'site/login');
        }
        return $this->render('index');
    }
}
