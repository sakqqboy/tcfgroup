<?php

namespace frontend\controllers;

use backend\models\tokyoconsulting\Member;
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
use Exception;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\tokyoconsulting\Content as TokyoconsultingContent;
use frontend\models\tokyoconsulting\ContentDetail;
use frontend\models\tokyoconsulting\master\ContentMaster;
use frontend\models\tokyoconsulting\MemberHasType;
use PHPUnit\TextUI\Command;
use yii\db\Expression;
use yii\widgets\ContentDecorator;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],

                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    //  'logout' => ['post'],
                ],
            ],
        ];
    }

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

        // throw new Exception(Yii::$app->user->id);

        $index = Content::find()
            ->where(["contentName" => "Banner"])
            ->asArray()
            ->one();

        $b = Content::find()
            ->where(["contentName" => "Branch"])
            ->asArray()
            ->one();

        $c = Content::find()
            ->where(["contentName" => "Company"])
            ->asArray()
            ->one();

        $sertitle = Content::find()
            ->where(["contentName" => "Titleservice"])
            ->asArray()
            ->one();

        $d = Content::find()
            ->where(["contentName" => "Business"])
            ->asArray()
            ->one();
        $e = Content::find()
            ->where(["contentName" => "Society"])
            ->asArray()
            ->one();

        $f = Content::find()
            ->where(["contentName" => "About"])
            ->asArray()
            ->one();
        $h = Content::find()
            ->where(["contentName" => "Footer"])
            ->asArray()
            ->one();

        $n = Content::find()
            ->where(["contentName" => "Country"])
            ->asArray()
            ->one();

        $k = Content::find()
            ->where(["contentName" => "Branchcountry"])
            ->asArray()
            ->one();

        $p = Content::find()
            ->where(["contentName" => "Countrypage"])
            ->asArray()
            ->one();

        $banners = [];
        $branch = [];
        $company = [];
        $business = [];
        $society = [];
        $about = [];
        $footer = [];
        $country = [];
        $branchcountry = [];
        $countrypage = [];
        $titleservice = [];




        if (isset($index) && !empty($index)) {
            $banners = ContentDetail::find()
                ->where(["contentId" => $index["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }

        if (isset($b) && !empty($b)) {
            $branch = ContentDetail::find()
                ->where(["contentId" => $b["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($c) && !empty($c)) {
            $company = ContentDetail::find()
                ->where(["contentId" => $c["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($d) && !empty($d)) {
            $business = ContentDetail::find()
                ->where(["contentId" => $d["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($e) && !empty($e)) {
            $society = ContentDetail::find()
                ->where(["contentId" => $e["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($f) && !empty($f)) {
            $about = ContentDetail::find()
                ->where(["contentId" => $f["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($h) && !empty($h)) {
            $footer = ContentDetail::find()
                ->where(["contentId" => $h["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($n) && !empty($n)) {
            $country = ContentDetail::find()
                ->where(["contentId" => $n["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($k) && !empty($k)) {
            $branchcountry = ContentDetail::find()
                ->where(["contentId" => $k["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($p) && !empty($p)) {
            $countrypage = ContentDetail::find()
                ->where(["contentId" => $p["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($sertitle) && !empty($sertitle)) {
            $titleservice = ContentDetail::find()
                ->where(["contentId" => $sertitle["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        $admin = 0;
        if (Yii::$app->user->id) {
            $memberTypeAdmin = MemberHasType::find()
                ->select("mt.memberTypeName")
                ->JOIN("LEFT JOIN", "member_type mt", "member_has_type.memberTypeId = mt.memberTypeId")
                //->leftJoin('member_type', 'member_type.memberTypeId = member_has_type.memberTypeId')
                ->where([
                    "member_has_type.memberId" => Yii::$app->user->id,
                    "memberTypeName" => "Administrator"
                ])
                ->asArray()
                ->one();
        }

        if (isset($memberTypeAdmin) && !empty($memberTypeAdmin)) {

            $admin = 1;
        }
        // throw new Exception(count($banners));
        // throw new Exception(count($branchcountry));
        // throw new Exception(count($company));

        return $this->render('index', [
            "banners" => $banners,
            "branch" => $branch,
            "company" => $company,
            "business" => $business,
            "society" => $society,
            "about" => $about,
            "footer" => $footer,
            "country" => $country,
            "branchcountry" => $branchcountry,
            "countrypage" => $countrypage,
            "titleservice" => $titleservice,
            "admin" => $admin,
            "index" => $index,
            "pp" => $p,
            "c" => $c,
            "d" => $d,
            "e" => $e,
            "f" => $f

        ]);
    }

    public function actionServices()
    {

        $r = Content::find()
            ->where(["contentName" => "Services"])
            ->asArray()
            ->one();

        $s = Content::find()
            ->where(["contentName" => "Bannerservices"])
            ->asArray()
            ->one();

        $x = Content::find()
            ->where(["contentName" => "Box"])
            ->asArray()
            ->one();

        $t = Content::find()
            ->where(["contentName" => "Item"])
            ->asArray()
            ->one();

        $d = Content::find()
            ->where(["contentName" => "Detail"])
            ->asArray()
            ->one();

        $tokyo = Content::find()
            ->where(["contentName" => "Picturegraphics"])
            ->asArray()
            ->one();

        $o = Content::find()
            ->where(["contentName" => "Founder"])
            ->asArray()
            ->one();

        $u = Content::find()
            ->where(["contentName" => "Star"])
            ->asArray()
            ->one();
        $v = Content::find()
            ->where(["contentName" => "Itemstar"])
            ->asArray()
            ->one();

        $g = Content::find()
            ->where(["contentName" => "Data"])
            ->asArray()
            ->one();

        $w = Content::find()
            ->where(["contentName" => "Data"])
            ->asArray()
            ->one();

        $q = Content::find()
            ->where(["contentName" => "Button"])
            ->asArray()
            ->one();

        $tcf = Content::find()
            ->where(["contentName" => "Best"])
            ->asArray()
            ->one();

        $pic = Content::find()
            ->where(["contentName" => "Accounting"])
            ->asArray()
            ->one();

        $table = Content::find()
            ->where(["contentName" => "Taxation"])
            ->asArray()
            ->one();

        $select = Content::find()
            ->where(["contentName" => "Stage"])
            ->asArray()
            ->one();

        $bk = Content::find()
            ->where(["contentName" => "Background"])
            ->asArray()
            ->one();

        $mos = Content::find()
            ->where(["contentName" => "Most"])
            ->asArray()
            ->one();

        $tryin = Content::find()
            ->where(["contentName" => "Countryindex2"])
            ->asArray()
            ->one();


        $services = [];
        $bannerservices = [];
        $box = [];
        $item = [];
        $detail = [];
        $picturegraphics = [];
        $founder = [];
        $star = [];
        $itemstar = [];
        $data = [];
        $drive = [];
        $button = [];
        $best = [];
        $accounting = [];
        $taxation = [];
        $stage = [];
        $background = [];
        $most = [];
        $countryindex2 = [];


        if (isset($r) && !empty($r)) {
            $services = ContentDetail::find()
                ->where(["contentId" => $r["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($s) && !empty($s)) {
            $bannerservices = ContentDetail::find()
                ->where(["contentId" => $s["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($x) && !empty($x)) {
            $box = ContentDetail::find()
                ->where(["contentId" => $x["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($t) && !empty($t)) {
            $item = ContentDetail::find()
                ->where(["contentId" => $t["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($d) && !empty($d)) {
            $detail = ContentDetail::find()
                ->where(["contentId" => $d["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($tokyo) && !empty($tokyo)) {
            $picturegraphics = ContentDetail::find()
                ->where(["contentId" => $tokyo["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($o) && !empty($o)) {
            $founder = ContentDetail::find()
                ->where(["contentId" => $o["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($u) && !empty($u)) {
            $star = ContentDetail::find()
                ->where(["contentId" => $u["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($v) && !empty($v)) {
            $itemstar = ContentDetail::find()
                ->where(["contentId" => $v["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($g) && !empty($g)) {
            $data = ContentDetail::find()
                ->where(["contentId" => $g["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($w) && !empty($w)) {
            $drive = ContentDetail::find()
                ->where(["contentId" => $w["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($q) && !empty($q)) {
            $button = ContentDetail::find()
                ->where(["contentId" => $q["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($tcf) && !empty($tcf)) {
            $best = ContentDetail::find()
                ->where(["contentId" => $tcf["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }

        if (isset($pic) && !empty($pic)) {
            $accounting = ContentDetail::find()
                ->where(["contentId" => $pic["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($table) && !empty($table)) {
            $taxation = ContentDetail::find()
                ->where(["contentId" => $table["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($select) && !empty($select)) {
            $stage = ContentDetail::find()
                ->where(["contentId" => $select["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($bk) && !empty($bk)) {
            $background = ContentDetail::find()
                ->where(["contentId" => $bk["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($mos) && !empty($mos)) {
            $most = ContentDetail::find()
                ->where(["contentId" => $mos["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($tryin) && !empty($tryin)) {
            $countryindex2 = ContentDetail::find()
                ->where(["contentId" => $tryin["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        return $this->render('services', [
            "services" => $services,
            "bannerservices" => $bannerservices,
            "box" => $box,
            "item" => $item,
            "detail" => $detail,
            "picturegraphics" => $picturegraphics,
            "founder" => $founder,
            "star" => $star,
            "itemstar" => $itemstar,
            "data" => $data,
            "drive" => $drive,
            "button" => $button,
            "best" => $best,
            "accounting" => $accounting,
            "taxation" => $taxation,
            "stage" => $stage,
            "background" => $background,
            "most" => $most,
            "countryindex2" => $countryindex2

        ]);
    }

    public function actionTest()
    {


        return $this->render('in');
    }


    public function actionAbout1()
    {

        $ut = Content::find()
            ->where(["contentName" => "Vision"])
            ->asArray()
            ->one();

        $ce = Content::find()
            ->where(["contentName" => "Existence"])
            ->asArray()
            ->one();

        $tr = Content::find()
            ->where(["contentName" => "Strategy"])
            ->asArray()
            ->one();

        $ld = Content::find()
            ->where(["contentName" => "Should"])
            ->asArray()
            ->one();

        $group = Content::find()
            ->where(["contentName" => "Consultinggroup"])
            ->asArray()
            ->one();

        $h = Content::find()
            ->where(["contentName" => "Footer"])
            ->asArray()
            ->one();

        $ft = Content::find()
            ->where(["contentName" => "Footercontact"])
            ->asArray()
            ->one();



        $vision = [];
        $existence = [];
        $strategy = [];
        $should = [];
        $consultinggroup = [];
        $footer = [];
        $footercontact = [];

        if (isset($ut) && !empty($ut)) {
            $vision = ContentDetail::find()
                ->where(["contentId" => $ut["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($ce) && !empty($ce)) {
            $existence = ContentDetail::find()
                ->where(["contentId" => $ce["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($tr) && !empty($tr)) {
            $strategy = ContentDetail::find()
                ->where(["contentId" => $tr["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($ld) && !empty($ld)) {
            $should = ContentDetail::find()
                ->where(["contentId" => $ld["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($group) && !empty($group)) {
            $consultinggroup = ContentDetail::find()
                ->where(["contentId" => $group["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($h) && !empty($h)) {
            $footer = ContentDetail::find()
                ->where(["contentId" => $h["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($ft) && !empty($ft)) {
            $footercontact = ContentDetail::find()
                ->where(["contentId" => $ft["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }


        return $this->render('about1', [
            "vision" => $vision,
            "existence" => $existence,
            "strategy" => $strategy,
            "should" => $should,
            "consultinggroup" => $consultinggroup,
            "footer" => $footer,
            "footercontact" => $footercontact,

        ]);
    }
    public function actionCareer()
    {

        $jobtcf = Content::find()
            ->where(["contentName" => "Career"])
            ->asArray()
            ->one();

        $the = Content::find()
            ->where(["contentName" => "Future"])
            ->asArray()
            ->one();

        $more = Content::find()
            ->where(["contentName" => "Learnmore"])
            ->asArray()
            ->one();

        $ex = Content::find()
            ->where(["contentName" => "Explore"])
            ->asArray()
            ->one();

        $ap = Content::find()
            ->where(["contentName" => "Apply"])
            ->asArray()
            ->one();

        $pr = Content::find()
            ->where(["contentName" => "Professional"])
            ->asArray()
            ->one();

        $cu = Content::find()
            ->where(["contentName" => "Culture"])
            ->asArray()
            ->one();

        $vo = Content::find()
            ->where(["contentName" => "Video"])
            ->asArray()
            ->one();

        $di = Content::find()
            ->where(["contentName" => "Discovercountry"])
            ->asArray()
            ->one();

        $in = Content::find()
            ->where(["contentName" => "Incountry"])
            ->asArray()
            ->one();

        $sh = Content::find()
            ->where(["contentName" => "Show"])
            ->asArray()
            ->one();

        $btc = Content::find()
            ->where(["contentName" => "Badge"])
            ->asArray()
            ->one();

        $cd = Content::find()
            ->where(["contentName" => "Card"])
            ->asArray()
            ->one();

        $ft = Content::find()
            ->where(["contentName" => "Footercontact"])
            ->asArray()
            ->one();






        $career = [];
        $future = [];
        $learnmore = [];
        $explore = [];
        $apply = [];
        $professional = [];
        $culture = [];
        $video = [];
        $discovercountry = [];
        $incountry = [];
        $show = [];
        $badge = [];
        $card = [];
        $footercontact = [];


        if (isset($jobtcf) && !empty($jobtcf)) {
            $career = ContentDetail::find()
                ->where(["contentId" => $jobtcf["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($the) && !empty($the)) {
            $future = ContentDetail::find()
                ->where(["contentId" => $the["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($more) && !empty($more)) {
            $learnmore = ContentDetail::find()
                ->where(["contentId" => $more["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($ex) && !empty($ex)) {
            $explore = ContentDetail::find()
                ->where(["contentId" => $ex["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($ap) && !empty($ap)) {
            $apply = ContentDetail::find()
                ->where(["contentId" => $ap["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($pr) && !empty($pr)) {
            $professional = ContentDetail::find()
                ->where(["contentId" => $pr["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($cu) && !empty($cu)) {
            $culture =  ContentDetail::find()
                ->where(["contentId" => $cu["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($vo) && !empty($vo)) {
            $video =  ContentDetail::find()
                ->where(["contentId" => $vo["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($di) && !empty($di)) {
            $discovercountry =  ContentDetail::find()
                ->where(["contentId" => $di["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($in) && !empty($in)) {
            $incountry =  ContentDetail::find()
                ->where(["contentId" => $in["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($sh) && !empty($sh)) {
            $show =  ContentDetail::find()
                ->where(["contentId" => $sh["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($btc) && !empty($btc)) {
            $badge =  ContentDetail::find()
                ->where(["contentId" => $btc["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($cd) && !empty($cd)) {
            $card =  ContentDetail::find()
                ->where(["contentId" => $cd["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($ft) && !empty($ft)) {
            $footercontact =  ContentDetail::find()
                ->where(["contentId" => $ft["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }

        return $this->render('career', [
            "career" => $career,
            "future" => $future,
            "learnmore" => $learnmore,
            "explore" => $explore,
            "apply" => $apply,
            "professional" => $professional,
            "culture" => $culture,
            "video" => $video,
            "discovercountry" => $discovercountry,
            "incountry" => $incountry,
            "show" => $show,
            "badge" => $badge,
            "card" => $card,
            "footercontact" => $footercontact
        ]);
    }
    public function actionPeople()
    {

        $at = Content::find()
            ->where(["contentName" => "People"])
            ->asArray()
            ->one();

        $our = Content::find()
            ->where(["contentName" => "Textmain"])
            ->asArray()
            ->one();

        $person = Content::find()
            ->where(["contentName" => "Personnel"])
            ->asArray()
            ->one();

        $uno = Content::find()
            ->where(["contentName" => "Kuno"])
            ->asArray()
            ->one();

        $meetting = Content::find()
            ->where(["contentName" => "Global"])
            ->asArray()
            ->one();

        $incountry = Content::find()
            ->where(["contentName" => "Insider"])
            ->asArray()
            ->one();

        $work = Content::find()
            ->where(["contentName" => "Doctrines"])
            ->asArray()
            ->one();



        $people = [];
        $textmain = [];
        $personnel = [];
        $kuno = [];
        $global = [];
        $insider = [];
        $doctrines = [];

        if (isset($at) && !empty($at)) {
            $people = ContentDetail::find()
                ->where(["contentId" => $at["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($our) && !empty($our)) {
            $textmain = ContentDetail::find()
                ->where(["contentId" => $our["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($person) && !empty($person)) {
            $personnel = ContentDetail::find()
                ->where(["contentId" => $person["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }

        if (isset($uno) && !empty($uno)) {
            $kuno = ContentDetail::find()
                ->where(["contentId" => $uno["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }

        if (isset($meetting) && !empty($meetting)) {
            $global = ContentDetail::find()
                ->where(["contentId" => $meetting["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($incountry) && !empty($incountry)) {
            $insider = ContentDetail::find()
                ->where(["contentId" => $incountry["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($work) && !empty($work)) {
            $doctrines = ContentDetail::find()
                ->where(["contentId" => $work["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }





        return $this->render('people', [
            "people" => $people,
            "textmain" => $textmain,
            "personnel" => $personnel,
            "kuno" => $kuno,
            "global" => $global,
            "insider" => $insider,
            "doctrines" => $doctrines,
        ]);
    }


    public function actionContact1()
    {


        $tact = Content::find()
            ->where(["contentName" => "Contact"])
            ->asArray()
            ->one();

        $ft = Content::find()
            ->where(["contentName" => "Footercontact"])
            ->asArray()
            ->one();

        $dis = Content::find()
            ->where(["contentName" => "Disclaimer"])
            ->asArray()
            ->one();


        $contact = [];
        $footercontact = [];
        $disclaimer = [];

        if (isset($tact) && !empty($tact)) {
            $contact = ContentDetail::find()
                ->where(["contentId" => $tact["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($ft) && !empty($ft)) {
            $footercontact = ContentDetail::find()
                ->where(["contentId" => $ft["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($dis) && !empty($dis)) {
            $disclaimer = ContentDetail::find()
                ->where(["contentId" => $dis["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }


        return $this->render('contact1', [
            "contact" => $contact,
            "footercontact" => $footercontact,
            "disclaimer" => $disclaimer
        ]);
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect(Yii::$app->homeUrl . "site/index");
            // return $this->goBack();
        }

        $model->password = '';

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->redirect(Yii::$app->homeUrl . "site/index");
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        }

        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {


            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');

            // return $this->redirect(Yii::$app->homeUrl . "site/index");
            return $this->goHome();
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }


    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            }

            Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    /**
     * Verify email address
     *
     * @param string $token
     * @throws BadRequestHttpException
     * @return yii\web\Response
     */
    public function actionVerifyEmail($token)
    {
        try {
            $model = new VerifyEmailForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        if (($user = $model->verifyEmail()) && Yii::$app->user->login($user)) {
            Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
            return $this->goHome();
        }

        Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
        return $this->goHome();
    }

    /**
     * Resend verification email
     *
     * @return mixed
     */
    public function actionResendVerificationEmail()
    {
        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
        }

        return $this->render('resendVerificationEmail', [
            'model' => $model
        ]);
    }
}
