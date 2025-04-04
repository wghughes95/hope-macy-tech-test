<?php 

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\ApplicationForm;

class ApplicationController extends Controller
{
    public function actionCreate()
    {
        $model = new ApplicationForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($application = $model->create()) {
                Yii::$app->getSession()->setFlash('success', 'Your application was created successfully!');
                return $this->goHome();
            } else {
                Yii::$app->getSession()->setFlash('error', 'Error while submitting your application.');
            }
        }

        return $this->render('form', [
            'model' => $model,
        ]);
    }


    public function actionUpdate()
    {
        // Loads an existing application based on ID.
        // Renders the same form but populated with existing data.
        // Accepts and processes updates via a POST request.
    }
}