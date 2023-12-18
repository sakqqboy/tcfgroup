<?php

namespace backend\modules\part\controllers;

use backend\models\tokyoconsulting\Branch;
use backend\models\tokyoconsulting\Part;
use common\models\ModelMaster;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PartController implements the CRUD actions for part model.
 */
class PartController extends Controller
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
     * Lists all part models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => part::find(),

            // 'pagination' => [
            //     'pageSize' => 50
            // ],
            'sort' => [
                'defaultOrder' => [
                    'partId' => SORT_DESC,
                ]
            ],

        ]);

        $branchs = Branch::find()
            ->where("status=1")
            ->orderBy('branchName')
            ->asArray()
            ->all();


        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'branchs' => $branchs,
        ]);
    }

    /**
     * Displays a single part model.
     * @param int $partId Part ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($partId)
    {
        $branchs = Branch::find()
            ->where("status=1")
            ->orderBy('branchName')
            ->asArray()
            ->all();

        return $this->render('view', [
            'model' => $this->findModel($partId),
            'branchs' => $branchs,
        ]);
    }

    /**
     * Creates a new part model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new part();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'partId' => $model->partId]);
            }
        } else {
            $model->loadDefaultValues();
        }

        $branchs = Branch::find()
            ->where("status=1")
            ->orderBy('branchName')
            ->asArray()
            ->all();

        return $this->render('create', [
            'model' => $model,
            'branchs' => $branchs,
        ]);
    }

    /**
     * Updates an existing part model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $partId Part ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($partId)
    {
        $model = $this->findModel($partId);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'partId' => $model->partId]);
        }

        $branchs = Branch::find()
            ->where("status=1")
            ->orderBy('branchName')
            ->asArray()
            ->all();

        return $this->render('update', [
            'model' => $model,
            'branchs' => $branchs,
        ]);
    }

    /**
     * Deletes an existing part model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $partId Part ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($partId)
    {
        $this->findModel($partId)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the part model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $partId Part ID
     * @return part the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($partId)
    {
        if (($model = part::findOne(['partId' => $partId])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    public function actionSearchPart()
    {
        if (!Yii::$app->user->id) {
            return $this->redirect(Yii::$app->homeUrl . 'site/login');
        }

        $pn = isset($_POST['pn']) ? $_POST['pn'] : '';
        $branchId = isset($_POST['branchId']) ? $_POST['branchId'] : '';

        return $this->redirect('part-result/' . ModelMaster::encodeParams([
            "pn" => $pn,
            "branchId" => $branchId,
        ]));
    }

    public function actionPartResult($hash)
    {
        if (!Yii::$app->user->id) {
            return $this->redirect(Yii::$app->homeUrl . 'site/login');
        }

        $param = ModelMaster::decodeParams($hash);

        // $contentpart = Part::find()
        //     ->where(['branchId' => $param["branchId"]])
        //     ->andWhere(['like', 'partName', $param["pn"]])
        //     ->all();

        $dataProvider = new ActiveDataProvider([
            'query' => Part::find()

                ->where(['like', 'partName', $param["pn"]])
                ->andFilterWhere(['branchId' => $param["branchId"]]),

            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'partId' => SORT_DESC,
                ]
            ],

        ]);
        $branchs = Branch::find()
            ->where("status=1")
            ->orderBy('branchName')
            ->asArray()
            ->all();

        return $this->render('index', [
            "dataProvider" => $dataProvider,
            "branchs" => $branchs,
            "pn" => $param["pn"],
            "branchId" => $param["branchId"]
        ]);
    }
}
