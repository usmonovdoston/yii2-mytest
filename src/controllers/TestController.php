<?php
namespace doston\mytest\controllers;
use Yii;
use yii\web\Controller;
use doston\mytest\models\Tests;
class TestController extends Controller
{
//    public $layout = 'main';
    public function actionIndex()
    {
        // регистрируем ресурсы:
        \doston\mytest\TestsAssetsBundle::register($this->view);
        $datas = Tests::find()->all();
        return $this->render('index',[
            'datas' => $datas
        ]);
    }
}