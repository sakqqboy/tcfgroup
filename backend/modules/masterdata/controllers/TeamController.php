<?php

namespace backend\modules\masterdata\controllers;

use backend\models\tokyoconsulting\Branch;
use backend\models\tokyoconsulting\Section;
use backend\models\tokyoconsulting\Team;
use common\models\ModelMaster;
use Yii;
use yii\db\Expression;
use yii\web\Controller;

/**
 * Default controller for the `masterdata` module
 */
class TeamController extends Controller
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

    public function actionTeam()
    {
        if (!Yii::$app->user->id) {
            return $this->redirect(Yii::$app->homeUrl . 'site/login');
        }
        $team = Team::find()
            ->where(["status" => 1])
            ->asArray()
            ->orderBy('branchId, sectionId')
            ->all();

        $branchs = Branch::find()->where("status=1")
            ->orderBy('branchName')
            ->asArray()
            ->all();

        return $this->render('team', ["team" => $team, "branchs" => $branchs]);
    }

    public function actionCreateTeam()
    {
        if (!Yii::$app->user->id) {
            return $this->redirect(Yii::$app->homeUrl . 'site/login');
        }
        if (isset($_POST["teamname"])) {
            $team = new Team();
            $team->teamName = $_POST["teamname"];
            $team->branchId = $_POST["branchid"];
            $team->sectionId = $_POST["sectionid"];
            $team->teamDetail = $_POST["teamdetail"];
            $team->createDateTime = new Expression('NOW()');

            if ($team->save(false)) {
                return $this->redirect(Yii::$app->homeUrl . 'masterdata/team/team');
            }
        }
        $branch = Branch::find()->where("status=1")->orderBy('branchName')->asArray()->all();
        $section = Section::find()->where("status=1")->orderBy('sectionName')->asArray()->all();
        return $this->render('create_team', ["branch" => $branch, "section" => $section]);
    }

    public function actionFindBranchInfo()
    {
        if (!Yii::$app->user->id) {
            return $this->redirect(Yii::$app->homeUrl . 'site/login');
        }
        $branchId = $_POST["branchId"];


        $textSection = '<option value="">Please select your section</option>';
        $res = [];
        $res["status"] = true;


        $section = Section::find()->where(["branchId" => $branchId, "status" => 1])->orderBy('sectionName')->asArray()->all();
        if (isset($section) && count($section) > 0) {
            foreach ($section as $section) :
                $textSection .= '<option value=' . $section["sectionId"] . '>' . $section["sectionName"] . '</option>';
            endforeach;
        }

        $res["textSection"] = $textSection;
        return json_encode($res);
    }

    public function actionViewTeam($hash)
    {
        if (!Yii::$app->user->id) {
            return $this->redirect(Yii::$app->homeUrl . 'site/login');
        }
        $param = ModelMaster::decodeParams($hash);
        $teamId = $param["teamId"];
        $team = Team::findOne(["teamId" => $teamId]);
        return $this->render('view_team', ["team" => $team]);
    }

    public function actionUpdateTeam($hash)
    {
        if (!Yii::$app->user->id) {
            return $this->redirect(Yii::$app->homeUrl . 'site/login');
        }
        $param = ModelMaster::decodeParams($hash);
        $teamId = $param["teamId"];
        $team = Team::find()->where(["teamId" => $teamId])->one();
        $branch = Branch::find()->where("status = 1")->orderBy('branchName')->asArray()->all();
        $section = Section::find()->where("status = 1 and branchId = $team->branchId")->orderBy('sectionName')->asArray()->all();
        return $this->render('update_team', ["team" => $team, "branch" => $branch, "section" => $section]);
    }

    public function actionSaveTeam()
    {
        if (!Yii::$app->user->id) {
            return $this->redirect(Yii::$app->homeUrl . 'site/login');
        }
        if (Yii::$app->request->isPost) {
            $teamId = Yii::$app->request->post("teamId");
            $team = Team::find()->where(["teamId" => $teamId])->one();
            if (isset($team) && !empty($team)) {
                $team->teamName = $_POST["teamname"];
                $team->branchId = $_POST["branchid"];
                $team->sectionId = $_POST["sectionid"];
                $team->teamDetail = $_POST["teamdetail"];
                $team->updateDateTime = new Expression('NOW()');

                if ($team->save(false)) {
                    return $this->redirect(Yii::$app->homeUrl . 'masterdata/team/team');
                }
            }
        }
    }
    public function actionDeleteTeam()
    {
        if (!Yii::$app->user->id) {
            return $this->redirect(Yii::$app->homeUrl . 'site/login');
        }
        $res["status"] = false;
        $teamId = $_POST["teamId"];
        $team = Team::find()->where(["teamId" => $teamId])->one();
        if ($team->delete()) {
            $res["status"] = true;
        }
        // return $this->redirect(Yii::$app->homeUrl . 'site/member');
        // $res["name"] = $member->userName;
        // $res["status"] = true;
        return json_encode($res);
    }

    public function actionSearchTeam()
    {
        if (!Yii::$app->user->id) {
            return $this->redirect(Yii::$app->homeUrl . 'site/login');
        }
        return $this->redirect('team-result/' . ModelMaster::encodeParams([
            "branchId" => $_POST["branchId"],
            "sectionId" => $_POST["sectionId"],
            "teamId" => $_POST["teamId"],
        ]));
    }
    public function actionTeamResult($hash)
    {
        if (!Yii::$app->user->id) {
            return $this->redirect(Yii::$app->homeUrl . 'site/login');
        }
        $param = ModelMaster::decodeParams($hash);
        $team = Team::find()
            ->where(['branchId' => $param["branchId"]])
            ->andFilterWhere(["sectionId" => $param["sectionId"]])
            ->all();

        $branchs = Branch::find()->where("status=1")
            ->orderBy('branchName')
            ->asArray()
            ->all();

        $section = Section::find()->where(["status" => 1, "branchId" => $param['branchId']])
            ->orderBy('sectionName')
            ->asArray()
            ->all();

        return $this->render('team', [
            "team" => $team,
            "branchId" => $param["branchId"],
            "sectionId" => $param["sectionId"],
            "teamId" => $param["teamId"],
            "branchs" => $branchs,
            "section" => $section,
        ]);
    }
}
