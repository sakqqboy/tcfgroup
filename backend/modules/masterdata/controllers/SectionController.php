<?php

namespace backend\modules\masterdata\controllers;

use backend\models\tokyoconsulting\Branch;
use backend\models\tokyoconsulting\Country;
use backend\models\tokyoconsulting\Section;
use common\helpers\Path;
use common\models\ModelMaster;
use GuzzleHttp\Psr7\UploadedFile;
use Yii;
use yii\db\Expression;
use yii\web\Controller;
use yii\web\UploadedFile as WebUploadedFile;

/**
 * Default controller for the `masterdata` module
 */
class SectionController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionSection()
    {
        $section = Section::find() ->where(["status"=>1])
        -> asArray() 
        -> orderBy('branchId, sectionName') 
        -> all();

        $branchs = Branch::find()->where("status=1")
        -> orderBy('branchName')
        -> asArray()
        -> all();
        
        return $this->render('section', ["section" => $section, "branchs" => $branchs]);
    }

    public function actionCreateSection()
    {
        if(isset($_POST["sectionname"])) {
            $section = new Section();
            $section -> sectionName = $_POST["sectionname"];
            $section -> branchId = $_POST["branchid"];
            $section -> sectionDetail = $_POST["sectiondetail"];
            $section -> createDateTime = new Expression('NOW()');

            if($section -> save(false)) {
                return $this->redirect(Yii::$app->homeUrl.'masterdata/section/section');
            }
        }
        $branch = Branch::find() -> where("status=1") -> orderBy('branchName') -> asArray() -> all();
        return $this->render('create_section', ["branch" => $branch]);
    }

    public function actionViewSection($hash)
    {
        $param = ModelMaster::decodeParams($hash);
        $sectionId = $param["sectionId"];
        $section = Section::findOne(["sectionId" => $sectionId]);
        return $this->render('view_section', ["section" => $section]);
    }

    public function actionUpdateSection($hash)
    {
        $param = ModelMaster::decodeParams($hash);
        $sectionId = $param["sectionId"];
        $section = Section::find()->where(["sectionId" => $sectionId])->one();
        $branch = Branch::find() -> where("status=1") -> orderBy('branchName') -> asArray() -> all();
        return $this->render('update_section', ["section" => $section, "branch" => $branch]);
    }

    public function actionSaveSection()
    {
        if (Yii::$app->request->isPost) {
            $sectionId = Yii::$app->request->post("sectionId");
            $section = Section::find()->where(["sectionId" => $sectionId])->one();
            if (isset($section) && !empty($section)) {
                $section -> sectionName = $_POST["sectionname"];
                $section -> branchId = $_POST["branchid"];
                $section -> sectionDetail = $_POST["sectiondetail"];
                $section -> updateDateTime = new Expression('NOW()');

                if ($section->save(false)) {
                    return $this->redirect(Yii::$app->homeUrl . 'masterdata/section/section');
                }
            }
        }
    }
    public function actionDeleteSection()
    {
        $res["status"] = false;
        $sectionId = $_POST["sectionId"];
        $section = Section::find()->where(["sectionId" => $sectionId])->one();
        if ($section->delete()) {
            $res["status"] = true;
        }
        // return $this->redirect(Yii::$app->homeUrl . 'site/member');
        // $res["name"] = $member->userName;
        // $res["status"] = true;
        return json_encode($res);
    }

    public function actionSearchSection()
    {  
        return $this->redirect('section-result/'.ModelMaster::encodeParams([
        "sectionId" => $_POST["sectionId"],
        "branchId" => $_POST["branchId"]
        ]));
    }

    public function actionSectionResult($hash){

        $param = ModelMaster::decodeParams($hash);
        $section = Section::find()
        -> where(['branchId' => $param["branchId"]])
        -> andFilterWhere(["sectionId" => $param["sectionId"]])
        -> all();

        $branchs = Branch::find() -> where("status=1") 
        -> orderBy('branchName') 
        -> asArray() 
        -> all();

        return $this -> render('section',[
        "section" => $section,
        "branchs" => $branchs,
        "sectionId" => $param["sectionId"],
        "branchId" => $param["branchId"]
        ]);
    }
}
