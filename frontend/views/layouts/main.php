<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use frontend\models\tokyoconsulting\Branch;
use frontend\models\tokyoconsulting\Content;
use frontend\models\tokyoconsulting\ContentBranch;
use frontend\models\tokyoconsulting\ContentDetail;
use frontend\models\tokyoconsulting\Country;
use frontend\models\tokyoconsulting\Member;
use frontend\models\tokyoconsulting\MemberHasType;
use rmrevin\yii\fontawesome\component\Icon;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <link rel="shortcut icon" href="<?= Yii::$app->request->baseUrl; ?>/image/logo-tcg.png?v=1" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>
    <!-- <header>
        <?php
        NavBar::begin([
            'brandLabel' => Yii::$app->name,
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',

            ],
        ]);
        $menuItems = [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
        ];
        if (Yii::$app->user->isGuest) {
            $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        }

        echo Nav::widget([
            'options' => ['class' => 'navbar-nav me-auto mb-2 mb-md-0'],
            'items' => $menuItems,
        ]);
        if (Yii::$app->user->isGuest) {
            echo Html::tag('div', Html::a('Login', ['/site/login'], ['class' => ['btn btn-link login text-decoration-none']]), ['class' => ['d-flex']]);
        } else {
            echo Html::beginForm(['/site/logout'], 'post', ['class' => 'd-flex'])
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout text-decoration-none']
                )
                . Html::endForm();
        }
        NavBar::end();

        ?> 
    </header> -->

    <main role="main" class="flex-shrink-0">
        <?php
        if (Yii::$app->controller->id == 'site') {
            echo $this->render("@frontend/views/site/header");
        } else {
            $url = Yii::$app->request->getUrl();
            $urlArr = explode('/', $url);
            $totalArr = count($urlArr);
            $branchName = $urlArr[$totalArr - 1];
            $branch = Branch::find()->where(["branchName" => $branchName])->asArray()->one();
            if (isset($branch) && !empty($branch)) {
                echo $this->render("@frontend/views/site-country/header", ["branchName" => $branchName]);
            } else {
                echo $this->render("@frontend/views/site/header");
            }
        }
        ?>
        <?= $content ?>
    </main>

    <div class="">
        <?php

        //Home
        $dataBranch = Content::footerBranch();
        $dataexplore = Content::footerExplore();
        $datapopular = Content::footerPopular();
        $datalofoot = Content::footerLogo();

        //Branch
        $datamore = ContentBranch::footerMoreAbout();
        $dataexplorebranch = ContentBranch::footerExploreTcf();
        $datapopu = ContentBranch::footerPopular();
        $databranch = ContentBranch::footerCountryBranch();

        $userInThisBranch = 0;
        if (Yii::$app->controller->id == 'site-country') {
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
                    ->where(["member.memberId" => $memberId, "b.branchName" => $branchName])
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
            echo $this->render("@frontend/views/layouts/footer1", [
                "canEdit" => $canEdit,
                "userInThisBranch" => $userInThisBranch,
                "branchName" => $branchName,
                //data//
                "datamore" => $datamore,
                "dataexplorebranch" => $dataexplorebranch,
                "datapopu" => $datapopu,
                "databranch" => $databranch,

            ]);
        } else {
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
            echo $this->render("@frontend/views/layouts/footer", [
                "dataBranch" => $dataBranch,
                "dataexplore" => $dataexplore,
                "datapopular" => $datapopular,
                "datalofoot" => $datalofoot,
                "admin" => $admin,
            ]);
        }
        if (class_exists('yii\debug\Module')) {
            $this->off(\yii\web\View::EVENT_END_BODY, [\yii\debug\Module::getInstance(), 'renderToolbar']);
        }
        $this->endBody() ?>
</body>

</html>
<?php $this->endPage();