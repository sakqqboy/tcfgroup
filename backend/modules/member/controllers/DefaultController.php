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
    public function actionIndex()
    {
        $members = Member::find()
            ->asArray()
            ->all();

        return $this->render('index', ["members" => $members]);
    }

    public function actionViewMember($hash)
    {
        $param = ModelMaster::decodeParams($hash);
        $memberId = $param["memberId"];
        $members = Member::findOne(["memberId" => $memberId]);
        return $this->render('viewmember', [
            "members" => $members
        ]);
    }

    public function actionCreateMember()
    {
        if (isset($_POST["memberFirstName"])) {
            $members = new Member();
            $members->memberFirstName = $_POST["memberFirstName"];
            $members->memberLastName = $_POST["memberLastName"];
            $members->memberNickName = $_POST["memberNickName"];
            $members->birthDate = $_POST["birthDate"];
            $members->username = $_POST["username"];
            $members->telephoneNumber = $_POST["telephoneNumber"];
            $members->email = $_POST["email"];
            $members->address = $_POST["address"];
            $members->branchId = $_POST["branchId"];
            $members->createDateTime = new Expression('NOW()');
            $members->updateDateTime = new Expression('NOW()');

            $imageObj = UploadedFile::getInstanceByName("picture");
            if ($imageObj !== null) {
                $urlFolder = 'image/member/';
                if (!file_exists($urlFolder)) {
                    mkdir($urlFolder, 0777, true);
                }
                $fileName = Yii::$app->security->generateRandomString(10) . '.' . $imageObj->getExtension();
                $pathSave = $urlFolder . $fileName;
                if ($imageObj->saveAs($pathSave)) {
                    $members->picture = $urlFolder . $fileName;
                }
            }

            if ($members->save(false)) {
                return $this->redirect(Yii::$app->homeUrl . 'member/default/index');
            }
        }

        return $this->render('createmember');
    }

    public function actionCreateNext()
    {
        return $this->render('creatememp2');
    }



    public function actionUpdateMember($hash)
    {
        $param = ModelMaster::decodeParams($hash);
        $memberId = $param["memberId"];
        $members = Member::find()->where(["memberId" => $memberId])->one();
        return $this->render('updatemember', [
            "members" => $members
        ]);
    }

    public function actionSaveMember()
    {
        if (Yii::$app->request->isPost) {
            $memberId = Yii::$app->request->post("memberId");
            $members = Member::find()->where(["memberId" => $memberId])->one();
            if (isset($members) && !empty($members)) {
                $members->memberFirstName = Yii::$app->request->post("memberFirstName");
                $members->memberLastName = Yii::$app->request->post("memberLastName");
                $members->memberNickName = Yii::$app->request->post("memberNickName");
                $members->birthDate = Yii::$app->request->post("birthDate");
                $members->picture = Yii::$app->request->post("picture");
                $members->username = Yii::$app->request->post("email");
                $members->telephoneNumber = Yii::$app->request->post("telephoneNumber");
                $members->email = Yii::$app->request->post("email");
                $members->address = Yii::$app->request->post("address");
                $members->branchId = Yii::$app->request->post("branchId");
                $members->createDateTime = new Expression('NOW()');
                $members->updateDateTime = new Expression('NOW()');
                $imageObj = UploadedFile::getInstanceByName("picture");
                if ($imageObj !== null) {
                    $urlFolder = Path::getHost() . 'image/member/';
                    if (!file_exists($urlFolder)) {
                        mkdir($urlFolder, 0777, true);
                    }
                    $fileName = Yii::$app->security->generateRandomString(10) . '.' . $imageObj->getExtension();
                    $pathSave = $urlFolder . $fileName;
                    if ($imageObj->saveAs($pathSave)) {
                        $members->picture = 'image/member/' . $fileName;
                    }
                }

                if ($members->save(false)) {
                    return $this->redirect(Yii::$app->homeUrl . 'member/default/index');
                }
            }
        }
    }


    public function actionDelete()
    {
        $res["status"] = false;
        $memberId = $_POST["memberId"];
        $members = Member::find()->where(["memberId" => $memberId])->one();
        if ($members->delete()) {
            $res["status"] = true;
        }
        // return $this->redirect(Yii::$app->homeUrl . 'site/member');
        // $res["name"] = $member->userName;
        // $res["status"] = true;
        return json_encode($res);
    }
}
