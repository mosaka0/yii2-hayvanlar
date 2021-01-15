<?php

namespace mosaka0\hayvanlar\controllers;

use Yii;
use mosaka0\hayvanlar\models\Hayvanlar;
use mosaka0\hayvanlar\models\HayvanlarSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use mosaka0\hayvanlar\models\Hayvanlarsil;
use mosaka0\hayvanlar\models\HayvanlarsilSearch;

/**
 * HayvanlarController implements the CRUD actions for Hayvanlar model.
 */
class HayvanlarController extends Controller
{
    /**
     * {@inheritdoc}
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
     * Lists all Hayvanlar models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new HayvanlarSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionHayvanlarsil()
    {
        $searchModel = new HayvanlarsilSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('hayvanlarsil', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Hayvanlar model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Hayvanlar model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Hayvanlar();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Hayvanlar model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Hayvanlar model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $birak = new hayvanlarsil();

        $birak->id = $model->id;
        $birak->isim = $model->isim;
        $birak->kilo = $model->kilo;
        $birak->boy = $model->boy;
        $birak->tür = $model->tür;

        $birak->save();


        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Hayvanlar model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Hayvanlar the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Hayvanlar::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
