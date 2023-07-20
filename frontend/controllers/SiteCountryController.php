<?php

namespace frontend\controllers;

use frontend\models\tokyoconsulting\Member;
use frontend\models\tokyoconsulting\MemberHasType;
use yii\web\Controller;
use frontend\models\tokyoconsulting\Content;
use frontend\models\tokyoconsulting\ContentDetail;
use frontend\models\tokyoconsulting\Branch;
use frontend\models\tokyoconsulting\Client;
use frontend\models\tokyoconsulting\ContentBranch;
use frontend\models\tokyoconsulting\ContentBranchDetail;
use frontend\models\tokyoconsulting\Country;
use frontend\models\tokyoconsulting\Part;
use Yii;
use yii\db\Expression;

/**
 * Site controller
 */
class SiteCountryController extends Controller
{
    public function actionIndex($hash)
    {

        //throw new exception($hash);
        $branchName = str_replace('%20', ' ', $hash);
        $countryName = $hash;
        $dropdown = $hash;
        $bannerDetail = [];
        $topicDetail = [];
        $importDetail = [];
        $import = [];
        $bangladreshDetail = [];
        $webinarDetail = [];
        $professional = [];
        $professionalDetail = [];
        $legalDetail = [];
        $legal = [];
        $banner = [];
        $branch = Branch::find()->where(["branchName" => $branchName, "status" => 1])->asArray()->one();
        $country = Country::find()->where(["countryName" => $countryName, "status" => 1])->asArray()->all();

        $dropdown = Country::find()->where("status=1")
            ->orderBy('countryName')
            ->asArray()
            ->all();

        $userInThisBranch = 0;
        if (isset($branch) && !empty($branch)) {
            $banner = ContentBranch::find()
                ->where(['title' => "banner", "branchId" => $branch["branchId"]])
                ->asArray()
                ->one();
            if (isset($banner) && !empty($banner)) {
                $bannerDetail = ContentBranchDetail::find()
                    ->where(["contentBranchId" => $banner["contentBranchId"], "status" => 1])
                    ->asArray()
                    ->one();
            }

            $topic = ContentBranch::find()
                ->where(['title' => "TRENDING TOPICS", "branchId" => $branch["branchId"]])
                ->asArray()
                ->one();
            $topicDetail = [];
            if (isset($topic) && count($topic) > 0) {
                $topicDetail = ContentBranchDetail::find()
                    ->where(["contentBranchId" => $topic["contentBranchId"], "status" => 1])
                    ->asArray()
                    ->all();
            }

            $import = ContentBranch::find()
                ->where(['title' => "import", "branchId" => $branch["branchId"]])
                ->asArray()
                ->one();
            if (isset($import) && !empty($import)) {
                $importDetail = ContentBranchDetail::find()
                    ->where(["contentBranchId" => $import["contentBranchId"], "status" => 1])
                    ->asArray()
                    ->one();
            }

            $bangladresh = ContentBranch::find()
                ->where(['title' => "JOIN FREE LIVE WEBINAR", "branchId" => $branch["branchId"]])
                ->asArray()
                ->one();
            if (isset($bangladresh) && !empty($bangladresh)) {
                $bangladreshDetail = ContentBranchDetail::find()
                    ->where(["contentBranchId" => $bangladresh["contentBranchId"], "status" => 1])
                    ->asArray()
                    ->one();
            }

            $webinar = ContentBranch::find()
                ->where(['title' => "Join us on the next webinar", "branchId" => $branch["branchId"]])
                ->asArray()
                ->one();
            if (isset($webinar) && !empty($webinar)) {
                $webinarDetail = ContentBranchDetail::find()
                    ->where(["contentBranchId" => $webinar["contentBranchId"], "status" => 1])
                    ->asArray()
                    ->all();
            }
            $professional = ContentBranch::find()
                ->where(['title' => "OUR PROFESSIONAL SERVICES", "branchId" => $branch["branchId"]])
                ->asArray()
                ->one();
            if (isset($professional) && count($professional) > 0) {
                $professionalDetail = ContentBranchDetail::find()
                    ->where(["contentBranchId" => $professional["contentBranchId"], "status" => 1])
                    ->asArray()
                    ->all();
            }
            $legal = ContentBranch::find()
                ->where(['title' => "Connect Experts", "branchId" => $branch["branchId"]])
                ->asArray()
                ->one();
            if (isset($legal) && !empty($legal)) {
                $legalDetail = ContentBranchDetail::find()
                    ->where(["contentBranchId" => $legal["contentBranchId"], "status" => 1])
                    ->asArray()
                    ->one();
            }
        }

        $h = Content::find()
            ->where(['contentName' => "Footer"])
            ->asArray()
            ->one();

        $r = Content::find()
            ->where(['contentName' => "Services"])
            ->asArray()
            ->one();

        $footer = [];
        $services = [];

        if (isset($h) && !empty($h)) {
            $footer = ContentDetail::find()
                ->where(["contentId" => $h["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }

        if (isset($r) && !empty($r)) {
            $services = ContentDetail::find()
                ->where(["contentId" => $r["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }

        $canEdit = 0;
        if (Yii::$app->user->id) {
            $memberId = Yii::$app->user->id;
            $membertype = MemberHasType::find()
                ->select("mt.memberTypeName")
                ->JOIN("LEFT JOIN", "member_type mt", "member_has_type.memberTypeId = mt.memberTypeId")
                //->leftJoin('member_type', 'member_type.memberTypeId = member_has_type.memberTypeId')
                ->where([
                    "member_has_type.memberId" => $memberId,
                    "memberTypeName" => ["Administrator", "Creater", "Approver", "Frontend", "Backend"]
                ])
                ->asArray()
                ->all();

            if (isset($membertype) && count($membertype) > 0) {
                $canEdit = 1;
            }
            $member = Member::find()
                ->select('b.branchId')
                ->JOIN("LEFT JOIN", "branch b", "b.branchId=member.branchId")
                ->where(["member.memberId" => $memberId, "b.branchName" => $hash])
                ->one();
            if (isset($member) && !empty($member)) {
                $userInThisBranch = 1;
            }
            $memberTypeAdmin = MemberHasType::find()
                ->select("mt.memberTypeName")
                ->JOIN("LEFT JOIN", "member_type mt", "member_has_type.memberTypeId = mt.memberTypeId")
                //->leftJoin('member_type', 'member_type.memberTypeId = member_has_type.memberTypeId')
                ->where([
                    "member_has_type.memberId" => $memberId,
                    "memberTypeName" => "Administrator"
                ])
                ->asArray()
                ->one();

            if (isset($memberTypeAdmin) && !empty($memberTypeAdmin)) {

                $userInThisBranch = 1;
            }
        }
        // throw new Exception($userInThisBranch . '=>' . $canEdit);
        return $this->render('index', [
            "bangladresh" => $bangladresh,
            "legal" => $legal,
            "footer" => $footer,
            "services" => $services,
            "bannerDetail" => $bannerDetail,
            "canEdit" => $canEdit,
            "userInThisBranch" => $userInThisBranch,
            "topic" => $topic,
            "topicDetail" => $topicDetail,
            "import" => $import,
            "importDetail" => $importDetail,
            "bangladreshDetail" => $bangladreshDetail,
            "webinar" => $webinar,
            "webinarDetail" => $webinarDetail,
            "professional" => $professional,
            "professionalDetail" => $professionalDetail,
            "legalDetail" => $legalDetail,
            "country" => $country,
            "dropdown" => $dropdown,
            "branchName" => $branchName,
            "branchId" => $branch["branchId"],
            "banner" => $banner
        ]);
    }

    public function actionServices()
    {

        $ther = Content::find()
            ->where(["contentName" => "Together"])
            ->asArray()
            ->one();

        $tri = Content::find()
            ->where(["contentName" => "Contribute"])
            ->asArray()
            ->one();

        $standing = Content::find()
            ->where(["contentName" => "Understanding"])
            ->asArray()
            ->one();

        $marketing = Content::find()
            ->where(["contentName" => "Companymarket"])
            ->asArray()
            ->one();

        $s = Content::find()
            ->where(["contentName" => "Newservices"])
            ->asArray()
            ->one();

        $shape = Content::find()
            ->where(["contentName" => "Shapestar"])
            ->asArray()
            ->one();

        $sup = Content::find()
            ->where(["contentName" => "Support"])
            ->asArray()
            ->one();

        $lected = Content::find()
            ->where(["contentName" => "Related"])
            ->asArray()
            ->one();

        $dave = Content::find()
            ->where(["contentName" => "Development"])
            ->asArray()
            ->one();

        $nmlider = Content::find()
            ->where(["contentName" => "Nameslider"])
            ->asArray()
            ->one();

        $newcountry = Content::find()
            ->where(["contentName" => "Selectioncountry"])
            ->asArray()
            ->one();

        $icon5 = Content::find()
            ->where(["contentName" => "Garmenticon"])
            ->asArray()
            ->one();

        $together = [];
        $contribute = [];
        $understanding = [];
        $marketing = [];
        $companymarket  = [];
        $newservices = [];
        $shapestar = [];
        $support = [];
        $related = [];
        $development = [];
        $nameslider = [];
        $selectioncountry = [];
        $garmenticon = [];




        if (isset($ther) && !empty($ther)) {
            $together = ContentDetail::find()
                ->where(["contentId" => $ther["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($tri) && !empty($tri)) {
            $contribute = ContentDetail::find()
                ->where(["contentId" => $tri["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($standing) && !empty($standing)) {
            $understanding = ContentDetail::find()
                ->where(["contentId" => $standing["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }

        if (isset($marketing) && !empty($marketing)) {
            $companymarket = ContentDetail::find()
                ->where(["contentId" => $marketing["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($nmlider) && !empty($nmlider)) {
            $nameslider = ContentDetail::find()
                ->where(["contentId" => $nmlider["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($s) && !empty($s)) {
            $newservices = ContentDetail::find()
                ->where(["contentId" => $s["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($shape) && !empty($shape)) {
            $shapestar = ContentDetail::find()
                ->where(["contentId" => $shape["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($sup) && !empty($sup)) {
            $support = ContentDetail::find()
                ->where(["contentId" => $sup["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($lected) && !empty($lected)) {
            $related = ContentDetail::find()
                ->where(["contentId" => $lected["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($dave) && !empty($dave)) {
            $development = ContentDetail::find()
                ->where(["contentId" => $dave["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($newcountry) && !empty($newcountry)) {
            $selectioncountry = ContentDetail::find()
                ->where(["contentId" => $newcountry["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($icon5) && !empty($icon5)) {
            $garmenticon = ContentDetail::find()
                ->where(["contentId" => $icon5["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }

        return $this->render('services', [
            "together" => $together,
            "contribute" => $contribute,
            "understanding" => $understanding,
            "marketing" => $marketing,
            "companymarket" => $companymarket,
            "newservices" => $newservices,
            "shapestar" => $shapestar,
            "support" => $support,
            "related" => $related,
            "development" => $development,
            "nameslider" => $nameslider,
            "selectioncountry" => $selectioncountry,
            "garmenticon" => $garmenticon

        ]);
    }
    public function actionSave()
    {
        $member = Member::find()
            ->where(["memberId" => $_POST['memberId']])
            ->one();

        // throw new Exception(print_r(Yii::$app->request->post(), true));
        // throw new Exception(print_r($member, true));

        if (isset($_POST['firstName'])) {
            $member->memberFirstName = $_POST["firstName"];
            $member->memberLastName = $_POST["lastName"];
            $member->memberNickName = $_POST["nickName"];
            $member->username = $_POST["username"];
            $member->birthDate = $_POST["birthDate"];
            $member->email = $_POST["email"];
            $member->password_hash = md5($_POST["password_hash"]);
            $member->status = 1;
            $member->updateDateTime = new Expression('NOW()');
            if ($member->save(false)) {
                return $this->redirect('signup');
            }
        }
    }


    public function actionFormsignup()
    {
        if (isset($_POST["firstName"])) {
            $member = new Member();
            $member->memberFirstName = $_POST["firstName"];
            $member->memberLastName = $_POST["lastName"];
            $member->memberNickName = $_POST["nickName"];
            $member->username = $_POST["username"];
            $member->birthDate = $_POST["birthDate"];
            $member->email = $_POST["email"];
            $member->password_hash = md5($_POST["password_hash"]);
            $member->status = 1;
            $member->createDateTime = new Expression('NOW()');
            $member->updateDateTime = new Expression('NOW()');
            if ($member->save(false)) {
                return $this->redirect('signup');
            }
        }
        return $this->render('formsignup');
    }

    public function actionTaxassessment()
    {

        $home = Content::find()
            ->where(["contentName" => "Bannerhome"])
            ->asArray()
            ->one();

        $pagassess = Content::find()
            ->where(["contentName" => "Pageassessment"])
            ->asArray()
            ->one();

        $h = Content::find()
            ->where(["contentName" => "Footer"])
            ->asArray()
            ->one();

        $dtx = Content::find()
            ->where(["contentName" => "Detailtaxassessment"])
            ->asArray()
            ->one();

        $ses = Content::find()
            ->where(["contentName" => "Assessee"])
            ->asArray()
            ->one();

        $duti = Content::find()
            ->where(["contentName" => "Duties"])
            ->asArray()
            ->one();

        $where = Content::find()
            ->where(["contentName" => "Textresponsibility"])
            ->asArray()
            ->one();

        $ar = Content::find()
            ->where(["contentName" => "Article"])
            ->asArray()
            ->one();

        $next = Content::find()
            ->where(["contentName" => "Buttonnext"])
            ->asArray()
            ->one();

        $claimer = Content::find()
            ->where(["contentName" => "Pageinformation"])
            ->asArray()
            ->one();

        $over = Content::find()
            ->where(["contentName" => "Overview"])
            ->asArray()
            ->one();

        $importoverview = Content::find()
            ->where(["contentName" => "Branchoverview"])
            ->asArray()
            ->one();

        $mohamma = Content::find()
            ->where(["contentName" => "Namemohammed"])
            ->asArray()
            ->one();

        $wor = Content::find()
            ->where(["contentName" => "Workers"])
            ->asArray()
            ->one();

        $hossain = Content::find()
            ->where(["contentName" => "Namequaziehsan"])
            ->asArray()
            ->one();

        $bannerhome = [];
        $pageassessment = [];
        $footer = [];
        $detailtaxassessment = [];
        $assessee = [];
        $duties = [];
        $textresponsibility = [];
        $article = [];
        $buttonnext = [];
        $pageinformation = [];
        $overview = [];
        $branchoverview = [];
        $namemohammed = [];
        $workers = [];
        $namequaziehsan = [];


        if (isset($home) && count($home)) {
            $bannerhome = ContentDetail::find()
                ->where(["contentId" => $home["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($pagassess) && count($pagassess)) {
            $pageassessment = ContentDetail::find()
                ->where(["contentId" => $pagassess["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($h) && count($h)) {
            $footer = ContentDetail::find()
                ->where(["contentId" => $h["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($dtx) && count($dtx)) {
            $detailtaxassessment = ContentDetail::find()
                ->where(["contentId" => $dtx["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($ses) && count($ses)) {
            $assessee = ContentDetail::find()
                ->where(["contentId" => $ses["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($duti) && count($duti)) {
            $duties = ContentDetail::find()
                ->where(["contentId" => $duti["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($where) && count($where)) {
            $textresponsibility  = ContentDetail::find()
                ->where(["contentId" => $where["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }

        if (isset($ar) && count($ar)) {
            $article  = ContentDetail::find()
                ->where(["contentId" => $ar["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($next) && count($next)) {
            $buttonnext  = ContentDetail::find()
                ->where(["contentId" => $next["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($claimer) && count($claimer)) {
            $pageinformation  = ContentDetail::find()
                ->where(["contentId" => $claimer["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($over) && count($over)) {
            $overview  = ContentDetail::find()
                ->where(["contentId" => $over["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($importoverview) && count($importoverview)) {
            $branchoverview  = ContentDetail::find()
                ->where(["contentId" => $importoverview["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($mohamma) && count($mohamma)) {
            $namemohammed  = ContentDetail::find()
                ->where(["contentId" => $mohamma["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($wor) && count($wor)) {
            $workers  = ContentDetail::find()
                ->where(["contentId" => $wor["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($hossain) && count($hossain)) {
            $namequaziehsan  = ContentDetail::find()
                ->where(["contentId" => $hossain["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }


        return $this->render('taxassessment', [
            "bannerhome" => $bannerhome,
            "pageassessment" => $pageassessment,
            "footer" => $footer,
            "detailtaxassessment" => $detailtaxassessment,
            "assessee" => $assessee,
            "duties" => $duties,
            "textresponsibility" => $textresponsibility,
            "article" => $article,
            "buttonnext" => $buttonnext,
            "pageinformation" => $pageinformation,
            "overview" => $overview,
            "branchoverview" => $branchoverview,
            "namemohammed" => $namemohammed,
            "workers" => $workers,
            "namequaziehsan" => $namequaziehsan
        ]);
    }

    public function actionContact2()
    {
        return $this->render('contact2');
    }
    public function actionLogin()
    {
        return $this->render('login');
    }

    public function actionPrivacy()
    {
        return $this->render('privacy');
    }
    public function actionResources()
    {

        $resource = Content::find()
            ->where(["contentName" => "Bannerresource"])
            ->asArray()
            ->one();

        $tio = Content::find()
            ->where(["contentName" => "National"])
            ->asArray()
            ->one();

        $des = Content::find()
            ->where(["contentName" => "Description"])
            ->asArray()
            ->one();

        $blede = Content::find()
            ->where(["contentName" => "Tabledetail"])
            ->asArray()
            ->one();

        $bannerresource = [];
        $national = [];
        $description = [];
        $tabledetail = [];

        if (isset($resource) && !empty($resource)) {
            $bannerresource = ContentDetail::find()
                ->where(["contentId" => $resource["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($tio) && !empty($tio)) {
            $national = ContentDetail::find()
                ->where(["contentId" => $tio["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($des) && !empty($des)) {
            $description = ContentDetail::find()
                ->where(["contentId" => $des["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($blede) && !empty($blede)) {
            $tabledetail = ContentDetail::find()
                ->where(["contentId" => $blede["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }


        return $this->render('resources', [
            "bannerresource" => $bannerresource,
            "national" => $national,
            "description" => $description,
            "tabledetail" => $tabledetail,
        ]);
    }
    public function actionUpdateImage()
    {
        $contentDetail = ContentDetail::find()->where("image is not null")->all();
        if (isset($contentDetail) && count($contentDetail) > 0) {
            foreach ($contentDetail as $content) :
                $img = explode('/', $content->image);
                $defaultImage = $content->image;
                if ($img[0] == 'img') {
                    $newName = 'image/' . $defaultImage;
                    $content->image = $newName;
                    $content->save(false);
                }
            endforeach;
        }
    }

    public function actionSaveClient()
    {
        $res = [];
        if (isset($_POST["country"])) {
            // throw new exception(print_r(Yii::$app->request->post(), true));
            $client = new Client();
            $client->countryId = $_POST["country"];
            $client->typePerson = $_POST["typeperson"];
            $client->company = $_POST["company"];
            $client->name = $_POST["name"];
            $client->position = $_POST["position"];
            $client->email = $_POST["email"];
            $client->phoneNumber = $_POST["phonenumber"];
            $client->businessType = $_POST["businesstype"];
            $client->question = $_POST["question"];
            $client->detail = $_POST["detail"];
            $client->createDateTime = new Expression('NOW()');
            $client->updateDateTime = new Expression('NOW()');

            if ($client->save(false)) {
                $res["status"] = true;
            }
        }
        return json_encode($res);
    }
    public function actionUpdateShowContent()
    {
        $showcontent = Part::find()
            ->where(["partName" => $_POST["partId"]])
            ->one();

        if (isset($showcontent) && !empty($showcontent)) {
            $showcontent->status = $_POST["switches"];

            $showcontent->save(false);
        }
        $res["status"] = true;
        return json_encode($res);
    }
    public function actionUpdateShowContentBranch()
    {
        $showcontent = Part::find()
            ->where(["partName" => $_POST["partId"], "branchId" => $_POST['branchId']])
            ->one();

        if (isset($showcontent) && !empty($showcontent)) {
            $showcontent->status = $_POST["switches"];

            $showcontent->save(false);
        }
        $res["status"] = true;
        return json_encode($res);
    }
}
