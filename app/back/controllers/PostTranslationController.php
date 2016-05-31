<?php

namespace back\controllers;

use Yii;
use back\models\PostTranslation;
use back\models\PostTranslationSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PostTranslationController implements the CRUD actions for PostTranslation model.
 */
class PostTranslationController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all PostTranslation models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PostTranslationSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PostTranslation model.
     * @param integer $post_id
     * @param string $language
     * @return mixed
     */
    public function actionView($post_id, $language)
    {
        return $this->render('view', [
            'model' => $this->findModel($post_id, $language),
        ]);
    }

    /**
     * Creates a new PostTranslation model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PostTranslation();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'post_id' => $model->post_id, 'language' => $model->language]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing PostTranslation model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $post_id
     * @param string $language
     * @return mixed
     */
    public function actionUpdate($post_id, $language)
    {
        $model = $this->findModel($post_id, $language);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'post_id' => $model->post_id, 'language' => $model->language]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing PostTranslation model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $post_id
     * @param string $language
     * @return mixed
     */
    public function actionDelete($post_id, $language)
    {
        $this->findModel($post_id, $language)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PostTranslation model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $post_id
     * @param string $language
     * @return PostTranslation the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($post_id, $language)
    {
        if (($model = PostTranslation::findOne(['post_id' => $post_id, 'language' => $language])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
