<?php
include_once "BaseController.php";
use duncan3dc\Laravel\BladeInstance;

class MainController extends BaseController
{
    function actionIndex()
    {
        $blade = new BladeInstance(__DIR__ . "/views", __DIR__ . "/views");
        echo $blade->render("login");
        return true;
    }
}