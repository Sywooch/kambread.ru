<?php

namespace backend\controllers;

use common\controllers\AuthController;
use common\models\News;
use common\models\search\NewsSearch;
use common\models\User;
use yii\data\ActiveDataProvider;
use yii\filters\auth\HttpBasicAuth;
use yii\helpers\ArrayHelper;
use yii\web\NotFoundHttpException;

class NewsController extends AuthController
{
    /*    public function behaviors()
        {
            return ArrayHelper::merge(parent::behaviors(), [
                'authenticator' => [
                    'class' => HttpBasicAuth::className(),
                    'auth'=>function ($username, $password) {
                        $model = User::findOne(['username' => $username]);
                        if($model->validatePassword($password)) {
                            return $model;
                        }
                    }
                ],
            ]);
        }
    */
    public function actionIndex()
    {
        \Yii::$app->view->title = "News Manager";
        $search = new NewsSearch();
        $dataProvider = $search->search(\Yii::$app->request->queryParams);

        return $this->render("index", ['dataProvider' => $dataProvider]);
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    protected function findModel($id)
    {
        if (($model = News::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
