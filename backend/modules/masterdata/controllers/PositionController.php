<?php

namespace backend\modules\masterdata\controllers;

use backend\models\tokyoconsulting\Branch;
use backend\models\tokyoconsulting\Position;
use common\models\ModelMaster;
use Yii;
use yii\db\Expression;
use yii\web\Controller;

/**
 * Default controller for the `masterdata` module
 */
class PositionController extends Controller
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

    public function actionPosition()
    {
        if (!Yii::$app->user->id) {
            return $this->redirect(Yii::$app->homeUrl . 'site/login');
        }
        $position = Position::find()
            ->where(["status" => 1])
            ->asArray()
            ->orderBy('branchId, positionName')
            ->all();

        $branchs = Branch::find()->where("status=1")
            ->orderBy('branchName')
            ->asArray()
            ->all();

        return $this->render('position', ["position" => $position, "branchs" => $branchs]);
    }

    public function actionCreatePosition()
    {
        if (!Yii::$app->user->id) {
            return $this->redirect(Yii::$app->homeUrl . 'site/login');
        }
        if (isset($_POST["positionname"])) {
            $position = new Position();
            $position->branchId = $_POST["branchid"];
            $position->positionName = $_POST["positionname"];
            $position->positionDetail = $_POST["positiondetail"];
            $position->level = $_POST["level"];
            $position->createDateTime = new Expression('NOW()');

            if ($position->save(false)) {
                return $this->redirect(Yii::$app->homeUrl . 'masterdata/position/position');
            }
        }
        $branch = Branch::find()->where("status=1")->orderBy('branchName')->asArray()->all();
        return $this->render('create_position', ["branch" => $branch]);
    }

    public function actionViewPosition($hash)
    {
        if (!Yii::$app->user->id) {
            return $this->redirect(Yii::$app->homeUrl . 'site/login');
        }
        $param = ModelMaster::decodeParams($hash);
        $positionId = $param["positionId"];
        $position = Position::findOne(["positionId" => $positionId]);
        return $this->render('view_position', ["position" => $position]);
    }

    public function actionUpdatePosition($hash)
    {
        if (!Yii::$app->user->id) {
            return $this->redirect(Yii::$app->homeUrl . 'site/login');
        }
        $param = ModelMaster::decodeParams($hash);
        $positionId = $param["positionId"];
        $position = Position::find()->where(["positionId" => $positionId])->one();
        $branch = Branch::find()->where("status=1")->orderBy('branchName')->asArray()->all();
        return $this->render('update_position', ["position" => $position, "branch" => $branch]);
    }

    public function actionSavePosition()
    {
        if (!Yii::$app->user->id) {
            return $this->redirect(Yii::$app->homeUrl . 'site/login');
        }
        if (Yii::$app->request->isPost) {
            $positionId = Yii::$app->request->post("positionId");
            $position = Position::find()->where(["positionId" => $positionId])->one();
            if (isset($position) && !empty($position)) {
                $position->branchId = $_POST["branchid"];
                $position->positionName = $_POST["positionname"];
                $position->positionDetail = $_POST["positiondetail"];
                $position->level = $_POST["level"];
                $position->updateDateTime = new Expression('NOW()');

                if ($position->save(false)) {
                    return $this->redirect(Yii::$app->homeUrl . 'masterdata/position/position');
                }
            }
        }
    }

    public function actionDeletePosition()
    {
        if (!Yii::$app->user->id) {
            return $this->redirect(Yii::$app->homeUrl . 'site/login');
        }
        $res["status"] = false;
        $positionId = $_POST["positionId"];
        $position = Position::find()->where(["positionId" => $positionId])->one();
        if ($position->delete()) {
            $res["status"] = true;
        }
        // return $this->redirect(Yii::$app->homeUrl . 'site/member');
        // $res["name"] = $member->userName;
        // $res["status"] = true;
        return json_encode($res);
    }

    public function actionSearchPosition()
    {
        if (!Yii::$app->user->id) {
            return $this->redirect(Yii::$app->homeUrl . 'site/login');
        }
        return $this->redirect('position-result/' . ModelMaster::encodeParams([
            "branchId" => $_POST["branchId"],
            "positionId" => $_POST["positionId"],
        ]));
    }
    public function actionPositionResult($hash)
    {
        if (!Yii::$app->user->id) {
            return $this->redirect(Yii::$app->homeUrl . 'site/login');
        }
        $param = ModelMaster::decodeParams($hash);
        $position = Position::find()
            ->where(['branchId' => $param["branchId"]])
            ->andFilterWhere(["positionId" => $param["positionId"]])
            ->all();

        $branchs = Branch::find()->where("status=1")
            ->orderBy('branchName')
            ->asArray()
            ->all();


        return $this->render('position', [
            "branchs" => $branchs,
            "position" => $position,
            "branchId" => $param["branchId"],
            "positionId" => $param["positionId"],
        ]);
    }
}
