<?php

namespace backend\modules\masterdata\controllers;

use backend\models\tokyoconsulting\TeamPosition;
use common\models\ModelMaster;
use Yii;
use yii\db\Expression;
use yii\web\Controller;

/**
 * Default controller for the `masterdata` module
 */
class TeamPositionController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionTeamPosition()
    {
        $teamposition = TeamPosition::find() -> where(["status" => 1]) -> asArray() -> all();
        return $this->render('teamposition', ["teamposition" => $teamposition]);
    }

    public function actionCreateTeamPosition()
    {
        if(isset($_POST["teampositionname"])) {
            $teamposition = new TeamPosition();
            $teamposition -> status = 1;
            $teamposition -> name = $_POST["teampositionname"];
            $teamposition -> createDateTime = new Expression('NOW()');
            if($teamposition -> save(false)) {
                return $this->redirect(Yii::$app->homeUrl.'masterdata/team-position/team-position');
            }
        }
        return $this->render('create_teamposition');
    }

    public function actionViewTeamPosition($hash)
    {
        $param = ModelMaster::decodeParams($hash);
        $id = $param["id"];
        $teamposition = TeamPosition::findOne(["id" => $id]);
        return $this->render('view_teamposition', ["teamposition" => $teamposition]);
    }
    public function actionUpdateTeamPosition($hash)
    {
        $param = ModelMaster::decodeParams($hash);
        $id = $param["id"];
        $teamposition = TeamPosition::find() -> where(["id" => $id]) -> one();
        return $this->render('update_teamposition', ["teamposition" => $teamposition]);
    }

    public function actionSaveTeamPosition()
    {
        if (Yii::$app->request->isPost) {
            $id = Yii::$app->request->post("id");
            $teamposition = TeamPosition::find()->where(["id" => $id])->one();
            if (isset($teamposition) && !empty($teamposition)) {
                $teamposition -> name = $_POST["teampositionname"];
                $teamposition -> updateDateTime = new Expression('NOW()');

                if ($teamposition->save(false)) {
                    return $this->redirect(Yii::$app->homeUrl . 'masterdata/team-position/team-position');
                }
            }
        }
    }
    public function actionDeleteTeamPosition()
    {
        $res["status"] = false;
        $id = $_POST["id"];
        $teamposition = TeamPosition::find()->where(["id" => $id])->one();
        if ($teamposition->delete()) {
            $res["status"] = true;
        }
        // return $this->redirect(Yii::$app->homeUrl . 'site/member');
        // $res["name"] = $member->userName;
        // $res["status"] = true;
        return json_encode($res);
    }
}
