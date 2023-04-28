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
use Exception;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\tokyoconsulting\Content as TokyoconsultingContent;
use frontend\models\tokyoconsulting\ContentDetail;
use frontend\models\tokyoconsulting\master\ContentMaster;

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
                    'logout' => ['post'],
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

        $content = content::find()
            ->where(["contentName" => "Banner"])
            ->where(["contentName" => "Branch"])
            ->where(["contentName" => "Padding"])
            ->where(["contentName" => "Subbranch"])
            ->where(["contentName" => "Section"])
            ->where(["contentName" => "Pagemain"])
            ->where(["contentName" => "Philosophy"])
            ->where(["contentName" => "Paragraph"])
            ->where(["contentName" => "Background"])
            ->asArray()
            ->one();


        $banners = [];
        $branchs = [];
        $paddings = [];
        $subbranchs = [];
        $sections = [];
        $pagemains = [];




        if (isset($content) && !empty($content)) {
            $banners = ContentDetail::find()
                ->where(["contentId" => $content["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($content) && !empty($content)) {
            $branchs = ContentDetail::find()
                ->where(["contentId" => $content["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($content) && !empty($content)) {
            $paddings = ContentDetail::find()
                ->where(["contentId" => $content["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($content) && !empty($content)) {
            $subbranchs = ContentDetail::find()
                ->where(["contentId" => $content["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($content) && !empty($content)) {
            $sections = ContentDetail::find()
                ->where(["contentId" => $content["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($content) && !empty($content)) {
            $pagemains = ContentDetail::find()
                ->where(["contentId" => $content["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($content) && !empty($content)) {
            $Philosophys = ContentDetail::find()
                ->where(["contentId" => $content["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($content) && !empty($content)) {
            $Paragraphs = ContentDetail::find()
                ->where(["contentId" => $content["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($content) && !empty($content)) {
            $backgrounds = ContentDetail::find()
                ->where(["contentId" => $content["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }




        // throw new Exception(count($banners));
        return $this->render('index', [
            "banners" => $banners,
            "branchs" => $branchs,
            "paddings" => $paddings,
            "subbranchs" => $subbranchs,
            "sections" => $sections,
            "pagemains" => $pagemains,
            "Philosophys" => $Philosophys,
            "paragraphs" => $Paragraphs,

        ]);
    }

    public function actionServices()
    {
        return $this->render('services');
    }
    public function actionPhilosophy()
    {
        return $this->render('philosophy');
    }
    public function actionAbout1()
    {
        return $this->render('about1');
    }
    public function actionCareer()
    {
        return $this->render('career');
    }
    public function actionPeople()
    {
        return $this->render('people');
    }
    public function actionContact1()
    {
        return $this->render('contact1');
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
            return $this->goBack();
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

        return $this->goHome();
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
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
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
