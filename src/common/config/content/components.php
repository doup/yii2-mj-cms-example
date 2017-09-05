<?php
use common\models\Components;
use common\models\Fields;

// Application Components
return [
    // HERO
    Components::HERO => [
        'name'   => Yii::t('app', 'Hero Zarautz'),
        'fields' => [
            Fields::HERO_TITLE      => [ ],
            Fields::HERO_SUBTITLE   => [ ],
            Fields::HERO_INTRO      => [ ],
            Fields::HERO_BACKGROUND => [ ],
            Fields::HERO_POSTER     => [ ],
        ],
    ],
];
