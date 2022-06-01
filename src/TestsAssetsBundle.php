<?php
namespace doston\mytest;
use yii\web\AssetBundle;
class TestsAssetsBundle extends AssetBundle
{
    public $sourcePath = '@vendor/doston/yii2-mytest/assets';
    public $css = [
        'css/style.css'
    ];
}