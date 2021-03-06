<?php

namespace common\fixtures;

use yii\test\ActiveFixture;

class ContentSourceFixture extends ActiveFixture
{
    public $modelClass = 'mobilejazz\yii2\cms\common\models\ContentSource';

    public $depends = [
        'common\fixtures\UserFixture',
        'common\fixtures\LocaleFixture',
        'common\fixtures\MediafileFixture',
    ];
}
