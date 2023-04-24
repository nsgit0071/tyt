<?php

namespace backend\controllers;

use common\models\AdminSite;
use backend\models\search\Admin_SiteSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * Admin_siteController implements the CRUD actions for AdminSite model.
 */
class Admin_siteController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all AdminSite models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new Admin_SiteSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AdminSite model.
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
     * Creates a new AdminSite model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new AdminSite();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $model->logo = UploadedFile::getInstance($model,'logo');
                $fileNamel = 'imgl'.time().'.'.$model->logo->extension;
                $model->logo->saveAs('uploads/'.$fileNamel);
                $model->logo = $fileNamel;
                $model->logo = $fileNamel;
                $model->save();
                $model->imgf = UploadedFile::getInstance($model,'imgf');
                $fileNamef = 'imgf'.time().'.'.$model->imgf->extension;
                $model->imgf->saveAs('uploads/'.$fileNamef);
                $model->imgf = $fileNamef;
                $model->imgf = $fileNamef;
                $model->save();
                $model->imgs = UploadedFile::getInstance($model,'imgs');
                $fileNames = 'imgs'.time().'.'.$model->imgs->extension;
                $model->imgs->saveAs('uploads/'.$fileNames);
                $model->imgs = $fileNames;
                $model->imgs = $fileNames;
                $model->save();
                $model->imgt = UploadedFile::getInstance($model,'imgt');
                $fileNamet = 'imgt'.time().'.'.$model->imgt->extension;
                $model->imgt->saveAs('uploads/'.$fileNamet);
                $model->imgt = $fileNamet;
                $model->imgt = $fileNamet;
                $model->save();
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing AdminSite model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post())) {
            $model->logo = UploadedFile::getInstance($model,'logo');
            $fileNamel = 'imgl'.time().'.'.$model->logo->extension;
            $model->logo->saveAs('uploads/'.$fileNamel);
            $model->logo = $fileNamel;
            $model->logo = $fileNamel;
            $model->save();
            $model->imgf = UploadedFile::getInstance($model,'imgf');
            $fileNamef = 'imgf'.time().'.'.$model->imgf->extension;
            $model->imgf->saveAs('uploads/'.$fileNamef);
            $model->imgf = $fileNamef;
            $model->imgf = $fileNamef;
            $model->save();
            $model->imgs = UploadedFile::getInstance($model,'imgs');
            $fileNames = 'imgs'.time().'.'.$model->imgs->extension;
            $model->imgs->saveAs('uploads/'.$fileNames);
            $model->imgs = $fileNames;
            $model->imgs = $fileNames;
            $model->save();
            $model->imgt = UploadedFile::getInstance($model,'imgt');
            $fileNamet = 'imgt'.time().'.'.$model->imgt->extension;
            $model->imgt->saveAs('uploads/'.$fileNamet);
            $model->imgt = $fileNamet;
            $model->imgt = $fileNamet;
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing AdminSite model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AdminSite model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return AdminSite the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = AdminSite::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
