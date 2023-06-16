<?php

namespace backend\modules\member\controllers;

use backend\models\tokyoconsulting\Member;
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
        $member = Member::find() -> asArray() -> all();
        return $this->render('member', ["member" => $member]);
    }

    public function actionCreateMember() {
        if (isset($_POST["prefix"])) {
            $member = new Member();
            $member -> prefix = $_POST["prefix"];
            $member -> username = $_POST["username"];
            $member -> password_hash = $_POST["password"];
            $member -> memberFirstName = $_POST["firstname"];
            $member -> memberLastName = $_POST["lastname"];
            $member -> memberNickName = $_POST["nickname"];
            $member -> birthDate = $_POST["birthdate"];
            $member -> gender = $_POST["gender"];
            $member -> email = $_POST["email"];
            $member -> telephoneNumber = $_POST["phonenumber"];
            $member -> branchId = $_POST["branchid"];
            $member -> address = $_POST["address"];

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
                    $member -> picture = 'image/member/' . $fileName;
                }
            }

            $member -> createDateTime = new Expression('NOW()');
            $member -> updateDateTime = new Expression('NOW()');

            if ($member->save(false)) {
                return $this->redirect(Yii::$app->homeUrl . 'member/default/member');
            }
        }
        return $this->render('create_member');
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
        $member = Member::find()->where(["memberId" => $memberId])->one();
        return $this->render('update_member', ["member" => $member]);
    }

    public function actionSaveMember()
    {
        if (Yii::$app->request->isPost) {
            $memberId = Yii::$app->request->post("memberId");
            $member = Member::find()->where(["memberId" => $memberId])->one();
            if (isset($member) && !empty($member)) {
                $member -> prefix = $_POST["prefix"];
                $member -> username = $_POST["username"];
                $member -> password_hash = $_POST["password"];
                $member -> memberFirstName = $_POST["firstname"];
                $member -> memberLastName = $_POST["lastname"];
                $member -> memberNickName = $_POST["nickname"];
                $member -> birthDate = $_POST["birthdate"];
                $member -> gender = $_POST["gender"];
                $member -> email = $_POST["email"];
                $member -> telephoneNumber = $_POST["phonenumber"];
                $member -> branchId = $_POST["branchid"];
                $member -> address = $_POST["address"];

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
        $member = Member::find()->where(["memberId" => $memberId])->one();
        if ($member->delete()) {
            $res["status"] = true;
        }
        // return $this->redirect(Yii::$app->homeUrl . 'site/member');
        // $res["name"] = $member->userName;
        // $res["status"] = true;
        return json_encode($res);
    }
}
