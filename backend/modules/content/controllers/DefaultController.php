<?php

namespace backend\modules\content\controllers;

use backend\models\tokyoconsulting\Content;
use backend\models\tokyoconsulting\ContentDetail;
use common\helpers\Path;
use common\models\ModelMaster;
use Yii;
use yii\web\Controller;
use yii\web\UploadedFile;

/**
 * Default controller for the `content` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $content = Content::find()
            ->asArray()
            ->all();
        return $this->render('index', ["content" => $content]);

    }
    public function actionContent()
    {
        $content = Content::find() -> asArray() -> all();
        return $this->render('content', ["content" => $content]);
    }

    public function actionCreateContent()
    {
        if(isset($_POST["contentname"])) {
            $content = new Content();
            $content -> contentName = $_POST["contentname"];
            $content -> title = $_POST["title"];
            $content -> detail = $_POST["detail"];

            if($content -> save(false)) {
                return $this->redirect(Yii::$app->homeUrl.'content/default/content');
            }
        }
        return $this->render('create_content');
    }

    public function actionViewContent($hash)
    {
        $param = ModelMaster::decodeParams($hash);
        $contentId = $param["contentId"];
        $content = Content::find() -> where(["contentId" => $contentId]) -> one();
        return $this->render('view_content', ["content" => $content]);
    }

    public function actionUpdateContent($hash)
    {
        $param = ModelMaster::decodeParams($hash);
        $contentId = $param["contentId"];
        $content = Content::find() -> where(["contentId" => $contentId]) -> one();
        return $this->render('update_content', ["content" => $content]);
    }

    public function actionSaveUpdate()
    {
        if(isset($_POST["contentId"])) {
            $content = Content::find() -> where(["contentId" => $_POST["contentId"]]) -> one();
            $content -> contentName = $_POST["contentname"];
            $content -> title = $_POST["title"];
            $content -> detail = $_POST["detail"];

            if($content -> save(false)) {
                return $this -> redirect(Yii::$app->homeUrl . 'content/default/content');
            }
        }
    }
    public function actionDeleteContent()
    {
        $res["status"] = false;
        $contentId = $_POST["contentId"];
        if($contentId) {
            $content = Content::find() -> where(["contentId" => $contentId]) -> one();
            if($content -> delete()) {
                $res["status"] = true;
            }
            // return $this->render('update', ["members" => $members]);
        }
        return json_encode($res);
    }

    public function actionContentDetail($hash)
    {
        $param = ModelMaster::decodeParams($hash);
        $contentId = $param["contentId"];
        $contentDetail = ContentDetail::find() -> where(["contentId" => $contentId])-> asArray() -> all();
        return $this->render('content_detail', ["contentDetail" => $contentDetail, "contentId" => $contentId]);
    }

    public function actionCreateContentDetail($hash)
    {
        $param = ModelMaster::decodeParams($hash);
        $contentId = $param["contentId"];
        return $this->render('create_content_detail',[
            "contentId"=> $contentId
        ]);
    }
    public function actionSaveCreateContentDetail() {
        if(isset($_POST["contentId"])) {
            $contentDetail = new ContentDetail();
            $contentDetail -> contentId = $_POST["contentId"];
            $contentDetail -> title = $_POST["title"];
            $contentDetail -> detail = $_POST["detail"];
            $contentDetail -> detail2 = $_POST["detail2"];
            $contentDetail -> detail3 = $_POST["detail3"];
            $contentDetail -> detail4 = $_POST["detail4"];
            $contentDetail -> detail5 = $_POST["detail5"];
            $contentDetail -> detail6 = $_POST["detail6"];
            $contentDetail -> detail7 = $_POST["detail7"];
            $contentDetail -> url = $_POST["url"];

            $imageObj = UploadedFile::getInstanceByName("image");
            if (isset($imageObj) && !empty($imageObj)) {
                $urlFolder = Path::getHost() . 'image/contentdetail/';
                if (!file_exists($urlFolder)) {
                    mkdir($urlFolder, 0777, true);
                }
                $file = $imageObj->name;
                $filenameArray = explode('.', $file);
                $countArrayFile = count($filenameArray);
                $fileName = Yii::$app->security->generateRandomString(10) . '.' . $filenameArray[$countArrayFile - 1];
                $pathSave = $urlFolder . $fileName;
                if ($imageObj->saveAs($pathSave)) {
                    $contentDetail->image = 'image/contentdetail/' . $fileName;
                }
            }
            if($contentDetail -> save(false)) {
                return $this -> redirect(Yii::$app->homeUrl . 'content/default/content-detail/'. ModelMaster::encodeParams(["contentId" => $_POST["contentId"]]));
            }
        }
    }

    public function actionViewContentDetail($hash)
    {
        $param = ModelMaster::decodeParams($hash);
        $contentDetailId = $param["contentDetailId"];
        $contentDetail = ContentDetail::find() -> where(["contentDetailId" => $contentDetailId]) -> one();
        return $this->render('view_content_detail', ["contentDetail" => $contentDetail]);
    }

    public function actionUpdateContentDetail($hash)
    {
        $param = ModelMaster::decodeParams($hash);
        $contentDetailId = $param["contentDetailId"];
        $contentDetail  = ContentDetail::find() -> where(["contentDetailId" => $contentDetailId]) -> one();
        return $this->render('update_content_detail', ["contentDetail" => $contentDetail]);
    }

    public function actionSaveUpdateDetail()
    {
        if(isset($_POST["contentDetailId"])) {
            $contentDetail = ContentDetail::find() -> where(["contentDetailId" => $_POST["contentDetailId"]]) -> one();
            $contentDetail -> title = $_POST["title"];
            $contentDetail -> detail = $_POST["detail1"];
            $contentDetail -> detail2 = $_POST["detail2"];
            $contentDetail -> detail3 = $_POST["detail3"];
            $contentDetail -> detail4 = $_POST["detail4"];
            $contentDetail -> detail5 = $_POST["detail5"];
            $contentDetail -> detail6 = $_POST["detail6"];
            $contentDetail -> detail7 = $_POST["detail7"];
            $contentDetail -> url = $_POST["url"];

            $imageObj = UploadedFile::getInstanceByName("image");
            if (isset($imageObj) && !empty($imageObj)) {
                $urlFolder = Path::getHost() . 'image/contentdetail/';
                if (!file_exists($urlFolder)) {
                    mkdir($urlFolder, 0777, true);
                }
                $file = $imageObj->name;
                $filenameArray = explode('.', $file);
                $countArrayFile = count($filenameArray);
                $fileName = Yii::$app->security->generateRandomString(10) . '.' . $filenameArray[$countArrayFile - 1];
                $pathSave = $urlFolder . $fileName;
                if ($imageObj->saveAs($pathSave)) {
                    $contentDetail->image = 'image/contentdetail/' . $fileName;
                }
            }
            if($contentDetail -> save(false)) {
                return $this -> redirect(Yii::$app->homeUrl . 'content/default/content-detail/'. ModelMaster::encodeParams(["contentId" => $contentDetail -> contentId]));
            }
        }
    }

    public function actionDeleteContentDetail()
    {
        $res["status"] = false;
        $contentDetailId = $_POST["contentDetailId"];
        if($contentDetailId) {
            $contentDetailId = ContentDetail::find() -> where(["contentDetailId" => $contentDetailId]) -> one();
            if($contentDetailId -> delete()) {
                $res["status"] = true;
            }
            // return $this->render('update', ["members" => $members]);
        }
        return json_encode($res);
    }
}
