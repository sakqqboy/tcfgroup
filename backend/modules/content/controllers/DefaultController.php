<?php

namespace backend\modules\content\controllers;

use backend\models\tokyoconsulting\Content;
use common\models\ModelMaster;
use Yii;
use yii\web\Controller;

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
        $contents = Content::find()
            ->asArray()
            ->all();
        return $this->render('index', ["contents" => $contents]);
    }

    public function actionViewContent($hash)
    {
        $param = ModelMaster::decodeParams($hash);
        $contentId = $param["contentId"];
        $contents = Content::find()->where(["contentId" => $contentId])->one();
        return $this->render('viewcontent', [
            "content" => $contents
        ]);
    }

    public function actionUpdateContent($hash)
    {
        $param = ModelMaster::decodeParams($hash);
        $contentId = $param["contentId"];
        $contents = Content::find()->where(["contentId" => $contentId])->one();

        return $this->render('updatecontent', ["contents" => $contents]);
    }

    public function actionSaveUpdate()
    {
        if (isset($_POST["contentId"])) {
            $contents = Content::find()->where(["contentId" => $_POST["contentId"]])->one();
            $contents->contentName = $_POST["contentName"];
            $contents->title = $_POST["title"];
            $contents->detail = $_POST["detail"];

            if ($contents->save(false)) {
                return $this->redirect(Yii::$app->homeUrl . 'content/default/index');
            }
        }
    }
}
