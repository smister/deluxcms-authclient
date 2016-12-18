<?php

namespace deluxcms\authclient\widgets;

use Yii;
use deluxcms\authclient\assets\AuthClientAsset;
use yii\authclient\widgets\AuthChoice;

class AuthClientWidget extends AuthChoice
{
    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
        AuthClientAsset::register(Yii::$app->view);
    }
}