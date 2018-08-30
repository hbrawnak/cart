<?php
namespace frontend\controllers;

use backend\models\Products;
use Yii;
use yii\base\InvalidParamException;
use yii\data\ActiveDataProvider;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class ProductController extends Controller
{

    public function actionIndex($id)
    {
        $product = Products::findOne($id);

        return $this->render('index', compact('product'));
    }

}
