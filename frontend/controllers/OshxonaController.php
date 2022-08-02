<?php

namespace frontend\controllers;

use frontend\models\Ovqatlar;
use yii\web\Controller;
use yii\data\Pagination;

class OshxonaController extends Controller
{
    public function actionAbout()
    {
        return $this->render("about");
    }

    public function actionService()
    {
        return $this->render("service");
    }

    public function actionMenu()
    {
       $m=Ovqatlar::find();

       $sahifa=new Pagination(["totalCount"=>$m->count(),'defaultPageSize'=>3]);

       $meals=$m->offset($sahifa->offset)->limit($sahifa->limit)->orderBy("id DESC")->all();

       return $this->render("menu",["ovqatlar"=>$meals,"sahifa"=>$sahifa]);
    }

}