<?php
namespace usmonovdoston\mytest\controllers;
use Yii;
use yii\web\Controller;
use usmonovdoston\mytest\models\Tests;
class TestController extends Controller
{
//    public $layout = 'main';
    public function actionIndex()
    {
        // регистрируем ресурсы:
        \usmonovdoston\mytest\TestsAssetsBundle::register($this->view);
        $datas = Tests::find()->all();
        return $this->render('index',[
            'datas' => $datas
        ]);
    }
}