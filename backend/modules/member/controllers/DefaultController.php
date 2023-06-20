<?php

namespace backend\modules\member\controllers;

use backend\models\tokyoconsulting\Branch;
use backend\models\tokyoconsulting\Member;
use backend\models\tokyoconsulting\Position;
use backend\models\tokyoconsulting\Section;
use backend\models\tokyoconsulting\Team;
use backend\models\tokyoconsulting\TeamPosition;
use common\helpers\Path;
use common\models\ModelMaster;
use Exception;
use Yii;
use yii\db\Expression;
use yii\web\Controller;
use yii\web\UploadedFile;

/**
 * Default controller for the `member` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionMember()
    {
        $member = Member::find()->asArray()->all();
        $branchs = Branch::find()->where("status=1")
            ->orderBy('branchName')
            ->asArray()
            ->all();

        return $this->render('member', [
            "member" => $member,
            "branchs" => $branchs
        ]);
    }

    public function actionCreateMember()
    {
        if (isset($_POST["username"])) {
            $member = new Member();
            $member->prefix = $_POST["prefix"];
            $member->username = $_POST["username"];
            $member->password_hash = $_POST["password"];
            $member->memberFirstName = $_POST["firstname"];
            $member->memberLastName = $_POST["lastname"];
            $member->memberNickName = $_POST["nickname"];
            $member->birthDate = $_POST["birthdate"];
            $member->gender = $_POST["gender"];
            $member->email = $_POST["email"];
            $member->telephoneNumber = $_POST["phonenumber"];
            $member->branchId = $_POST["branchId"];
            $member->sectionId = $_POST["sectionid"];
            $member->positionId = $_POST["positionid"];
            $member->teamId = $_POST["teamid"];
            $member->teamPositionId = $_POST["teampositionid"];


            $imageObj = UploadedFile::getInstanceByName("picture");
            if (isset($imageObj) && !empty($imageObj)) {
                $urlFolder = Path::getHost() . 'image/member/';
                if (!file_exists($urlFolder)) {
                    mkdir($urlFolder, 0777, true);
                }
                $file = $imageObj->name;
                $filenameArray = explode('.', $file);
                $countArrayFile = count($filenameArray);
                $fileName = Yii::$app->security->generateRandomString(10) . '.' . $filenameArray[$countArrayFile - 1];
                $pathSave = $urlFolder . $fileName;
                if ($imageObj->saveAs($pathSave)) {
                    $member->picture = 'image/member/' . $fileName;
                }
            }

            $member->createDateTime = new Expression('NOW()');
            $member->updateDateTime = new Expression('NOW()');

            if ($member->save(false)) {
                return $this->redirect(Yii::$app->homeUrl . 'member/default/member');
            }
        }
        $branchs = Branch::find()->where("status=1")
            ->orderBy('branchName')
            ->asArray()
            ->all();

        $teampositions = TeamPosition::find()->where("status=1")
            ->asArray()
            ->all();

        return $this->render('create_member', [
            "branchs" => $branchs,
            "teampositions" => $teampositions
        ]);
    }

    public function actionViewMember($hash)
    {
        $param = ModelMaster::decodeParams($hash);
        $memberId = $param["memberId"];
        $member = Member::findOne(["memberId" => $memberId]);
        return $this->render('view_member', ["member" => $member]);
    }

    public function actionUpdateMember($hash)
    {
        $param = ModelMaster::decodeParams($hash);
        $memberId = $param["memberId"];

        $member = Member::find()->where(["memberId" => $memberId])
            ->one();

        $branch = Branch::find()->where("status = 1")
            ->orderBy('branchName')
            ->asArray()
            ->all();

        $teampositions = TeamPosition::find()->where("status = 1")
            ->orderBy('name')
            ->asArray()
            ->all();

        $section = Section::find()->where("status = 1 and branchId = $member->branchId")
            ->orderBy('sectionName')
            ->asArray()
            ->all();

        $position = Position::find()->where("status = 1 and branchId = $member->branchId")
            ->orderBy('positionName')
            ->asArray()
            ->all();

        $team = Team::find()->where("status = 1 and branchId = $member->branchId")
            ->orderBy('teamName')
            ->asArray()
            ->all();

        return $this->render('update_member', ["member" => $member, "branch" => $branch, "section" => $section, "position" => $position, "teampositions" => $teampositions, "team" => $team]);
    }

    public function actionSaveMember()
    {
        if (Yii::$app->request->isPost) {
            $memberId = Yii::$app->request->post("memberId");
            $member = Member::find()->where(["memberId" => $memberId])->one();
            if (isset($member) && !empty($member)) {
                $member->prefix = $_POST["prefix"];
                $member->username = $_POST["username"];
                $member->password_hash = $_POST["password"];
                $member->memberFirstName = $_POST["firstname"];
                $member->memberLastName = $_POST["lastname"];
                $member->memberNickName = $_POST["nickname"];
                $member->birthDate = $_POST["birthdate"];
                $member->gender = $_POST["gender"];
                $member->email = $_POST["email"];
                $member->telephoneNumber = $_POST["phonenumber"];
                $member->branchId = $_POST["branchId"];
                $member->sectionId = $_POST["sectionid"];
                $member->positionId = $_POST["positionid"];
                $member->teamId = $_POST["teamid"];
                $member->teamPositionId = $_POST["teampositionid"];

                $imageObj = UploadedFile::getInstanceByName("picture");
                if ($imageObj !== null) {
                    $urlFolder = Path::getHost() . 'image/member/';
                    if (!file_exists($urlFolder)) {
                        mkdir($urlFolder, 0777, true);
                    }
                    $fileName = Yii::$app->security->generateRandomString(10) . '.' . $imageObj->getExtension();
                    $pathSave = $urlFolder . $fileName;
                    if ($imageObj->saveAs($pathSave)) {
                        $member->picture = 'image/member/' . $fileName;
                    }
                }

                if ($member->save(false)) {
                    return $this->redirect(Yii::$app->homeUrl . 'member/default/member');
                }
            }
        }
    }
    public function actionDeleteMember()
    {
        $res["status"] = false;
        $memberId = $_POST["memberId"];
        $member = Member::find()->where(["memberId" => $memberId])
            ->one();

        if ($member->delete()) {
            $res["status"] = true;
        }
        // return $this->redirect(Yii::$app->homeUrl . 'site/member');
        // $res["name"] = $member->userName;
        // $res["status"] = true;
        return json_encode($res);
    }


    public function actionFindBranchInfo()
    {
        $branchId = $_POST["branchId"];
        $textSection = '<option value="">Please select your section</option>';
        $textPosition = '<option value="">Please select your position</option>';
        $textTeam = '<option value="">Please select your team</option>';
        $res = [];
        $res["status"] = true;

        $sections = Section::find()->where(["branchId" => $branchId, "status" => 1])
            ->orderBy('sectionName')
            ->asArray()
            ->all();

        if (isset($sections) && count($sections) > 0) {
            foreach ($sections as $section) :
                $textSection .= '<option value=' . $section["sectionId"] . '>' . $section["sectionName"] . '</option>';
            endforeach;
        }

        $positions = Position::find()->where(["branchId" => $branchId, "status" => 1])
            ->orderBy('positionName')
            ->asArray()
            ->all();

        if (isset($positions) && count($positions) > 0) {
            foreach ($positions as $position) :
                $textPosition .= '<option value=' . $position["positionId"] . '>' . $position["positionName"] . '</option>';
            endforeach;
        }

        $teams = Team::find()->where(["branchId" => $branchId, "status" => 1])
            ->orderBy('teamName')
            ->asArray()
            ->all();

        if (isset($teams) && count($teams) > 0) {
            foreach ($teams as $team) :
                $textTeam .= '<option value=' . $team["teamId"] . '>' . $team["teamName"] . '</option>';
            endforeach;
        }

        $res["textSection"] = $textSection;
        $res["textPosition"] = $textPosition;
        $res["textTeam"] = $textTeam;
        return json_encode($res);
    }

    public function actionSearchMember()
    {
        return $this->redirect('search-result/' . ModelMaster::encodeParams([
            "branchId" => $_POST["branchId"],
            "fullname" => $_POST['fullname'],
            "sectionId" => $_POST["sectionId"],
            "teamId" => $_POST["teamId"],
            "positionId" => $_POST["positionId"]
        ]));
    }
    public function actionSearchResult($hash)
    {

        $param = ModelMaster::decodeParams($hash);
        $member = Member::find()
            ->where(['branchId' => $param["branchId"]])
            ->andWhere('memberFirstName LIKE :fullname OR memberLastName LIKE :fullname', [':fullname' => '%' . $param["fullname"] . '%'])
            ->andFilterWhere(["sectionId" => $param["sectionId"]])
            ->andFilterWhere(["positionId" => $param["positionId"]])
            ->andFilterWhere(["teamId" => $param["teamId"]])
            ->all();

        $branchs = Branch::find()->where("status=1")
            ->orderBy('branchName')
            ->asArray()
            ->all();

        $section = Section::find()->where(["status" => 1, "branchId" => $param['branchId']])
            ->orderBy('sectionName')
            ->asArray()
            ->all();

        $position = Position::find()->where(["status" => 1, "branchId" => $param['branchId']])
            ->orderBy('positionName')
            ->asArray()
            ->all();

        $team = Team::find()->where(["status" => 1, "branchId" => $param['branchId']])
            ->orderBy('teamName')
            ->asArray()
            ->all();
        return $this -> render('member',[
        "member" => $member,
        "fullname" => $param["fullname"],
        "branchId" => $param["branchId"],
        "sectionId" => $param["sectionId"],
        "positionId" => $param["positionId"],
        "teamId" => $param["teamId"],
        "branchs" => $branchs,
        "section" => $section, 
        "position" => $position,
        "team" => $team
        ]);
    }
}
