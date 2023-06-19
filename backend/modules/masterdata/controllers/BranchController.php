<?php

namespace backend\modules\masterdata\controllers;

use backend\models\tokyoconsulting\Branch;
use backend\models\tokyoconsulting\Country;
use backend\models\tokyoconsulting\Member;
use common\helpers\Path;
use common\models\ModelMaster;
use Yii;
use yii\db\Expression;
use yii\web\Controller;
use yii\web\UploadedFile;

/**
 * Default controller for the `masterdata` module
 */
class BranchController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionBranch()
    {
        $branch = Branch::find() -> asArray() -> orderBy('branchName') -> all();
        $dropdown = Branch::find() -> where("status=1") 
        -> orderBy('branchName') 
        -> asArray() 
        -> all();
        return $this->render('branch', ["branch" => $branch, "dropdown" => $dropdown]);
    }

    public function actionCreateBranch()
    {
        if(isset($_POST["branchname"])) {
            $branch = new Branch();
            $branch -> branchName = $_POST["branchname"];
            $branch -> countryId = $_POST["countryid"];
            
            $imageObj = UploadedFile::getInstanceByName("flag");
            if (isset($imageObj) && !empty($imageObj)) {
                $urlFolder = Path::getHost() . 'image/branch/';
                if (!file_exists($urlFolder)) {
                    mkdir($urlFolder, 0777, true);
                }
                $file = $imageObj->name;
                $filenameArray = explode('.', $file);
                $countArrayFile = count($filenameArray);
                $fileName = Yii::$app->security->generateRandomString(10) . '.' . $filenameArray[$countArrayFile - 1];
                $pathSave = $urlFolder . $fileName;
                if ($imageObj->saveAs($pathSave)) {
                    $branch->flag = 'image/branch/' . $fileName;
                }
            }

            $branch -> createDateTime = new Expression('NOW()');

            if($branch -> save(false)) {
                return $this->redirect(Yii::$app->homeUrl.'masterdata/branch/branch');
            }
        }
        $country = Country::find() -> where("status=1") -> orderBy('countryName') -> asArray() -> all();
        return $this->render('create_branch', ["country" => $country]);
    }

    public function actionViewBranch($hash)
    {
        $param = ModelMaster::decodeParams($hash);
        $branchId = $param["branchId"];
        $branch = Branch::findOne(["branchId" => $branchId]);
        return $this->render('view_branch', ["branch" => $branch]);
    }

    public function actionUpdateBranch($hash)
    {
        $param = ModelMaster::decodeParams($hash);
        $branchId = $param["branchId"];
        $branch = Branch::find()->where(["branchId" => $branchId])->one();
        $country = Country::find() -> where("status=1") -> orderBy('countryName') -> asArray() -> all();
        return $this->render('update_branch', ["branch" => $branch, "country" => $country]);
    }

    public function actionSaveBranch()
    {
        if (Yii::$app->request->isPost) {
            $branchId = Yii::$app->request->post("branchId");
            $branch = Branch::find()->where(["branchId" => $branchId])->one();
            if (isset($branch) && !empty($branch)) {
                $branch -> branchName = $_POST["branchname"];
                $branch -> countryId = $_POST["countryid"];
                $branch -> updateDateTime = new Expression('NOW()');
            
                $imageObj = UploadedFile::getInstanceByName("flag");
                if (isset($imageObj) && !empty($imageObj)) {
                    $urlFolder = Path::getHost() . 'image/branch/';
                    if (!file_exists($urlFolder)) {
                        mkdir($urlFolder, 0777, true);
                    }
                    $file = $imageObj->name;
                    $filenameArray = explode('.', $file);
                    $countArrayFile = count($filenameArray);
                    $fileName = Yii::$app->security->generateRandomString(10) . '.' . $filenameArray[$countArrayFile - 1];
                    $pathSave = $urlFolder . $fileName;
                    if ($imageObj->saveAs($pathSave)) {
                        $branch->flag = 'image/branch/' . $fileName;
                    }
                }
                if ($branch->save(false)) {
                    return $this->redirect(Yii::$app->homeUrl . 'masterdata/branch/branch');
                }
            }
        }
    }
    public function actionDeleteBranch()
    {
        $res["status"] = false;
        $branchId = $_POST["branchId"];
        $branch = Branch::find()->where(["branchId" => $branchId])->one();
        if ($branch->delete()) {
            $res["status"] = true;
        }
        // return $this->redirect(Yii::$app->homeUrl . 'site/member');
        // $res["name"] = $member->userName;
        // $res["status"] = true;
        return json_encode($res);
    }
    public function actionSearchBranch()
    {  
        return $this->redirect('branch-result/'.ModelMaster::encodeParams([
        "branchId" => $_POST["branchId"],
        ]));
    }

    public function actionBranchResult($hash){

        $param = ModelMaster::decodeParams($hash);
        $branch = Branch::find()
        -> where(['branchId' => $param["branchId"]])
        -> all();

        $dropdown = Branch::find() -> where("status=1") 
        -> orderBy('branchName') 
        -> asArray() 
        -> all();

        return $this -> render('branch',[
        "branch" => $branch,
        "dropdown" => $dropdown,
        "branchId" => $param["branchId"]
        ]);
    }
}
