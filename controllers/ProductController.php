<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\ReplacementProduct;
use yii\data\ActiveDataProvider;
use yii\helpers\VarDumper;

class ProductController extends Controller
{



    public function actionView($id)

    {

        // // $product = new Product();

        // $data = $product->GetProduct($id);

        // if (empty($data)) {
        //     $replacmentProduct = ReplacmentProduct::find()->where(['deleted_id' => $id])->one();
        //     $id = $replacmentProduct->replaced_id;
        //     $data = $product->GetProduct($id);
        // }

        // $this->render('view', array('item' => $data));
    }


    
}
