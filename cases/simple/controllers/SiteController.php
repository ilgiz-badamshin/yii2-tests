<?php

namespace app\simple\controllers;
use yii\helpers\Url;
use yii\web\Controller;

class SiteController extends Controller
{

    public function actionForm()
    {
        $action = Url::to(['site/post']);
        return <<<HTML
<html>
<body>
<form method="post" action="$action">
<input name="test" type="text" id="test">
<input type="submit" id="submit">Submit</input>
</form>
</body>
</html>


HTML;

    }

    public function actionPost()
    {
        \Yii::$app->response->statusCode = 201;
        return print_r(\Yii::$app->request->bodyParams, true);
    }

    public function actionException()
    {
        throw new \Exception('This is not an HttpException');
    }

    public function actionEnd()
    {
        \Yii::$app->response->statusCode = 500;
        \Yii::$app->end();
    }
}