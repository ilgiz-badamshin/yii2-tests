<?php
define('YII_DEBUG', true);
define('YII_ENV', 'test');

call_user_func(function() {
    $container = new \yii\di\Container();
//    call_user_func(function() use ($container) {
//        require __DIR__ .'/../src/config/di.php';
//    });

//    Yii::$loader = $loader;
    Yii::$container = $container;
});

