<?php

namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use common\models\tokyoconsulting\Content;
use common\models\tokyoconsulting\ContentDetail;
use Exception;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use PHPUnit\Framework\Constraint\Count;
use yii\widgets\ContentDecorator;

/**
 * Site controller
 */
class SiteCountryController extends Controller
{

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => \yii\web\ErrorAction::class,
            ],
            'captcha' => [
                'class' => \yii\captcha\CaptchaAction::class,
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {

        $pe = Content::find()
            ->where(['contentName' => "Shape"])
            ->asArray()
            ->one();

        $port = Content::find()
            ->where(['contentName' => "Import"])
            ->asArray()
            ->one();

        $la = Content::find()
            ->where(['contentName' => "Bangladresh"])
            ->asArray()
            ->one();

        $nar = Content::find()
            ->where(['contentName' => "Webinar"])
            ->asArray()
            ->one();

        $pro = Content::find()
            ->where(['contentName' => "Professiona"])
            ->asArray()
            ->one();

        $gal = Content::find()
            ->where(['contentName' => "Legal"])
            ->asArray()
            ->one();

        $h = Content::find()
            ->where(['contentName' => "Footer"])
            ->asArray()
            ->one();

        $tp = Content::find()
            ->where(['contentName' => "Topic"])
            ->asArray()
            ->one();




        $shape = [];
        $import = [];
        $bangladresh = [];
        $webinar = [];
        $professiona = [];
        $legal = [];
        $footer = [];
        $topic = [];

        if (isset($pe) && !empty($pe)) {
            $shape = ContentDetail::find()
                ->where(["contentId" => $pe["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($port) && !empty($port)) {
            $import = ContentDetail::find()
                ->where(["contentId" => $port["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($la) && !empty($la)) {
            $bangladresh = ContentDetail::find()
                ->where(["contentId" => $la["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($nar) && !empty($nar)) {
            $webinar = ContentDetail::find()
                ->where(["contentId" => $nar["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($pro) && !empty($pro)) {
            $professiona = ContentDetail::find()
                ->where(["contentId" => $pro["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($gal) && !empty($gal)) {
            $legal = ContentDetail::find()
                ->where(["contentId" => $gal["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($h) && !empty($h)) {
            $footer = ContentDetail::find()
                ->where(["contentId" => $h["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($tp) && !empty($tp)) {
            $topic = ContentDetail::find()
                ->where(["contentId" => $tp["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }



        // throw new Exception(count($topic));


        return $this->render('index', [
            "shape" => $shape,
            "import" => $import,
            "bangladresh" => $bangladresh,
            "webinar" => $webinar,
            "professiona" => $professiona,
            "legal" => $legal,
            "footer" => $footer,
            "topic" => $topic
        ]);
    }
    public function actionNewsletter()
    {


        $new = Content::find()
            ->where(["contentName" => "Newsletter"])
            ->asArray()
            ->one();

        $port = Content::find()
            ->where(["contentName" => "Import"])
            ->asArray()
            ->one();

        $ol = Content::find()
            ->where(["contentName" => "Olderposts"])
            ->asArray()
            ->one();

        $set = Content::find()
            ->where(["contentName" => "Asset"])
            ->asArray()
            ->one();

        $tax = Content::find()
            ->where(["contentName" => "Taxassessment1"])
            ->asArray()
            ->one();

        $ment = Content::find()
            ->where(["contentName" => "Taxassessment2"])
            ->asArray()
            ->one();

        $footerbangla = Content::find()
            ->where(["contentName" => "Footerbangladresh"])
            ->asArray()
            ->one();

        $tp = Content::find()
            ->where(["contentName" => "Topic"])
            ->asArray()
            ->one();


        $newsletter = [];
        $import = [];
        $olderposts = [];
        $asset = [];
        $taxassessment1 = [];
        $taxassessment2 = [];
        $footerbangladresh = [];
        $topic = [];


        if (isset($new) && !empty($new)) {
            $newsletter = ContentDetail::find()
                ->where(["contentId" => $new["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($port) && !empty($port)) {
            $import = ContentDetail::find()
                ->where(["contentId" => $port["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($ol) && !empty($ol)) {
            $olderposts = ContentDetail::find()
                ->where(["contentId" => $ol["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($set) && !empty($set)) {
            $asset = ContentDetail::find()
                ->where(["contentId" => $set["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($tax) && !empty($tax)) {
            $taxassessment1 = ContentDetail::find()
                ->where(["contentId" => $tax["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($ment) && !empty($ment)) {
            $taxassessment2 = ContentDetail::find()
                ->where(["contentId" => $ment["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($footerbangla) && !empty($footerbangla)) {
            $footerbangladresh = ContentDetail::find()
                ->where(["contentId" => $footerbangla["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($tp) && !empty($tp)) {
            $topic = ContentDetail::find()
                ->where(["contentId" => $tp["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }

        // throw new Exception(count($topic));
        // throw new Exception(count($taxassessment1));
        // throw new Exception(count($taxassessment2));

        return $this->render('newsletter', [
            "newsletter" => $newsletter,
            "import" => $import,
            "olderposts" => $olderposts,
            "asset" => $asset,
            "taxassessment1" => $taxassessment1,
            "taxassessment2" => $taxassessment2,
            "footerbangladresh" => $footerbangladresh,
            "topic" => $topic
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

        $country = Content::find()
            ->where(["contentName" => "Click"])
            ->asArray()
            ->one();

        $marketing = Content::find()
            ->where(["contentName" => "Companymarket"])
            ->asArray()
            ->one();

        $bk = Content::find()
            ->where(["contentName" => "Background"])
            ->asArray()
            ->one();

        $s = Content::find()
            ->where(["contentName" => "Bannerservices"])
            ->asArray()
            ->one();

        $o = Content::find()
            ->where(["contentName" => "Founder"])
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

        $choose = Content::find()
            ->where(["contentName" => "Chooseservices"])
            ->asArray()
            ->one();

        $dave = Content::find()
            ->where(["contentName" => "Development"])
            ->asArray()
            ->one();





        $together = [];
        $contribute = [];
        $understanding = [];
        $click = [];
        $companymarket  = [];
        $bannerservices = [];
        $background = [];
        $founder = [];
        $shapestar = [];
        $support = [];
        $chooseservices = [];
        $development = [];



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
        if (isset($country) && !empty($country)) {
            $click = ContentDetail::find()
                ->where(["contentId" => $country["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($marketing) && !empty($marketing)) {
            $companymarket = ContentDetail::find()
                ->where(["contentId" => $marketing["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($bk) && !empty($bk)) {
            $background = ContentDetail::find()
                ->where(["contentId" => $bk["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($s) && !empty($s)) {
            $bannerservices = ContentDetail::find()
                ->where(["contentId" => $s["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($o) && !empty($o)) {
            $founder = ContentDetail::find()
                ->where(["contentId" => $o["contentId"], "status" => 1])
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
        if (isset($choose) && !empty($choose)) {
            $chooseservices = ContentDetail::find()
                ->where(["contentId" => $choose["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($dave) && !empty($dave)) {
            $development = ContentDetail::find()
                ->where(["contentId" => $dave["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }


        // throw new Exception(count($together));
        // throw new Exception(count($contribute));
        // throw new Exception(count($understanding));
        // throw new Exception(count($click));
        // throw new  Exception(count($companymarket));
        // throw new Exception(count($chooseservices));
        // throw new Exception(count($development));

        return $this->render('services', [
            "together" => $together,
            "contribute" => $contribute,
            "understanding" => $understanding,
            "click" => $click,
            "companymarket" => $companymarket,
            "background" => $background,
            "banneservices" => $bannerservices,
            "founder" => $founder,
            "shapestar" => $shapestar,
            "support" => $support,
            "chooseservices" => $chooseservices,
            "development" => $development,


        ]);
    }
    public function actionWebinar()
    {

        $binar = Content::find()
            ->where(["contentName" => "Webinarvideo"])
            ->asArray()
            ->one();

        $icon = Content::find()
            ->where(["contentName" => "Everyweek"])
            ->asArray()
            ->one();

        $icon2 = Content::find()
            ->where(["contentName" => "Question"])
            ->asArray()
            ->one();

        $icon3 = Content::find()
            ->where(["contentName" => "Mins"])
            ->asArray()
            ->one();

        $la = Content::find()
            ->where(["contentName" => "Bangladresh"])
            ->asArray()
            ->one();

        $nar = Content::find()
            ->where(["contentName" => "Webinar"])
            ->asArray()
            ->one();

        $regis = Content::find()
            ->where(["contentName" => "Register"])
            ->asArray()
            ->one();

        $playlist = Content::find()
            ->where(["contentName" => "webinarplaylist"])
            ->asArray()
            ->one();

        $py = Content::find()
            ->where(["contentName" => "Player1"])
            ->asArray()
            ->one();

        $pla = Content::find()
            ->where(["contentName" => "Player2"])
            ->asArray()
            ->one();

        $pants = Content::find()
            ->where(["contentName" => "Participants"])
            ->asArray()
            ->one();

        $com = Content::find()
            ->where(["contentName" => "Comment"])
            ->asArray()
            ->one();

        $mee = Content::find()
            ->where(["contentName" => "Meet"])
            ->asArray()
            ->one();






        $webinarvideo = [];
        $everyweek = [];
        $question = [];
        $mins = [];
        $bangladresh = [];
        $webinar = [];
        $register = [];
        $webinarplaylist = [];
        $player1 = [];
        $player2 = [];
        $participants  = [];
        $comment = [];
        $meet = [];


        if (isset($binar) && !empty($binar)) {
            $webinarvideo = ContentDetail::find()
                ->where(["contentId" => $binar["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($icon) && !empty($icon)) {
            $everyweek = ContentDetail::find()
                ->where(["contentId" => $icon["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($icon2) && !empty($icon2)) {
            $question = ContentDetail::find()
                ->where(["contentId" => $icon2["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($icon3) && !empty($icon3)) {
            $mins = ContentDetail::find()
                ->where(["contentId" => $icon3["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($la) && !empty($la)) {
            $bangladresh = ContentDetail::find()
                ->where(["contentId" => $la["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($nar) && !empty($nar)) {
            $webinar = ContentDetail::find()
                ->where(["contentId" => $nar["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($register) && !empty($regis)) {
            $register = ContentDetail::find()
                ->where(["contentId" => $regis["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($playlist) && !empty($playlist)) {
            $webinarplaylist = ContentDetail::find()
                ->where(["contentId" => $playlist["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($py) && !empty($py)) {
            $player1 = ContentDetail::find()
                ->where(["contentId" => $py["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($pla) && !empty($pla)) {
            $player2 = ContentDetail::find()
                ->where(["contentId" => $pla["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($pants) && !empty($pants)) {
            $participants = ContentDetail::find()
                ->where(["contentId" => $pants["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($com) && !empty($com)) {
            $comment = ContentDetail::find()
                ->where(["contentId" => $com["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($mee) && !empty($mee)) {
            $meet = ContentDetail::find()
                ->where(["contentId" => $mee["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }

        // throw new Exception(count($webinar));
        // throw new Exception(count($everyweek));
        // throw new Exception(count($question));

        return $this->render('webinar', [
            "webinarvideo" => $webinarvideo,
            "everyweek" => $everyweek,
            "question" => $question,
            "mins" => $mins,
            "bangladresh" => $bangladresh,
            "webinar" => $webinar,
            "register" => $register,
            "webinarplaylist" => $webinarplaylist,
            "player1" => $player1,
            "player2" => $player2,
            "participants" => $participants,
            "comment" => $comment,
            "meet" => $meet,
        ]);
    }
    public function actionWebinarVideo()
    {

        $pagevideo = Content::find()
            ->where(["contentName" => "Pagewebinarvideo"])
            ->asArray()
            ->one();

        $name1 = Content::find()
            ->where(["contentName" => "Namevideo"])
            ->asArray()
            ->one();

        $mary = Content::find()
            ->where(["contentName" => "Summary"])
            ->asArray()
            ->one();

        $subfree = Content::find()
            ->where(["contentName" => "Subwebinar"])
            ->asArray()
            ->one();


        $pagewebinarvideo = [];
        $namevideo = [];
        $summary = [];
        $subwebinar = [];

        if (isset($pagevideo) && !empty($pagevideo)) {
            $pagewebinarvideo = ContentDetail::find()

                ->where(["contentId" => $pagevideo["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($name1) && !empty($name1)) {
            $namevideo = ContentDetail::find()

                ->where(["contentId" => $name1["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($mary) && !empty($mary)) {
            $summary = ContentDetail::find()

                ->where(["contentId" => $mary["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($subfree) && !empty($subfree)) {
            $subwebinar = ContentDetail::find()

                ->where(["contentId" => $subfree["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }

        return $this->render('webinar-video', [
            "pagewebinarvideo" => $pagewebinarvideo,
            "namevideo" => $namevideo,
            "summary" => $summary,
            "subwebinar" => $subwebinar
        ]);
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
    public function actionAbout2()
    {

        $abo = Content::find()
            ->where(["contentName" => "Bannerabout"])
            ->asArray()
            ->one();

        $has = Content::find()
            ->where(["contentName" => "Historytokyo"])
            ->asArray()
            ->one();

        $ches = Content::find()
            ->where(["contentName" => "Branches"])
            ->asArray()
            ->one();

        $lishment = Content::find()
            ->where(["contentName" => "Establishment"])
            ->asArray()
            ->one();

        $exten = Content::find()
            ->where(["contentName" => "Extendinglocation"])
            ->asArray()
            ->one();

        $tokyosul = Content::find()
            ->where(["contentName" => "Tokyoconsulting"])
            ->asArray()
            ->one();

        $expansion = Content::find()
            ->where(["contentName" => "Brand"])
            ->asArray()
            ->one();

        $the = Content::find()
            ->where(["contentName" => "Thegrowth"])
            ->asArray()
            ->one();
        $ball = Content::find()
            ->where(["contentName" => "Globalexpansion"])
            ->asArray()
            ->one();

        $foun = Content::find()
            ->where(["contentName" => "Aboutfounder"])
            ->asArray()
            ->one();

        $bannerabout = [];
        $historytokyo = [];
        $branches = [];
        $establishment = [];
        $extendinglocation = [];
        $tokyoconsulting = [];
        $brand = [];
        $thegrowth = [];
        $globalexpansion = [];
        $aboutfounder = [];



        if (isset($abo) && !empty($abo)) {
            $bannerabout = ContentDetail::find()
                ->where(["contentId" => $abo["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($has) && !empty($has)) {
            $historytokyo = ContentDetail::find()
                ->where(["contentId" => $has["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($ches) && !empty($ches)) {
            $branches = ContentDetail::find()
                ->where(["contentId" => $ches["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($lishment) && !empty($lishment)) {
            $establishment = ContentDetail::find()
                ->where(["contentId" => $lishment["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($exten) && !empty($exten)) {
            $extendinglocation = ContentDetail::find()
                ->where(["contentId" => $exten["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($tokyosul) && !empty($tokyosul)) {
            $tokyoconsulting = ContentDetail::find()
                ->where(["contentId" => $tokyosul["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($expansion) && !empty($expansion)) {
            $brand = ContentDetail::find()
                ->where(["contentId" => $expansion["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($the) && !empty($the)) {
            $thegrowth = ContentDetail::find()
                ->where(["contentId" => $the["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($ball) && !empty($ball)) {
            $globalexpansion = ContentDetail::find()
                ->where(["contentId" => $ball["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($foun) && !empty($foun)) {
            $aboutfounder = ContentDetail::find()
                ->where(["contentId" => $foun["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }

        return $this->render('about2', [
            "bannerabout" => $bannerabout,
            "historytokyo" => $historytokyo,
            "branches" => $branches,
            "establishment" => $establishment,
            "extendinglocation" => $extendinglocation,
            "tokyoconsulting" => $tokyoconsulting,
            "brand" => $brand,
            "thegrowth" => $thegrowth,
            "globalexpansion" => $globalexpansion,
            "aboutfounder" => $aboutfounder
        ]);
    }
    public function actionContact2()
    {
        return $this->render('contact2');
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
            "tabledetail" => $tabledetail
        ]);
    }
}
