<?php

namespace backend\modules\content\controllers;

use backend\models\tokyoconsulting\Branch;
use backend\models\tokyoconsulting\Content;
use backend\models\tokyoconsulting\ContentBranch;
use backend\models\tokyoconsulting\ContentBranchDetail;
use backend\models\tokyoconsulting\ContentDetail;
use backend\models\tokyoconsulting\Member;
use backend\models\tokyoconsulting\Part;
use common\helpers\Path;
use common\models\ModelMaster;
use frontend\models\tokyoconsulting\ContentBranch as TokyoconsultingContentBranch;
use Yii;
use yii\db\Expression;
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
        if (!Yii::$app->user->id) {
            return $this->redirect(Yii::$app->homeUrl . 'site/login');
        }

        $content = Content::find()
            ->asArray()
            ->all();
        return $this->render('index', ["content" => $content]);
    }
    public function actionContent()
    {
        if (!Yii::$app->user->id) {
            return $this->redirect(Yii::$app->homeUrl . 'site/login');
        }
        $content = Content::find()->asArray()->all();

        return $this->render('content', ["content" => $content]);
    }

    public function actionCreateContent()
    {
        if (!Yii::$app->user->id) {
            return $this->redirect(Yii::$app->homeUrl . 'site/login');
        }
        if (isset($_POST["contentname"])) {
            $content = new Content();
            $content->contentName = $_POST["contentname"];
            $content->title = $_POST["title"];
            $content->detail = $_POST["detail"];

            if ($content->save(false)) {
                return $this->redirect(Yii::$app->homeUrl . 'content/default/content');
            }
        }
        return $this->render('create_content');
    }

    public function actionViewContent($hash)
    {
        if (!Yii::$app->user->id) {
            return $this->redirect(Yii::$app->homeUrl . 'site/login');
        }
        $param = ModelMaster::decodeParams($hash);
        $contentId = $param["contentId"];
        $content = Content::find()->where(["contentId" => $contentId])->one();
        return $this->render('view_content', ["content" => $content]);
    }

    public function actionUpdateContent($hash)
    {
        if (!Yii::$app->user->id) {
            return $this->redirect(Yii::$app->homeUrl . 'site/login');
        }
        $param = ModelMaster::decodeParams($hash);
        $contentId = $param["contentId"];
        $content = Content::find()->where(["contentId" => $contentId])->one();
        return $this->render('update_content', ["content" => $content]);
    }

    public function actionSaveUpdate()
    {
        if (!Yii::$app->user->id) {
            return $this->redirect(Yii::$app->homeUrl . 'site/login');
        }
        if (isset($_POST["contentId"])) {
            $content = Content::find()->where(["contentId" => $_POST["contentId"]])->one();
            $content->contentName = $_POST["contentname"];
            $content->title = $_POST["title"];
            $content->detail = $_POST["detail"];

            if ($content->save(false)) {
                return $this->redirect(Yii::$app->homeUrl . 'content/default/content');
            }
        }
    }
    public function actionDeleteContent()
    {
        if (!Yii::$app->user->id) {
            return $this->redirect(Yii::$app->homeUrl . 'site/login');
        }
        $res["status"] = false;
        $contentId = $_POST["contentId"];
        if ($contentId) {
            $content = Content::find()->where(["contentId" => $contentId])->one();
            if ($content->delete()) {
                $res["status"] = true;
            }
            // return $this->render('update', ["members" => $members]);
        }
        return json_encode($res);
    }

    public function actionSearchContent()
    {
        if (!Yii::$app->user->id) {
            return $this->redirect(Yii::$app->homeUrl . 'site/login');
        }
        return $this->redirect('search-content-result/' . ModelMaster::encodeParams([
            "nt" => $_POST['nt'],
        ]));
    }
    public function actionSearchContentResult($hash)
    {
        if (!Yii::$app->user->id) {
            return $this->redirect(Yii::$app->homeUrl . 'site/login');
        }

        $param = ModelMaster::decodeParams($hash);
        $content = Content::find()
            ->where('contentName LIKE :nt OR title LIKE :nt', [':nt' => '%' . $param["nt"] . '%'])
            ->all();

        return $this->render('content', [
            "content" => $content,
            "nt" => $param["nt"],
        ]);
    }

    public function actionContentDetail($hash)
    {
        if (!Yii::$app->user->id) {
            return $this->redirect(Yii::$app->homeUrl . 'site/login');
        }
        $param = ModelMaster::decodeParams($hash);
        $contentId = $param["contentId"];

        $contentDetail = ContentDetail::find()
            ->where(["contentId" => $contentId])
            ->asArray()
            ->all();

        $contentDetailName = Content::find()
            ->where(["contentId" => $contentId])
            ->one();

        return $this->render('content_detail', ["contentDetail" => $contentDetail, "contentId" => $contentId, "contentDetailName" => $contentDetailName]);
    }

    public function actionCreateContentDetail($hash)
    {
        if (!Yii::$app->user->id) {
            return $this->redirect(Yii::$app->homeUrl . 'site/login');
        }
        $param = ModelMaster::decodeParams($hash);
        $contentId = $param["contentId"];
        return $this->render('create_content_detail', [
            "contentId" => $contentId
        ]);
    }
    public function actionSaveCreateContentDetail()
    {
        if (!Yii::$app->user->id) {
            return $this->redirect(Yii::$app->homeUrl . 'site/login');
        }
        if (isset($_POST["contentId"])) {
            $contentDetail = new ContentDetail();
            $contentDetail->contentId = $_POST["contentId"];
            $contentDetail->title = $_POST["title"];
            $contentDetail->detail = $_POST["detail1"];
            $contentDetail->detail2 = $_POST["detail2"];
            $contentDetail->detail3 = $_POST["detail3"];
            $contentDetail->detail4 = $_POST["detail4"];
            $contentDetail->detail5 = $_POST["detail5"];
            $contentDetail->detail6 = $_POST["detail6"];
            $contentDetail->detail7 = $_POST["detail7"];
            $contentDetail->url = $_POST["url"];

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
            if ($contentDetail->save(false)) {
                return $this->redirect(Yii::$app->homeUrl . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $_POST["contentId"]]));
            }
        }
    }

    public function actionViewContentDetail($hash)
    {
        if (!Yii::$app->user->id) {
            return $this->redirect(Yii::$app->homeUrl . 'site/login');
        }
        $param = ModelMaster::decodeParams($hash);
        $contentDetailId = $param["contentDetailId"];
        $contentDetail = ContentDetail::find()->where(["contentDetailId" => $contentDetailId])->one();
        return $this->render('view_content_detail', ["contentDetail" => $contentDetail]);
    }

    public function actionUpdateContentDetail($hash)
    {
        if (!Yii::$app->user->id) {
            return $this->redirect(Yii::$app->homeUrl . 'site/login');
        }
        $param = ModelMaster::decodeParams($hash);
        $contentDetailId = $param["contentDetailId"];
        $contentDetail  = ContentDetail::find()->where(["contentDetailId" => $contentDetailId])->one();
        return $this->render('update_content_detail', ["contentDetail" => $contentDetail]);
    }

    public function actionSaveUpdateDetail()
    {
        if (!Yii::$app->user->id) {
            return $this->redirect(Yii::$app->homeUrl . 'site/login');
        }
        if (isset($_POST["contentDetailId"])) {
            $contentDetail = ContentDetail::find()->where(["contentDetailId" => $_POST["contentDetailId"]])->one();
            $contentDetail->title = $_POST["title"];
            $contentDetail->detail = $_POST["detail1"];
            $contentDetail->detail2 = $_POST["detail2"];
            $contentDetail->detail3 = $_POST["detail3"];
            $contentDetail->detail4 = $_POST["detail4"];
            $contentDetail->detail5 = $_POST["detail5"];
            $contentDetail->detail6 = $_POST["detail6"];
            $contentDetail->detail7 = $_POST["detail7"];
            $contentDetail->url = $_POST["url"];

            $imageObj = UploadedFile::getInstanceByName("image");
            if (isset($imageObj) && !empty($imageObj)) {
                if (file_exists(Path::getHost() . $contentDetail["image"])) {
                    if ($contentDetail["image"] != null) {
                        unlink(Path::getHost() . $contentDetail["image"]);
                    }
                }
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
            if ($contentDetail->save(false)) {
                return $this->redirect(Yii::$app->homeUrl . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $contentDetail->contentId]));
            }
        }
    }

    public function actionDeleteContentDetail()
    {
        if (!Yii::$app->user->id) {
            return $this->redirect(Yii::$app->homeUrl . 'site/login');
        }
        $res["status"] = false;
        $contentDetailId = $_POST["contentDetailId"];
        if ($contentDetailId) {
            $contentDetailId = ContentDetail::find()->where(["contentDetailId" => $contentDetailId])->one();
            if ($contentDetailId->delete()) {
                $res["status"] = true;
            }
            // return $this->render('update', ["members" => $members]);
        }
        return json_encode($res);
    }

    public function actionContentBranch()
    {
        if (!Yii::$app->user->id) {
            return $this->redirect(Yii::$app->homeUrl . 'site/login');
        }

        $contentbranch = ContentBranch::find()
            ->asArray()
            ->limit(200)
            ->all();

        $branchs = Branch::find()->where("status=1")
            ->orderBy('branchName')
            ->asArray()
            ->all();

        return $this->render('content_branch', ["contentbranch" => $contentbranch, "branchs" => $branchs]);
    }

    public function actionCreateContentBranch()
    {
        if (!Yii::$app->user->id) {
            return $this->redirect(Yii::$app->homeUrl . 'site/login');
        }
        if (isset($_POST["contentname"])) {
            $contentbranch = new ContentBranch();
            $contentbranch->branchId = $_POST["branchid"];
            $contentbranch->contentName = $_POST["contentname"];
            $contentbranch->title = $_POST["title"];
            $contentbranch->detail = $_POST["detail"];
            $contentbranch->createDateTime = new Expression('NOW()');

            if ($contentbranch->save(false)) {
                return $this->redirect(Yii::$app->homeUrl . 'content/default/content-branch');
            }
        }

        $branchs = Branch::find()
            ->where("status=1")
            ->orderBy('branchName')
            ->asArray()
            ->all();

        return $this->render('create_content_branch', ["branchs" => $branchs]);
    }
    public function actionViewContentBranch($hash)
    {
        if (!Yii::$app->user->id) {
            return $this->redirect(Yii::$app->homeUrl . 'site/login');
        }
        $param = ModelMaster::decodeParams($hash);
        $contentBranchId = $param["contentBranchId"];

        $contentbranch = ContentBranch::find()
            ->where(["contentBranchId" => $contentBranchId])
            ->one();

        return $this->render('view_content_branch', ["contentbranch" => $contentbranch]);
    }

    public function actionUpdateContentBranch($hash)
    {
        if (!Yii::$app->user->id) {
            return $this->redirect(Yii::$app->homeUrl . 'site/login');
        }
        $param = ModelMaster::decodeParams($hash);
        $contentBranchId = $param["contentBranchId"];
        $contentbranch = ContentBranch::find()
            ->where(["contentBranchId" => $contentBranchId])
            ->one();

        $branchs = Branch::find()
            ->where("status=1")
            ->orderBy('branchName')
            ->asArray()
            ->all();

        return $this->render('update_content_branch', ["contentbranch" => $contentbranch, "branchs" => $branchs]);
    }

    public function actionSaveContentBranch()
    {
        if (!Yii::$app->user->id) {
            return $this->redirect(Yii::$app->homeUrl . 'site/login');
        }
        if (Yii::$app->request->isPost) {
            $contentBranchId = Yii::$app->request->post("contentBranchId");
            $contentbranch = ContentBranch::find()->where(["contentBranchId" => $contentBranchId])->one();
            if (isset($contentbranch) && !empty($contentbranch)) {
                $contentbranch->branchId = $_POST["branchid"];
                $contentbranch->contentName = $_POST["contentname"];
                $contentbranch->title = $_POST["title"];
                $contentbranch->detail = $_POST["detail"];
                $contentbranch->updateDateTime = new Expression('NOW()');

                if ($contentbranch->save(false)) {
                    return $this->redirect(Yii::$app->homeUrl . 'content/default/content-branch');
                }
            }
        }
    }
    public function actionDeleteContentBranch()
    {
        if (!Yii::$app->user->id) {
            return $this->redirect(Yii::$app->homeUrl . 'site/login');
        }
        $res["status"] = false;
        $contentBranchId = $_POST["contentBranchId"];
        if ($contentBranchId) {
            $contentBranchId = ContentBranch::find()->where(["contentBranchId" => $contentBranchId])->one();
            if ($contentBranchId->delete()) {
                $res["status"] = true;
            }
            // return $this->render('update', ["members" => $members]);
        }
        return json_encode($res);
    }

    public function actionContentBranchDetail($hash)
    {
        if (!Yii::$app->user->id) {
            return $this->redirect(Yii::$app->homeUrl . 'site/login');
        }
        $param = ModelMaster::decodeParams($hash);
        $contentBranchId = $param["contentBranchId"];

        $contentbranch = ContentBranch::find()
            ->where(["contentBranchId" => $contentBranchId])
            ->one();

        $contentBranchDetail = ContentBranchDetail::find()
            ->where(["contentBranchId" => $contentBranchId])
            ->asArray()
            ->all();

        return $this->render('content_branch_detail', ["contentBranchDetail" => $contentBranchDetail, "contentBranchId" => $contentBranchId, "contentbranch" => $contentbranch]);
    }

    public function actionCreateContentBranchDetail($hash)
    {
        if (!Yii::$app->user->id) {
            return $this->redirect(Yii::$app->homeUrl . 'site/login');
        }
        $param = ModelMaster::decodeParams($hash);
        $contentBranchId = $param["contentBranchId"];

        return $this->render('create_content_branch_detail', ["contentBranchId" => $contentBranchId]);
    }
    public function actionSaveCreateContentBranchDetail()
    {
        if (!Yii::$app->user->id) {
            return $this->redirect(Yii::$app->homeUrl . 'site/login');
        }
        if (isset($_POST["contentBranchId"])) {
            $contentBranchDetail = new ContentBranchDetail();
            $contentBranchDetail->contentBranchId = $_POST["contentBranchId"];
            $contentBranchDetail->title = $_POST["title"];
            $contentBranchDetail->detail = $_POST["detail"];
            $contentBranchDetail->detail2 = $_POST["detail2"];
            $contentBranchDetail->detail3 = $_POST["detail3"];
            $contentBranchDetail->detail4 = $_POST["detail4"];
            $contentBranchDetail->detail5 = $_POST["detail5"];
            $contentBranchDetail->detail6 = $_POST["detail6"];
            $contentBranchDetail->detail7 = $_POST["detail7"];
            $contentBranchDetail->url = $_POST["url"];
            $contentBranchDetail->createDatetime = new Expression('NOW()');


            $imageObj = UploadedFile::getInstanceByName("image");
            if (isset($imageObj) && !empty($imageObj)) {
                $urlFolder = Path::getHost() . 'image/contentbranchdetail/';
                if (!file_exists($urlFolder)) {
                    mkdir($urlFolder, 0777, true);
                }
                $file = $imageObj->name;
                $filenameArray = explode('.', $file);
                $countArrayFile = count($filenameArray);
                $fileName = Yii::$app->security->generateRandomString(10) . '.' . $filenameArray[$countArrayFile - 1];
                $pathSave = $urlFolder . $fileName;
                if ($imageObj->saveAs($pathSave)) {
                    $contentBranchDetail->image = 'image/contentbranchdetail/' . $fileName;
                }
            }
            if ($contentBranchDetail->save(false)) {
                return $this->redirect(Yii::$app->homeUrl . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $_POST["contentBranchId"]]));
            }
        }
    }
    public function actionViewContentBranchDetail($hash)
    {
        if (!Yii::$app->user->id) {
            return $this->redirect(Yii::$app->homeUrl . 'site/login');
        }
        $param = ModelMaster::decodeParams($hash);
        $contentBranchDetailId = $param["contentBranchDetailId"];

        $contentBranchDetail = ContentBranchDetail::find()
            ->where(["contentBranchDetailId" => $contentBranchDetailId])
            ->one();

        return $this->render('view_content_branch_detail', ["contentBranchDetail" => $contentBranchDetail]);
    }
    public function actionUpdateContentBranchDetail($hash)
    {
        if (!Yii::$app->user->id) {
            return $this->redirect(Yii::$app->homeUrl . 'site/login');
        }
        $param = ModelMaster::decodeParams($hash);
        $contentBranchDetailId = $param["contentBranchDetailId"];

        $contentBranchDetail  = ContentBranchDetail::find()
            ->where(["contentBranchDetailId" => $contentBranchDetailId])
            ->one();

        return $this->render('update_content_branch_detail', ["contentBranchDetail" => $contentBranchDetail]);
    }
    public function actionSaveUpdateBranchDetail()
    {
        if (!Yii::$app->user->id) {
            return $this->redirect(Yii::$app->homeUrl . 'site/login');
        }
        if (isset($_POST["contentBranchDetailId"])) {
            $contentBranchDetail = ContentBranchDetail::find()
                ->where(["contentBranchDetailId" => $_POST["contentBranchDetailId"]])
                ->one();

            $contentBranchDetail->title = $_POST["title"];
            $contentBranchDetail->detail = $_POST["detail1"];
            $contentBranchDetail->detail2 = $_POST["detail2"];
            $contentBranchDetail->detail3 = $_POST["detail3"];
            $contentBranchDetail->detail4 = $_POST["detail4"];
            $contentBranchDetail->detail5 = $_POST["detail5"];
            $contentBranchDetail->detail6 = $_POST["detail6"];
            $contentBranchDetail->detail7 = $_POST["detail7"];
            $contentBranchDetail->url = $_POST["url"];
            $contentBranchDetail->createDatetime = new Expression('NOW()');

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
                    $contentBranchDetail->image = 'image/contentdetail/' . $fileName;
                }
            }
            if ($contentBranchDetail->save(false)) {
                return $this->redirect(Yii::$app->homeUrl . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $contentBranchDetail->contentBranchId]));
            }
        }
    }
    public function actionDeleteContentBranchDetail()
    {
        if (!Yii::$app->user->id) {
            return $this->redirect(Yii::$app->homeUrl . 'site/login');
        }
        $res["status"] = false;
        $contentBranchDetailId = $_POST["contentBranchDetailId"];
        if ($contentBranchDetailId) {
            $contentBranchDetailId = ContentBranchDetail::find()->where(["contentBranchDetailId" => $contentBranchDetailId])->one();
            if ($contentBranchDetailId->delete()) {
                $res["status"] = true;
            }
            // return $this->render('update', ["members" => $members]);
        }
        return json_encode($res);
    }
    public function actionSearchContentBranch()
    {
        if (!Yii::$app->user->id) {
            return $this->redirect(Yii::$app->homeUrl . 'site/login');
        }
        return $this->redirect('content-branch-result/' . ModelMaster::encodeParams([
            "bnt" => $_POST['bnt'],
            "branchId" => $_POST["branchId"],
        ]));
    }

    public function actionContentBranchResult($hash)
    {
        if (!Yii::$app->user->id) {
            return $this->redirect(Yii::$app->homeUrl . 'site/login');
        }

        $param = ModelMaster::decodeParams($hash);

        $contentbranch = ContentBranch::find()
            ->where(['branchId' => $param["branchId"]])
            ->andWhere("contentName LIKE '%" . $param["bnt"] . "%'")
            // ->andWhere('contentName LIKE :bnt OR title LIKE :bnt', [':bnt' => '%' . $param["bnt"] . '%'])
            ->all();

        $branchs = Branch::find()
            ->where("status=1")
            ->orderBy('branchName')
            ->asArray()
            ->all();

        return $this->render('content_branch', [
            "contentbranch" => $contentbranch,
            "branchs" => $branchs,
            "bnt" => $param["bnt"],
            "branchId" => $param["branchId"],
        ]);
    }

    public function actionInsertContentBranch()
    {
        $content = Content::find()->where(["contentName" => "branch"])->one();
        if (isset($content) && !empty($content)) {
            $contentDetail = ContentDetail::find()
                ->where(["contentId" => $content->contentId])
                ->andWhere("title!='Bangladesh'")
                ->all();

            foreach ($contentDetail as $cd) :
                $branch = Branch::find()->select('branchId')
                    ->where(["status" => 1, "branchName" => $cd["title"]])
                    ->one();

                $master = ContentBranch::find()->where(
                    // ["contentName" => [
                    // 'Together',
                    // 'Business',
                    // 'Wikipic',
                    // 'Branch',
                    // 'Contribute',
                    // 'Understanding',
                    // 'Newservices',
                    // 'Nameslider',
                    // 'Shapestar',
                    // 'Support',
                    // 'Companymarket',
                    // 'Related',
                    // 'Development',
                    // 'ServiceLeft',
                    // 'Serviceright',
                    // 'Imagecountry',
                    // 'Topiccountry',
                    // 'Garmenticon',
                    // ], 
                    ["branchId" => 24]
                )
                    ->asArray()
                    ->all();

                if (isset($master) && count($master) > 0) {
                    foreach ($master as $mter) :
                        $masterDetail = ContentBranchDetail::find()
                            ->where(["contentBranchId" => $mter["contentBranchId"]])
                            ->asArray()
                            ->all();

                        // if (isset($branches) && count($branches) > 0) {
                        //     foreach ($branches as $branch) :
                        $contentBranch = new ContentBranch();
                        $contentBranch->branchId = $branch->branchId;
                        $contentBranch->contentName = $mter["contentName"];
                        $contentBranch->title = $mter["title"];
                        $contentBranch->detail = $mter["detail"];
                        $contentBranch->status = 1;
                        $contentBranch->createDateTime = new Expression('NOW()');
                        $contentBranch->updateDateTime = new Expression('NOW()');
                        if ($contentBranch->save(false)) {
                            $contentBranchId = Yii::$app->db->lastInsertID;
                            foreach ($masterDetail as $x) :
                                $contentBranchDetail = new ContentBranchDetail();
                                $contentBranchDetail->contentBranchId = $contentBranchId;
                                $contentBranchDetail->title = $x["title"];
                                $contentBranchDetail->detail = $x["detail"];
                                $contentBranchDetail->detail2 = $x["detail2"];
                                $contentBranchDetail->detail3 = $x["detail3"];
                                $contentBranchDetail->detail4 = $x["detail4"];
                                $contentBranchDetail->detail5 = $x["detail5"];
                                $contentBranchDetail->detail6 = $x["detail6"];
                                $contentBranchDetail->detail7 = $x["detail7"];
                                $contentBranchDetail->image = $x["image"];
                                $contentBranchDetail->url = $x["url"];
                                $contentBranchDetail->status = 1;
                                $contentBranchDetail->createDatetime = new Expression('NOW()');
                                $contentBranchDetail->updateDatetime = new Expression('NOW()');
                                $contentBranchDetail->save(false);
                            endforeach;
                        }
                    endforeach;
                }
            endforeach;
        }
    }

    public function actionDeleteAllBranch()
    {
        $contentbr = ContentBranch::find()->where("branchId != 24")->all();
        if (isset($contentbr) && count($contentbr) > 0) {
            foreach ($contentbr as $cbr) :
                ContentBranchDetail::deleteAll(["contentBranchId" => $cbr->contentBranchId]);
                $cbr->delete();
            endforeach;
        }
        Branch::deleteAll(["status" => 99]);
    }


    public function actionInsertPartBranch()
    {
        Part::deleteAll("branchId != 24");
        $content = Content::find()->where(["contentName" => "branch"])->one();
        if (isset($content) && !empty($content)) {
            $contentDetail = ContentDetail::find()
                ->where(["contentId" => $content->contentId, "status" => 1])
                ->andWhere("title!='Bangladesh'")
                ->all();
            foreach ($contentDetail as $pb) :
                $branch = Branch::find()->select('branchId')
                    ->where(["status" => 1, "branchName" => $pb["title"]])
                    ->one();
                $master = Part::find()->where(["branchId" => 24])
                    ->asArray()
                    ->all();
                if (isset($master) && count($master) > 0) {
                    foreach ($master as $mter) :
                        $partBranch = new Part();
                        $partBranch->partName = $mter["partName"];
                        $partBranch->branchId = $branch->branchId;
                        $partBranch->status = 1;
                        $partBranch->createDateTime = new Expression('NOW()');
                        $partBranch->updateDateTime = new Expression('NOW()');
                        $partBranch->save(false);
                    endforeach;
                }

            endforeach;
        }
    }
    public function actionResApi($branchName)
    {
        //  $content = Content::find()->where(["contentName" => $content])->one();
        $x = Branch::find()
            ->Where(["branchName" => $branchName])
            ->asArray()
            ->one();

        if (isset($x) && !empty($x)) {
            $y = ContentBranch::find()
                ->select('contentName')
                ->where(["branchId" => $x["branchId"]])
                ->asArray()
                ->all();
        }
        return json_encode($y);
    }
}
