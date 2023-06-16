<?php

namespace backend\modules\masterdata\controllers;

use backend\models\tokyoconsulting\Branch;
use backend\models\tokyoconsulting\Section;
use backend\models\tokyoconsulting\Team;
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
        return $this->render('index');
    }

    public function actionTeam()
    {
        $team = Team::find() -> where(["status" => 1]) -> asArray() -> orderBy('branchId, sectionId') -> all();
        return $this->render('team', ["team" => $team]);
    }

    public function actionCreateTeam()
    {
        if(isset($_POST["sectionname"])) {
            $team = new Team();
            $team -> teamName = $_POST["teamname"];
            $team -> branchId = $_POST["branchid"];
            $team -> sectionId = $_POST["sectionId"];
            $team -> createDateTime = new Expression('NOW()');

            if($team -> save(false)) {
                return $this->redirect(Yii::$app->homeUrl.'masterdata/section/section');
            }
        }
        $branch = Branch::find() -> where("status=1") -> orderBy('branchName') -> asArray() -> all();
        $section = Section::find() -> where("status=1") -> orderBy('sectionName') -> asArray() -> all();
        return $this->render('create_team', ["branch" => $branch, "section" => $section]);
    }
}
